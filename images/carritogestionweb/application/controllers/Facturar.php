<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
define ("WSDLA", "wsaa.wsdl");     # The WSDL corresponding to WSAA
define ("WSDL", "wsfev1.wsdl");     # The WSDL corresponding to WSAA

//define ("CERT", "certificado.crt");       # The X.509 certificate in PEM format
//define ("PRIVATEKEY", "afipkey"); # The private key correspoding to CERT (PEM)

define ("CERT", "CSR_KLEINGUSTAVOJAVIER.crt");       # The X.509 certificate in PEM format
define ("PRIVATEKEY", "quebrachokey"); # The private key correspoding to CERT (PEM)

define ("PASSPHRASE", "xxxxx"); # The passphrase (if any) to sign
define ("PROXY_HOST", "186.38.34.161"); # Proxy IP, to reach the Internet
define ("PROXY_PORT", "80"); 

//define ("URL", "https://wsaahomo.afip.gov.ar/ws/services/LoginCms");  # ambiente de prueba
define ("URL", "https://wsaa.afip.gov.ar/ws/services/LoginCms");
ini_set ("soap.wsdl_cache_enabled", "0");
ini_set ('soap.wsdl_cache_ttl', "0"); 
class Facturar extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->database();
		$this->load->helper('url');
		
		$this->load->library('grocery_CRUD');
		$this->load->model('Productos_m');
		$this->load->library('session'); 
	}

	public function _example_output($output = null)
	{
		$this->load->view('admin.php',(array)$output);
	}
	public function index()
	{

        // A partir de la idOrden obtener datos de los productos, ordenes,
        //clientes, etc...
        $id=base64_decode($this->input->get('id'));
        $datos=$this->Productos_m->getOrdenUsuario($id);
        
        $dataAFIP=$this->Productos_m->getCompAfip();

        $cuitAFIP= $dataAFIP['cuitAfip'];
        $compAFIP= $dataAFIP['numCompAfip'];
        //var_export($datos);die();

        if($datos[0]['responsableinscripto']===1){
            $DocTipo=80; //80 (CUIT)
            $DocNro=$datos[0]['cuit'];
            $CbteTipo=1;
        }
        else {
            $DocTipo=96; //96 DNI 
            $DocNro=$datos[0]['dni'];
            $CbteTipo=6;
        }
        
        if($datos[0]['responsableinscripto']===2){//monotibuto
            $DocTipo=80; //80 (CUIT)
            $DocNro=$datos[0]['cuit'];
            $CbteTipo=11;
        }

        $PtoVta=$dataAFIP['PtoVta'];
       
        $argv[1]='wsfe';
        $SERVICE = $argv[1];
        $this->CreateTRA ($SERVICE);
        $CMS = $this->SignTRA ();
        $TA = $this->CallWSAA ($CMS);

        if (!file_put_contents ("TA.xml", $TA)) {
            exit ();
        }
        $ta_xml = simplexml_load_string ($TA);
        $TOKEN = $ta_xml->credentials->token;
        $SIGN = $ta_xml->credentials->sign;
        
        $opts = array(
            'ssl' => array('ciphers' => 'AES256-SHA',
            'verify_peer' => false,
            'verify_peer_name' => false)
        );

        $client_wsfe = new SoapClient (WSDL, array(
            'trace' => true,
            'encoding' => 'UTF-8',
            'cache_wsdl' => WSDL_CACHE_BOTH,
            //'ssl_method' => SOAP_SSL_METHOD_SSLv3,
            'stream_context' => stream_context_create ($opts),
            "exceptions" => false
                ));        

        $dataArray = json_decode($datos[0]['dataProductos'], true);
        $stringJson='';
        $total=0;
        foreach ($dataArray as $item) {
            $stringJson.= '<tr>';
            $stringJson.= '<td>' . htmlspecialchars($item['title']) . '</td>';
            $stringJson.= '<td align="center">' . $item['quantity'] . '</td>';				
            $stringJson.= '<td align="right"> $ ' . $item['unit_price'] . '</td>';
            $stringJson.= '<td align="right"> $ ' . $item['quantity']*$item['unit_price'] . '</td>';
            $stringJson.= '</tr>';
            $total+=$item['quantity']*$item['unit_price'];
        }       
        
        //$imp_total = $total;  FACTURA MAS IVA
        //$imp_neto = $total;
        //$imp_total = 10;
        //$imp_neto = 8.26;
        //$imp_iva = 1.73; 
        
        $imp_total = 25;

        $imp_total = round($imp_total, 2);
        $imp_iva_porcentaje = 21; // Porcentaje del IVA que deseas calcular
        $imp_neto = $imp_total / (1 + ($imp_iva_porcentaje / 100));
        $imp_neto = round($imp_neto, 2);
        $imp_iva = $imp_total - $imp_neto;
              
        
        $imp_total_conceptos = 0; 
        $imp_operaciones_exentas = 0;        
        $imp_trib = 0;
        //ImpTotal= ImpTotConc + ImpNeto + ImpOpEx + ImpTrib + ImpIVA.
        
        $results_AutRequest = $client_wsfe->FECAESolicitar (
                array(
                    'Auth' => array
                        (
                        'Token' => $TOKEN,
                        'Sign' => $SIGN,
                        'Cuit' => $cuitAFIP
                    ),
                    'FeCAEReq' => array
                        (
                        'FeCabReq' => array
                            (
                            'CantReg' => 1,                            
                            'PtoVta' => $PtoVta,
                            'CbteTipo' => $CbteTipo  
                        ),
                        'FeDetReq' => array
                            (                            
                            'FECAEDetRequest' => array
                                (
                                'Concepto' => 1, // Productos y servicios
                                'DocTipo' => $DocTipo, //80 (CUIT) - 96 DNI
                                'DocNro' => $DocNro,
                                'CbteDesde' => $compAFIP,
                                'CbteHasta' => $compAFIP,
                                'CbteFch' => date ('Ymd'),
                                'ImpTotal' => round ($imp_total, 2),
                                'ImpTotConc' => round ($imp_total_conceptos, 2),
                                'ImpNeto' => round ($imp_neto, 2),
                                'ImpOpEx' => round ($imp_operaciones_exentas, 2),
                                'ImpTrib' => round ($imp_trib, 2),
                                'ImpIVA' => $imp_iva,
                                'FchServDesde' => '',
                                'FchServHasta' => '',
                                'FchVtoPago' => '',
                                'MonId' => 'PES',
                                'MonCotiz' => 1,
                                /*'Tributos' => array(
                                    'Tributo' => array(
                                        'Id' => 99,
                                        'Desc' => 'Impuesto municipal matanza',
                                        'BaseImp' => 150,
                                        'Alic' => 5.2,
                                        'Importe' => 7.8
                                    )
                                ),*/
                                'Iva' => array(
                                    'AlicIva' => array(
                                        'Id' => 5,
                                        'BaseImp' => $imp_neto,
                                        'Importe' => $imp_iva
                                    )
                                )
                            )
                        )
                    )
                )
        );
        //echo("<table>".$stringJson."</table>");
        // echo "TOTAL:".$total;
        //die();
        // los resultados los pongo en un archivo
        if ($results_AutRequest->FECAESolicitarResult->FeDetResp->FECAEDetResponse->CAE !== '') {
            echo 'El campo CAE es:'.$results_AutRequest->FECAESolicitarResult->FeDetResp->FECAEDetResponse->CAE."<br>";
        $where='idOrden';        
        $data=array(        
            'CAE' => $results_AutRequest->FECAESolicitarResult->FeDetResp->FECAEDetResponse->CAE,
            'facturado' => 1,
            'fechaFactura' =>date ('Y-m-d')                      
        );        
        $base='ordenes';
        $result = $this->Productos_m->updategenerico($where,$id,$data,$base);      
        if($result == "NO")
        {
            echo "Error en insertar a la tabla ordenes";
        }         
        else
        {
            echo "Insertado correctamente en la tabla ordenes";

        }
        
                
        $dataFactura=array(        
            'CAE' => $results_AutRequest->FECAESolicitarResult->FeDetResp->FECAEDetResponse->CAE,            
            'fechaFactura' =>date ('Y-m-d'),                      
            'idOrden' => $id,                      
            'DocTipo' =>$DocTipo,                      
            'DocNro' =>$DocNro,                      
            'CbteTipo' =>$CbteTipo,                      
            'DataProductos' =>$datos[0]['dataProductos'],                      
            'Total' =>$total,                      
            'NroComprobante' =>$compAFIP,                      
            'imp_neto' =>$imp_neto,                      
            'imp_iva' =>$imp_iva,                      
        );        
        $base='ordenes';
        $result = $this->Productos_m->insert($dataFactura,'facturas');      
        if($result === false)
        {
            echo "Error en insertar a la tabla facturas";
        }         
        else
        {
            echo "Insertado correctamente en la tabla facturas";

        }


        $dataCompAfip=array(        
            'numCompAfip' => $compAFIP+1                   
        );
        $resultb = $this->Productos_m->updategenerico('id',0,$dataCompAfip,'plataformaspago');      
        if($resultb == "NO")
        {
            echo "Error en insertar a la tabla plataformaspago";
        }         
        else
        {
            echo "Insertado correctamente en la tabla plataformaspago";

        }
        
        } else {
            echo 'El campo CAE está vacío.<br>Ha ocurrido un error.';
            var_export($results_AutRequest);
        }

        //var_export($results_AutRequest);
        file_put_contents (microtime (true) . '_results_AutRequest.txt', var_export ($results_AutRequest, true));
        file_put_contents (microtime (true) . '_results_AutRequest_soap.txt', var_export ($client_wsfe, true));
    }
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
function CreateTRA ($SERVICE)
{
    $TRA = new SimpleXMLElement (
            '<?xml version="1.0" encoding="UTF-8"?>' .
            '<loginTicketRequest version="1.0">' .
            '</loginTicketRequest>');
    $TRA->addChild ('header');
    $TRA->header->addChild ('uniqueId', date ('U'));

    $TRA->header->addChild ('generationTime', date ('c', date ('U') - 60));
    $TRA->header->addChild ('expirationTime', date ('c', date ('U') + 60));
    $TRA->addChild ('service', $SERVICE);
    $TRA->asXML ('TRA.xml');
}

function SignTRA ()
{
    $STATUS = openssl_pkcs7_sign ("TRA.xml", "TRA.tmp", "file://" . CERT, array("file://" . PRIVATEKEY, PASSPHRASE), array(), !PKCS7_DETACHED
    );
    if (!$STATUS) {
        exit ("ERROR generating PKCS#7 signature\n");
    }
    $inf = fopen ("TRA.tmp", "r");
    $i = 0;
    $CMS = "";
    while (!feof ($inf)) {
        $buffer = fgets ($inf);
        if ($i++ >= 4) {
            $CMS.=$buffer;
        }
    }
    fclose ($inf);
    unlink ("TRA.tmp");
    return $CMS;
}

function CallWSAA ($CMS)
{
    $client = new SoapClient (WSDLA, array(
        'soap_version' => SOAP_1_2,
        'location' => URL,
        'trace' => 1,
        'exceptions' => 0
    ));
    $results = $client->loginCms (array('in0' => $CMS));

    file_put_contents ("request-loginCms.xml", $client->__getLastRequest ());
    file_put_contents ("response-loginCms.xml", $client->__getLastResponse ());
    if (is_soap_fault ($results)) {
        exit ("SOAP Fault: " . $results->faultcode . "\n" . $results->faultstring . "\n");
    }
    return $results->loginCmsReturn;
}
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

}
