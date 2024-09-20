<?php //QUEBRACHO
header("Access-Control-Allow-Origin: *"); 
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE');
defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH . 'libraries/RestController.php'; 
require APPPATH . 'libraries/Format.php';

class Api extends RestController{
  	
	function __construct()
    {
        // Construct the parent class
        parent::__construct();
		$this->load->database();
		$this->load->library('Session'); //agregue para el login
		$this->load->helper('url'); //agregue para el login		
		$this->load->model('Login_m');
		$this->load->model('Registro_m');
		$this->load->model('Productos_m');		
		$this->load->model('Email_m');
    }	
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
function getEstadisticasVendidos_post(){
    $posted        = file_get_contents("php://input");
    $obj           =  json_decode($posted);
    $idproducto = ($obj->idPRODUCTO);

    $consulta=$this->Productos_m->getEstadisticasVendidos($idproducto);
    
    if($consulta!==false)
    { 
    $this->response( ($consulta[0]['cantidad_vendido']), 200 );   

    } 
    else{	
        $this->response( 0, 200 );
        }

}
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
function generarCodigoActivacion() {
    $caracteres = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
    $longitud = 5;
    $codigo = '';

    // Generar un código aleatorio de 5 caracteres
    for ($i = 0; $i < $longitud; $i++) {
        $codigo .= $caracteres[rand(0, strlen($caracteres) - 1)];
    }

    return $codigo;
}
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    function registrarUsuario_post()
    {   
        $posted        = file_get_contents("php://input");
            $obj           =  json_decode($posted);
            
            $usuario = isset($obj->USUARIO) ? $obj->USUARIO : null;        
            $usuario=strip_tags($usuario);
            
            $password = isset($obj->PASSWORD) ? $obj->PASSWORD : null;
            $password=strip_tags($password);
            $password=MD5($password);
            $telefono=ucwords(strtolower( $obj->TELEFONO));
            $telefono=str_replace(' ', '', $telefono);
             
            $codigoActivacion=$this->generarCodigoActivacion();

            $dataArray=array(
                'usuario' => strtolower($usuario),
                'nombre' => ucwords(strtolower($obj->NOMBRE)),           
                'apellido' => ucwords(strtolower($obj->APELLIDO)),           
                'telefono' => $telefono,
                'password' => $password,           
                'token' => $codigoActivacion
            );
        $result = $this->Registro_m->insert(  $dataArray,'usuarios');        
        
       
        if($result <> true)
        {
            $this->response($result,400);
        }        
        else
        {    
            
            $resultado = array_merge($dataArray, array(
                'idUsuario' => $result,
                'codActivacion' => $codigoActivacion
            )); 
        $mensaje="
            Hola ".ucwords(strtolower($obj->NOMBRE)).",  ¿Como estás? <br/>
            <p>Gracias por registrarte en Quebracho</p>
            Tu código de activación es: <strong>".$codigoActivacion."</strong><br><br>
            Tu usuario es: <strong>".$obj->USUARIO."</strong><br>
            Tu password  es: <strong>".$obj->PASSWORD."</strong><br>";            
            $this->Email_m->enviaNotificacionEmail('info@gestionst.com.ar',(strtolower($obj->USUARIO)),'Registro Quebracho',$mensaje);
            $this->response( $resultado, 200 ); 
        }
        
    }
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
function updateUsuario_post()
    {
		$posted        = file_get_contents("php://input");
        $obj           =  json_decode($posted);        
        
        $where='idUsuario';        
        $data=array(        
            'nombre' => strip_tags($obj->nombre),
            'apellido' => strip_tags($obj->apellido),
            'telefono' => strip_tags($obj->telefono),          
            'dni' => strip_tags($obj->dni),          
            'responsableinscripto' => strip_tags($obj->respo),          
            'cuit' => strip_tags($obj->cuit),          
            'direccion' => strip_tags($obj->direccion),          
        );
        
        $base='usuarios';
        $result = $this->Productos_m->updategenerico($where,$obj->idUsuario,$data,$base); 		
         
        if($result == "NO")
        {
            $this->response($data,400);
        }         
        else
        {
             $this->response( $result, 200 );

        }
    }            
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
function updateOrden_post()
    {
		$posted        = file_get_contents("php://input");
        $obj           =  json_decode($posted);        
        
        $where='idOrden';        
        $data=array(                    
            'respuesta' => strip_tags($obj->respuesta)                      
        );
        if (isset($obj->uuid)) {
            // Si está presente, agrégalo a los datos que se actualizarán en la base de datos
            $data['uuid'] = $obj->uuid;
        }
        $base='ordenes';
        $result = $this->Productos_m->updategenerico($where,$obj->idOrden,$data,$base); 		
         
        if($result == "NO")
        {
            $this->response($data,400);
        }         
        else
        {
             $this->response( $result, 200 );

        }
    }
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
public function getUserById_post() 
{
    
    $posted        = file_get_contents("php://input");
    $obj           =  json_decode($posted);
    
    $idusuario = ($obj->idUSUARIO);

    $consulta=$this->Login_m->getUserById($idusuario);	
    $usuarioConsulta = $consulta->result_array();		
    if($consulta->num_rows() > 0 )
    { 
    $this->response( ($usuarioConsulta), 200 );   

    } 
    else{	
        $this->response( ("error"."usr:".$usuario." pass:".$password), 404 );
        }		 
    
}
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
public function iniciarSesionRegistro_post() 
{
    
    $posted        = file_get_contents("php://input");
    $obj           =  json_decode($posted);
    
    $idusuario = isset($obj->IDUSUARIO) ? $obj->IDUSUARIO : null;        
     
    

    $consulta=$this->Login_m->validarPasswordRegistro($idusuario);	
    $usuarioConsulta = $consulta->result_array();		
    if($consulta->num_rows() > 0 )
    { 
    $this->response( ($usuarioConsulta), 200 );   

    } 
    else{	
        $this->response( ("error"."usr:".$usuario." pass:".$password), 404 );
        }		 
    
}
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    public function iniciarSesion_post() 
        {
            
            $posted        = file_get_contents("php://input");
            $obj           =  json_decode($posted);
            
            $usuario = isset($obj->USUARIO) ? $obj->USUARIO : null;        
            $usuario=strip_tags($usuario);
            
            $password = isset($obj->PASSWORD) ? $obj->PASSWORD : null;
            $password=strip_tags($password);
            $password=MD5($password);
            
            

            $consulta=$this->Login_m->validarPassword($usuario,$password);	
            $usuarioConsulta = $consulta->result_array();		
            if($consulta->num_rows() > 0 )
            { 
            $this->response( ($usuarioConsulta), 200 );   

            } 
            else{	
                $this->response( ("error"."usr:".$usuario." pass:".$password), 404 );
                }		 
            
        }
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
public function generatePassword($length)
{
    $key = "";
    $pattern = "1234567890abcdefghijklmnopqrstuvwxyz";
    $max = strlen($pattern)-1;
    for($i = 0; $i < $length; $i++){
        $key .= substr($pattern, mt_rand(0,$max), 1);
    }
    return $key;
}
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
public function resetPass_post()
{        
	$posted        = file_get_contents("php://input");
    $obj           =  json_decode($posted); 
 
    $consulta=$this->Login_m->recordarPass(strip_tags($obj->USUARIO));	
    $consulta_array = $consulta->result_array(); 
		
	if($consulta->num_rows() > 0 )
    {
        $nuevoPass=$this->generatePassword(8);
        $result = $this->Login_m->update( $consulta_array[0]['idUsuario'], array(
                'PASSWORD' => md5($nuevoPass)           
                    ),'usuarios','idUsuario');	 

        if($result == "NO")
        {
            $this->response($result,400);
        }		
        else{
            $para=$consulta_array[0]['usuario'];
            $asunto="[Resetear contraseña Quebracho]";
            $mensaje="Se reseteo tu contraseña a: <strong>".$nuevoPass."</strong><br/><br/><br/> Gracias por elegirnos";
            $this->Email_m->enviaNotificacionEmail('info@gestionst.com.ar',$para,$asunto,$mensaje);
            $this->response( $result, 200 ); 
            }
    } 
    else
    {	
	$this->response( ($consulta_array), 404 );
	}    
               
}
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
public function ProductosMasBuscados_post() 
{      
    $posted = file_get_contents("php://input");
    $obj = json_decode($posted);
    
    $consulta = $this->Productos_m->getProductosMasBuscados();

    $consulta_array = $consulta->result_array();        

    if ($consulta->num_rows() > 0 ) { 
        $this->response($consulta_array, 200);
    } else {            
        $this->response($consulta_array, 404);
    }         
}
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
public function ProductosMes_post() 
{      
    $posted = file_get_contents("php://input");
    $obj = json_decode($posted);
    
    $consulta = $this->Productos_m->getProductosMes();

    $consulta_array = $consulta->result_array();        

    if ($consulta->num_rows() > 0 ) { 
        $this->response($consulta_array, 200);
    } else {            
        $this->response($consulta_array, 404);
    }         
}
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
public function Productos_post() 
{      
    $posted = file_get_contents("php://input");
    $obj = json_decode($posted);

    // Obtén el valor de búsqueda del objeto JSON
    $busqueda = isset($obj->busqueda) ? $obj->busqueda : null;

    // Obtén el número de página del objeto JSON (si está presente)
    $pageNumber = isset($obj->pageNumber) ? $obj->pageNumber : 1;

    // Llama al modelo con el valor de búsqueda y número de página
    $consulta = $this->Productos_m->getProductos($busqueda, $pageNumber);

    $consulta_array = $consulta->result_array();        

    if ($consulta->num_rows() > 0 ) { 
        $this->response($consulta_array, 200);
    } else {            
        $this->response($consulta_array, 404);
    }         
}
/////////////////////////////////////////////////////getCatt111111111111111///////////////////////////////////////////////////////////////	
public function ProductosCaracteristicas_post() 
{      
    $posted = file_get_contents("php://input");
    $obj = json_decode($posted);

    // Obtén el valor de búsqueda del objeto JSON
    $idProducto = ($obj->idPRODUCTO);    

    // Llama al modelo con el valor de búsqueda y número de página
    $consulta = $this->Productos_m->getProductosCaracteristicas($idProducto);

    $consulta_array = $consulta->result_array();   
    
    

    if ($consulta->num_rows() > 0 ) { 
        $this->response($consulta_array, 200);
    } else {            
        $this->response(false, 200);
    }         
}
/////////////////////////////////////////////////////getCatt111111111111111///////////////////////////////////////////////////////////////	
public function ProductosOfertas_post() 
{      
    $posted        = file_get_contents("php://input");
    $obj           =  json_decode($posted);   

    // Llama al modelo con el valor de búsqueda
    $consulta = $this->Productos_m->getProductosOfertas();
    $consulta_array = $consulta->result_array();        
        if($consulta->num_rows() > 0 )
        { 
            $this->response( ($consulta_array), 200 );  

        } 
        else{            
            $this->response( ($consulta_array), 404 );
            }         
    }
/////////////////////////////////////////////////////getCatt111111111111111///////////////////////////////////////////////////////////////	
public function Categorias_post() 
    {      
        $posted        = file_get_contents("php://input");
        $obj           =  json_decode($posted);
            
            
        // Obtén el valor de búsqueda del objeto JSON
        $busqueda = isset($obj->busqueda) ? $obj->busqueda : null;

        // Llama al modelo con el valor de búsqueda
        $consulta = $this->Productos_m->getCategorias();
        $consulta_array = $consulta->result_array();        
            if($consulta->num_rows() > 0 )
            { 
                $this->response( ($consulta_array), 200 );  

            } 
            else{            
                $this->response( ($consulta_array), 404 );
                }         
        }
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
public function ProductosCategoria_post() 
{      
    $posted = file_get_contents("php://input");
    $obj = json_decode($posted);

    // Obtén el valor de búsqueda del objeto JSON
    $idCategoria =$obj->IDCATEGORIA;

    // Obtén el número de página del objeto JSON (si está presente)
    $pageNumber = isset($obj->pageNumber) ? $obj->pageNumber : 1;

    // Llama al modelo con el valor de búsqueda y número de página
    $consulta = $this->Productos_m->getProductosCategoria($idCategoria, $pageNumber);

    $consulta_array = $consulta->result_array();        

    if ($consulta->num_rows() > 0 ) { 
        $this->response($consulta_array, 200);
    } else {            
        $this->response($consulta_array, 404);
    }         
}
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
public function setOrden_post() 
    {      
        $posted        = file_get_contents("php://input");
        $obj           =  json_decode($posted);
            
        $result = $this->Productos_m->insert(  array(
            'idUsuario' => $obj->idUsuario,
            'dataProductos' => ($obj->itemsJson),
            'totalCompra' => $obj->totalCompra,
            'procesaPago' => 'pendiente',          
            'metodoPago' => $obj->metodoPago          
        ),'ordenes');   
        // Obtén el valor de búsqueda del objeto JSON   
                
        if ($result !== false) {
            
            $dataArray = json_decode($obj->itemsJson, true);
			
			$stringJson='';
            $total=0;
            $stringJson.= '<div style="border: 1px solid #cbc9c9; padding: 10px; margin: 10px;">';
			// Mostrar el JSON en un área de texto preformateada en HTML
			foreach ($dataArray as $item) {
				$stringJson.= '<div style="border: 1px solid #cbc9c9; padding: 10px; margin: 10px;">';
				$stringJson.= '<label>' . htmlspecialchars($item['title']) . '</label><br>';
				$stringJson.= '<label>Cantidad: ' . $item['quantity'] . '</label><br>';				
				$stringJson.= '<label>Precio: $' . $item['unit_price'] . '</label><br>';
				$stringJson.= '<img style="width:75px;height:75px;" src="' . htmlspecialchars($item['picture_url']) . '" alt="Producto"><br>';
				$stringJson.= '</div>';
                $total+=$item['quantity']*$item['unit_price'];
			
            $dataSet=array(
            'idProducto' => $item['id'],                     
            'cantidad_vendido' => $item['quantity']          
            );
            $this->Productos_m->setEstadisticas($dataSet);   
            $this->Productos_m->modificaStock($dataSet);   
            }


            $stringJson.= '<label><strong>&nbsp;&nbsp;&nbsp;TOTAL:</strong> $' . $total . '</label><br>';
            $stringJson.= '</div>';
            //SE NOTIFICA A LOS ADMINS
            $para=$obj->usuario; //MAILS DE ADMINS
                
            $asunto="[COMPRA]";
            $mensaje="Hola! ¿Cómo estás?.<br/>
            Realizaste una compra en nuestro comercio:<br/><br/>
            ".$stringJson."
            <br/>
            Muchas gracias<br/>
            <br/>
            ";
          
          $this->Email_m->enviaNotificacionEmail('info@gestionst.com.ar',$para,$asunto,$mensaje);
          $this->response($result, 200);
        } else {
            $error_message = $this->db->error()['message'];  // Obtener el mensaje de error de la base de datos
            $this->response($error_message, 500);  // Respondemos con un código 500 y el mensaje de error
        }
                 
        }
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
public function getOrdenes_post() 
{      
    $posted = file_get_contents("php://input");
    $obj = json_decode($posted);
    
    // Llama al modelo con el array de IDs de categorías
    $consulta = $this->Productos_m->getOrdenes($obj->idUsuario);
    $consulta_array = $consulta->result_array();  
    
    if ($consulta->num_rows() > 0) { 
        $this->response($consulta_array, 200);
    } else {
        $this->response(['error' => 'No se encontraron ordenes'], 404);
    }
}
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
public function notificacion_tango_post() {
    $posted = file_get_contents("php://input");
    
    // Decodificamos el JSON
    $decoded = json_decode($posted, true);
    $data=array( 
        'mensaje' =>$decoded['Message'],
        'descripcion' =>$decoded['Topic'],       
        'idTango' => $decoded['Resource'],         
        'statusCode' => 400         
    );

    $this->Productos_m->insert($data,'logHook');
    /*
    // Obtenemos el JSON recibido
    $posted = file_get_contents("php://input");
    
    // Decodificamos el JSON
    $decoded = json_decode($posted, true);
    
    // Comprobamos si el JSON se decodificó correctamente
    if ($decoded === null) {
        $this->response("Error al decodificar el JSON", 400);
        $errorJson=array( 
            'descripcion' =>'Error, el id no esta en la base de datos-1',       
            'idTango' => $decoded['Resource'],         
            'statusCode' => 400         
        );
        $this->logHook($errorJson);
        return;
    }

    
    
    if($decoded['Topic']==='StockProductUpdate'){
        if($this->Productos_m->getProductoIdTango($decoded['Resource'])===false){                       
            $errorJson=array( 
                'mensaje' =>'Error, el id no esta en la base de datos0',
                'descripcion' =>$decoded['Topic'],       
                'idTango' => $decoded['Resource'],         
                'statusCode' => 400         
            );
            $this->logHook($errorJson);
            $this->response($errorJson, 400);            
            die();
        }
        $getStock=$this->getStockTango($decoded['Resource']); 
       
        $data=array( 
            'idTango' => $decoded['Resource'],       
            'cantidadProducto' => $getStock[0]['Quantity']          
        );
        $updated=$this->Productos_m->updategenerico('idTango',$decoded['Resource'],$data,'productos');        
        $statusCode = ($updated !== 'NO') ? 200 : 400;        
        
        
        $statusMessage = ($statusCode === 200) ? 'Procesado correctamente' : 
        'Error, el ID no está en la base de datos1';
        $errorJson = array( 
            'mensaje' => $statusMessage,
            'descripcion' => $decoded['Topic'],
            'idTango' => $decoded['Resource'],
            'statusCode' => $statusCode
        );
        $this->logHook($errorJson);
        $this->response($errorJson, $statusCode);
                
    }
    else{
        if($decoded['Topic']==='PriceProductUpdate'){            
            if($this->Productos_m->getProductoIdTango($decoded['Resource'])===false){               

                $errorJson=array( 
                    'mensaje' =>'Error, el id no esta en la base de datos2',
                    'descripcion' =>$decoded['Topic'],       
                    'idTango' => $decoded['Resource'],         
                    'statusCode' => 400         
                );
                $this->logHook($errorJson);
                $this->response($errorJson, 400);
                die();
            }
            //getPrecioTango
            $getPrecio=$this->getPrecioTango($decoded['Resource']); 
            
            $data=array( 
                'idTango' => $decoded['Resource'],       
                'precioProducto' => $getPrecio[0]['Price']          
            );
            $updated=$this->Productos_m->updategenerico('idTango',$decoded['Resource'],$data,'productos');
             
            $statusCode = ($updated !== 'NO') ? 200 : 400;
            $statusMessage = ($statusCode === 200) ? 'Procesado correctamente' : 
            'Error, el ID no está en la base de datos3';
            $errorJson = array( 
                'mensaje' => $statusMessage,
                'descripcion' => $decoded['Topic'],
                'idTango' => $decoded['Resource'],
                'statusCode' => $statusCode
            );
            $this->logHook($errorJson);
            $this->response($errorJson, $statusCode);                     
        }
    } */  
}
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
public function logHook($data){    	
   return  $this->Productos_m->insert($data,'logHook');   
}
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
public function getTerminos_post(){
        $consulta=$this->Productos_m->getDatosAdmin();				
		

        $consulta_array = $consulta->result_array();        

        if ($consulta->num_rows() > 0 ) { 
            $this->response($consulta_array[0]["terminosycondiciones"], 200);
        } else {            
            $this->response("error en consulta", 404);
        }     
}
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
public function setSession(){		
	if ($this->session->userdata('logged_in')) {		
	}
	else{
		$consulta=$this->Productos_m->getDatosAdmin();				
		$consulta_array = $consulta->result_array();				
						$data = array(
							'email' => "lascolonias152@gmail.com",
							'logged_in' => TRUE,
							'tangoToken'=> $consulta_array[0]["tangoToken"],
							'tangoLista' => $consulta_array[0]["tangoLista"]
						);
						 $this->session->set_userdata($data);
						 
	}	
}
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
function getStockTango($idProducto) {
    $pageNumber = 1;
    $productos = [];
	$this->setSession();
	do {
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://tiendas.axoft.com/api/Aperture/Stock?pageSize=500&pageNumber=' . $pageNumber.'&Id='.$idProducto,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => false,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
            CURLOPT_HTTPHEADER => array(
                'accesstoken: '.$this->session->userdata('tangoToken')
            ),
        ));
        $response = curl_exec($curl);
        curl_close($curl);
        $data = json_decode($response, true);
        
        if (isset($data['Data']) && is_array($data['Data'])) {
            $productos = array_merge($productos, $data['Data']);
        }
        $pageNumber++;
    } while ($data['Paging']['MoreData']===true);
    return $productos;
}
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
function getPrecioTango($idProducto) {
    $pageNumber = 1;
    $productos = [];
	$this->setSession();
	do {
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://tiendas.axoft.com/api/Aperture/Price?pageSize=500&pageNumber=' . $pageNumber.'&Id='.$idProducto,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => false,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
            CURLOPT_HTTPHEADER => array(
                'accesstoken: '.$this->session->userdata('tangoToken')
            ),
        ));
        $response = curl_exec($curl);
        curl_close($curl);
        $data = json_decode($response, true);
        
        if (isset($data['Data']) && is_array($data['Data'])) {
            $productos = array_merge($productos, $data['Data']);
        }
        $pageNumber++;
    } while ($data['Paging']['MoreData']===true);
    return $productos;
}
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
public function success_mp_get(){
    $where='idOrden';
    $id_compra=$this->input->get('external_reference');
    $data=array(        
        'procesaPago' => 'pagado'          
    );
    $base='ordenes';
    $this->Productos_m->updategenerico($where,$id_compra,$data,$base); 
    $this->mailCheckout("Mercadopago: ".$id_compra,$data['procesaPago']);
    $this->generaOrdenTango_get($id_compra,'MERCADOPAGO');   
}
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
public function pending_mp_get(){
    $where='idOrden';
    $id_compra=$this->input->get('external_reference');
    $data=array(        
        'procesaPago' => 'pendiente'          
    );
    $base='ordenes';
    $this->Productos_m->updategenerico($where,$id_compra,$data,$base);
    $this->mailCheckout("Mercadopago: ".$id_compra,$data['procesaPago']);
}
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
public function failure_mp_get(){
    $where='idOrden';
    $id_compra=$this->input->get('external_reference');
    $data=array(        
        'procesaPago' => 'fallo'   
    );
    $base='ordenes';
    $this->Productos_m->updategenerico($where,$id_compra,$data,$base);
    $this->mailCheckout("Mercadopago: ".$id_compra,$data['procesaPago']);
}
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
public function success_ua_post(){
    $posted        = file_get_contents("php://input");
    $obj           =  json_decode($posted);
    $where='uuid';
    $id_compra=$obj->uuid;
    $data=array(        
        'procesaPago' => 'pagado'          
    );
    $base='ordenes';
    $this->Productos_m->updategenerico($where,$id_compra,$data,$base);
    $this->mailCheckout("UALA: ".$id_compra,$data['procesaPago']);
    $this->generaOrdenTango_get($id_compra,'UALA');    
}
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
public function pending_ua_post(){
    $posted        = file_get_contents("php://input");
    $obj           =  json_decode($posted);
    $where='uuid';
    $id_compra=$obj->uuid;
    $data=array(        
        'procesaPago' => 'pendiente'          
    );
    $base='ordenes';
    $this->Productos_m->updategenerico($where,$id_compra,$data,$base);
    $this->mailCheckout("UALA: ".$id_compra,$data['procesaPago']);
}
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
public function failure_ua_post(){
    $posted        = file_get_contents("php://input");
    $obj           =  json_decode($posted);
    $where='uuid';
    $id_compra=$obj->uuid;
    $data=array(        
        'procesaPago' => 'fallo'   
    );
    $base='ordenes';
    $this->Productos_m->updategenerico($where,$id_compra,$data,$base);
    $this->mailCheckout("UALA: ".$id_compra,$data['procesaPago']);
}
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
public function mailCheckout($id_compra,$estado){
    $para="marcoscolombo66@gmail.com,Quebrachoapp@gmail.com"; //MAILS DE ADMINS
    $stringMail="";
    
    $stringMail.= '<div style="border: 1px solid #cbc9c9; padding: 10px; margin: 10px;">';
    $stringMail.= '<label><strong>Orden N°: </strong>' . $id_compra . '</label><br>';
    $stringMail.= '<label><strong>Estado: </strong>' . $estado . '</label><br>';    
    $stringMail.= '</div>';
            $asunto="[Notificación del sistema]";
            $mensaje="Se proceso el pago:
            <br/>".$stringMail."
            ";
          
          $this->Email_m->enviaNotificacionEmail('info@gestionst.com.ar',$para,$asunto,$mensaje);
}
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
public function cargaComprobante_post(){
	// Retrieve and decode the posted JSON data
   $posted        = file_get_contents("php://input");
   $obj           =  json_decode($posted);


   // Separate out the supplied keys/values
   $fileName      =  strip_tags($obj->name);
   $fileData      =  strip_tags($obj->file);
   
   $idOrden      =  strip_tags($obj->idOrden);


   // Format the supplied base64 data URI so that we remove the initial base64 identifier
   $uri           =  substr($fileData,strpos($fileData,",")+1);


   // Replace any spaces in the formatted base64 URI string with pluses to avoid corrupted file data
   $encodedData   = str_replace(' ','+',$uri);


   // Decode the formatted base64 URI string
   $decodedData   = base64_decode($encodedData);


   try {
      
      // Write the base64 URI data to a file in a sub-directory named uploads
      if(!file_put_contents('images/comprobantes/' . $fileName, $decodedData))
      {
         // Uh-oh! Something went wrong - inform the user
         echo json_encode(array('message' => 'Error! No se pudo guardar el archivo. '));
      $entro=false;
	  }else {$entro=true;}

      // Everything went well - inform the user :)
	  if ($this->actualiza_foto($idOrden,$fileName)!="0" OR ($entro==true))    
	 // if ("1"=="1")
	  {
		  //SE NOTIFICA A LOS ADMINS
		  $para="marcoscolombo66@gmail.com,Quebrachoapp@gmail.com"; //MAILS DE ADMINS
			 
			 $asunto="Se cargo comprobante de compra";
			 $mensaje="Hola! ¿Cómo estás?.<br/>
			 Realizaron un pago y subieron el comprobante por la orden Nº ".$idOrden."<br/>
			 Debes revisar el comprobante y modificar el estado de la reserva.
			 <br/>
			 Muchas gracias<br/>
			<br/>
			 ";
			 
			 $this->Email_m->enviaNotificacionEmail('info@gestionst.com.ar',$para,$asunto,$mensaje);
		  echo json_encode(array('message' => 'Se subio el comprobante correctamente, en uno minutos se verificará.'));
	  }
	  else{
		  echo json_encode(array('message' => 'Error!'));
	  }
       } 
   catch(Exception $e)
   {
      // Uh-oh! Something went wrong - inform the user
      echo json_encode(array('message' => 'Error!'));
   }
	
}
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
public function actualiza_foto($idOrden,$fileName){    
    $data = array(
        'comprobante' => $fileName,
        'estado_comprobante' => 'verificar',
        'idOrden' => $idOrden
    );

    $this->db->insert('comprobantes', $data);
    $respuesta = $this->db->insert_id();
     if ($respuesta !==false){
       return "1";
    }else {
       return  "0"; 
    }
    }
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
public function generaOrdenTango_get($idOrden,$plataforma){
    // URL de la API
    $totales=0;
    $jsonProductos='';
    //$idOrden=38;
    
    //si plataforma es mercadopago buscar por $idOrden sino por uuid
    if($plataforma==='MERCADOPAGO'){
        $arrayOrdenes = $this->Productos_m->getOrdenId($idOrden);
    }
    else{
        $arrayOrdenes = $this->Productos_m->getOrdenIdUala($idOrden);
    }
        
    
    if (!empty($arrayOrdenes) && isset($arrayOrdenes[0]['dataProductos'])) {
        // Decodificar la cadena JSON en un array asociativo
        $dataProductosArray = json_decode($arrayOrdenes[0]['dataProductos'], true);

        // Verificar si la decodificación fue exitosa
        if ($dataProductosArray !== null) {
            // Ahora $dataProductosArray es un array con la estructura de los datos originales en "dataProductos"
             
            foreach ($dataProductosArray as $producto){
                //echo $producto['id']."<br/>";
                $arrayProductos=$this->Productos_m->getProductoId($producto['id']);
                $arrayUsuario = $this->Productos_m->getUsuarioId($arrayOrdenes[0]['idUsuario']);
                $totales+=$producto['quantity']*$producto['unit_price'];
                $jsonProductos.='{
                    "ProductCode": "'.$arrayProductos[0]['idTango'].'",
                    "SKUCode": "'.$arrayProductos[0]['SKUCode'].'",    
                    "VariantCode": null,        
                    "Description": "'.$arrayProductos[0]['nombreProducto'].'",
                    "VariantDescription": null,
                    "Quantity": '.$producto['quantity'].',
                    "UnitPrice": '.$producto['unit_price'].',
                    "DiscountPercentage": 0.0,
                    "MeasureCode":"KILOGRAMOS",  
                    "SelectMeasureUnit": "P" 
                },';
            }
             

             
        } else {
            // Manejar el caso de error al decodificar JSON
            echo "Error al decodificar el JSON en 'dataProductos'.";
        }
    } else {
        // Manejar el caso de que no se encuentre la clave 'dataProductos' o $arrayOrdenes esté vacío
        echo "No se encontraron datos de productos o la clave 'dataProductos' no está presente en el resultado.";
    }
    
     
    $hoy = date("Y-m-d\TH:i:s", strtotime("now"));
    $url = 'https://tiendas.axoft.com/api/Aperture/order';

    // Datos del cuerpo de la solicitud en formato JSON
    $data = '{
        "Date": "'.$hoy.'",
        "Total": '.$totales.',
        "PaidTotal": '.$totales.', 
        "OrderID": "'.$idOrden.'",    
        "OrderNumber": "T'.$idOrden.'",  
        "ValidateTotalWithPaidTotal": false,
        "Customer": {
            "CustomerID": "'.$arrayUsuario[0]['idUsuario'].'",
            "DocumentType": "96",    
            "IVACategoryCode": "CF",
            "User": "'.$arrayUsuario[0]['usuario'].'",
            "Email": "'.$arrayUsuario[0]['usuario'].'",    
            "ProvinceCode": "1"
        },
        "OrderItems": [
            '.$jsonProductos.'
        ],
        "CashPayment": {
            "PaymentID": "'.$idOrden.'",
            "PaymentMethod": "MPA",
            "PaymentTotal": '.$totales.'
        }
    }';
  //var_export($data);die();
    // Inicializar la sesión cURL
    $ch = curl_init();
    // Configurar las opciones de la solicitud
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    // Ejecutar la solicitud y capturar la respuesta
    $response = curl_exec($ch);
    // Cerrar la sesión cURL
    curl_close($ch);
    // Mostrar la respuesta (puedes manejarla según tus necesidades)
    echo $response;
}
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
public function sumarClickEstadistica_post(){
    $posted        = file_get_contents("php://input");
    $obj           =  json_decode($posted);    
    
    $data=array(
        'idProducto' => $obj->idPRODUCTO                
    );    	
    $this->Productos_m->setEstadisticaClick($data);    
 }
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
public function agregarFavorito_post(){
    $posted        = file_get_contents("php://input");
    $obj           =  json_decode($posted);    
    
    $data=array(
        'idProducto' => $obj->idPRODUCTO,
        'idUsuario' => $obj->idUSUARIO        
    );    	
    return  $this->Productos_m->insert($data,'favoritos');   
 }
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
public function quitarFavorito_post(){
    $posted        = file_get_contents("php://input");
    $obj           =  json_decode($posted);    
          	
    return  $this->Productos_m->eliminaRegistroFavorito($obj->idPRODUCTO,$obj->idUSUARIO);   
 }
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
public function getFavorito_post(){
    $posted        = file_get_contents("php://input");
    $obj           =  json_decode($posted);      
     
    $consulta= $this->Productos_m->getFavorito($obj->idPRODUCTO,$obj->idUSUARIO);
    if($consulta!==false)
    { 
    $this->response(true, 200 );
    } 
    else{	
        $this->response( false, 200 );
        }        
 }
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
public function getProductosColores_post(){
    $posted        = file_get_contents("php://input");
    $obj           =  json_decode($posted);      
     
    $consulta= $this->Productos_m->getColores($obj->idPRODUCTO);
    if($consulta!==false)
    { 
    $this->response($consulta, 200 );
    } 
    else{	
        $this->response( false, 200 );
        }        
 }
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
public function favoritosListado_post(){
    $posted = file_get_contents("php://input");
    $obj = json_decode($posted);    
   

    // Llama al modelo con el array de IDs de categorías
    $consulta = $this->Productos_m->getFavoritosListado($obj->idUSUARIO);
    $consulta_array = $consulta->result_array();  
    
    if ($consulta->num_rows() > 0) { 
        $this->response($consulta_array, 200);
    } else {
        $this->response(['error' => 'No se encontraron favoritos'], 404);
    }
}
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
function activarRegistro_post()
    {
		$posted        = file_get_contents("php://input");
        $obj           =  json_decode($posted);        
        
        $where='idUsuario';        
        $data=array(                    
            'activa' => 1                      
        );
        
        $base='usuarios';
        $result = $this->Productos_m->updategenerico($where,$obj->IDUSUARIO,$data,$base); 		
         
        if($result == "NO")
        {
            $this->response($data,400);
        }         
        else
        {
             $this->response( $result, 200 );

        }
    }
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
}