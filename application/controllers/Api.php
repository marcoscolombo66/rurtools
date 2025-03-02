<?php
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
            $token=rand(10000000,99999999);



        $result = $this->Registro_m->insert(  array(
            'usuario' => strtolower($usuario),
            'nombre' => ucwords(strtolower($obj->NOMBRE)),           
            'apellido' => ucwords(strtolower($obj->APELLIDO)),           
            'telefono' => $telefono,
            'password' => $password,           
            'token' => $token
        ),'usuarios');
        
        if($result <> true)
        {
            $this->response($result,400);
        }
        
        else
        {
            
            
            $mensaje="
    Hola ".ucwords(strtolower($obj->NOMBRE)).",  ¿Como estás? <br/>
    <p>Gracias por registrarte en Quebracho, ya puedes acceder con tu usuario y contraseña. <br/>";

            
    $this->Email_m->enviaNotificacionEmail('info@gestionst.com.ar',(strtolower($obj->USUARIO)),'Registro Quebracho',$mensaje);
        $this->response( $result, 200 );
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
public function ProductosCategorias_post() 
{      
    $posted = file_get_contents("php://input");
    $obj = json_decode($posted);
    
    // Obtener todos los idCategoria
    $categorias = $obj->busqueda;

    // Verificar que $categorias es un array de IDs
    if (!is_array($categorias) || empty($categorias)) {
        $this->response(['error' => 'Categorías no válidas'], 400);
        return;
    }

    // Llama al modelo con el array de IDs de categorías
    $consulta = $this->Productos_m->getProductosCategorias($categorias);
    $consulta_array = $consulta->result_array();  
    $cadena = implode(', ', $categorias);
    $cadena = json_encode($cadena);
    if ($consulta->num_rows() > 0) { 
        $this->response($consulta_array, 200);
    } else {
        $this->response(['error' => 'No se encontraron productos para las categorías proporcionadas'.$cadena], 404);
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
public function success_mp_get(){
    $where='idOrden';
    $id_compra=$this->input->get('external_reference');
    $data=array(        
        'procesaPago' => 'pagado'          
    );
    $base='ordenes';
    $this->Productos_m->updategenerico($where,$id_compra,$data,$base); 
    $this->mailCheckout("Mercadopago: ".$id_compra,$data['procesaPago']);   
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
    $para="marcoscolombo66@gmail.com"; //MAILS DE ADMINS
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
		  $para="marcoscolombo66@gmail.com"; //MAILS DE ADMINS
			 
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
public function test_get(){
    echo "HOLA";
}

}