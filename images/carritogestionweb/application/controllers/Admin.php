<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->database();
		$this->load->helper('url');
		
		$this->load->library('grocery_CRUD');
		$this->load->model('Productos_m');
		$this->load->model('Email_m');
		$this->load->library('session'); 
	}

	public function _example_output($output = null)
	{
		$this->load->view('admin.php',(array)$output);
	}
	public function _example_output2($output = null)
	{
		$this->load->view('admin2.php',(array)$output);
	}
	
	public function _example_output3($output = null)
	{
		$this->load->view('admin3.php',(array)$output);
	}

	public function index()
	{
		$this->_example_output((object)array('output' => '' , 'js_files' => array() , 'css_files' => array()));
	}

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
public function cronVerificaOrdenes(){
	
	$ordenes = $this->Productos_m->getOrdenesAll();
	$consulta_array = $ordenes->result_array();
    
    foreach ($consulta_array as $orden) {         
		$this->verificaOrdenTiempo($orden);
		 
    }
	
}
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
public function verificaOrdenTiempo($data){
// Decodificar el dataProductos JSON
$dataProductos = json_decode($data['dataProductos'], true);
 
$totalCompraSuma=0;
$totalCompraResta=0;
$totalCompra=$data['totalCompra'];
// Crear un array para almacenar los productos actualizados
$dataProductosActualizados = array();
// Recorrer los productos y verificar sus cantidades
// Recorrer los productos y verificar sus cantidades
foreach ($dataProductos as $producto) {
	
    if(isset($producto['id'])) {
	$idProducto = $producto['id'];
	 
	$resultado = $this->Productos_m->getProductoCantidad($idProducto);	
	
    if ($resultado->num_rows() > 0) {		
        $fila = $resultado->result_array();	
        $cantidadProducto = $fila[0]['cantidadProducto'];
		
        // Si la cantidad del producto es mayor a 0, añadirlo a los productos actualizados
        if ($cantidadProducto > 0 and ($cantidadProducto>= $producto['quantity'])) {
			$producto['unit_price'] = $fila[0]['precioProducto'];
            $dataProductosActualizados[]= $producto;           
            $totalCompraSuma= $totalCompraSuma+(intval($fila[0]['precioProducto'])*$producto['quantity']);				 
        }
		else{ 
		}
    }  
	 
}
}	

// Output the updated array for verification
$dataProductos = json_encode($dataProductosActualizados);
 
$arrayData = array(
	'totalCompra' => $totalCompraSuma,
	'dataProductos' => $dataProductos,
	'idOrden' => $data['idOrden'],
	'metodoPago' => 'transferencia'				
);
//var_export($arrayData); echo "<br>";	 
	var_export($arrayData); echo "<br>";

	if($totalCompraSuma===0){
		$this->enviaMailDelOrden($data['idUsuario']);
		$this->Productos_m->eliminaOrdenCron($data['idOrden']);
	}
	else{
		$this->Productos_m->updategenerico('idOrden',$data['idOrden'],$arrayData,'ordenes');
		$this->enviaMailModOrden($arrayData,$data['idUsuario']);
		 
}
} 
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
public function enviaMailModOrden($arrayData,$idUsuario){
	//$arrayData['dataProductos'];
	$datosUsuario=$this->Productos_m->getUsuarioId($idUsuario);

$dataArray = json_decode($arrayData['dataProductos'], true);
			
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
            $para=$datosUsuario[0]['usuario']; //MAILS DE ADMINS
                
            $asunto="[ORDEN DE COMPRA]";
            $mensaje="Hola ".$datosUsuario[0]['nombre']."! ¿Cómo estás?.<br/>
            Han pasado mas de 24 horas desde que hiciste el pedido y no hemos recibido el pago.<br/>
			La orden se ha actualizado, podrás verificarla en la app y realizar la compra mediante transferencia o efectivo.<br/>
            ".$stringJson."
            <br/>
            Muchas gracias<br/>
            <br/>

			<strong>Atte. Quebracho App</strong>
            ";
          
          $this->Email_m->enviaNotificacionEmail('info@gestionst.com.ar',$para,$asunto,$mensaje);
 
}
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
public function enviaMailDelOrden($idUsuario){
	//$arrayData['dataProductos'];
	$datosUsuario=$this->Productos_m->getUsuarioId($idUsuario);		
            //SE NOTIFICA A LOS ADMINS
            $para=$datosUsuario[0]['usuario']; //MAILS DE ADMINS
                
            $asunto="[ORDEN DE COMPRA]";
            $mensaje="Hola ".$datosUsuario[0]['nombre']."! ¿Cómo estás?.<br/>
            Han pasado mas de 24 horas desde que hiciste el pedido y no hemos recibido el pago.<br/>
			La orden se ha eliminado, podrás volver realizar un nuevo pedido desde la app.<br/>            
            <br/>
            Muchas gracias<br/>
            <br/>
			<strong>Atte. Quebracho App</strong>   ";          
          $this->Email_m->enviaNotificacionEmail('info@gestionst.com.ar',$para,$asunto,$mensaje); 
}
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
function importarTango(){	
	if($this->session->userdata('email')==='entregamercaderia@gmail.com'){die();}
	$output['MENSAJE']="	 
	<script type=\"text/javascript\">
	function callUrlArticulos(){
		// Obtener referencia al loader
		var loader = document.getElementById('loader');
		
		// Mostrar el loader cuando se inicia la solicitud
		loader.style.display = 'block';
		
		// Crear una instancia del objeto XMLHttpRequest
		var xhr = new XMLHttpRequest();
		
		// Configurar la solicitud AJAX
		xhr.open('GET', 'https://gestionst.com.ar/quebracho/Admin/productosTango', true);
		
		// Manejar la respuesta cuando se complete la solicitud
		xhr.onload = function() {
		  // Ocultar el loader cuando la solicitud se completa
		  loader.style.display = 'none';
		
		  if (xhr.status >= 200 && xhr.status < 400) {
			// La solicitud fue exitosa
			var mensaje = xhr.responseText;
			alert(mensaje);
		  } else {
			// Ocurrió un error al realizar la solicitud
			alert('Error al cargar la URL. Estado: ' + xhr.status);
		  }
		};
		
		// Manejar errores de red
		xhr.onerror = function() {
		  // Ocultar el loader en caso de error de red
		  loader.style.display = 'none';
		  alert('Error de red al cargar la URL.');
		};
		
		// Enviar la solicitud
		xhr.send();		
	}
	function callUrlPrecios(){
		// Obtener referencia al loader
		var loader = document.getElementById('loader');
		
		// Mostrar el loader cuando se inicia la solicitud
		loader.style.display = 'block';
		
		// Crear una instancia del objeto XMLHttpRequest
		var xhr = new XMLHttpRequest();
		
		// Configurar la solicitud AJAX
		xhr.open('GET', 'https://gestionst.com.ar/quebracho/Admin/productosPreciosTango', true);
		
		// Manejar la respuesta cuando se complete la solicitud
		xhr.onload = function() {
		  // Ocultar el loader cuando la solicitud se completa
		  loader.style.display = 'none';
		
		  if (xhr.status >= 200 && xhr.status < 400) {
			// La solicitud fue exitosa
			var mensaje = xhr.responseText;
			alert(mensaje);
		  } else {
			// Ocurrió un error al realizar la solicitud
			alert('Error al cargar la URL. Estado: ' + xhr.status);
		  }
		};
		
		// Manejar errores de red
		xhr.onerror = function() {
		  // Ocultar el loader en caso de error de red
		  loader.style.display = 'none';
		  alert('Error de red al cargar la URL.');
		};
		
		// Enviar la solicitud
		xhr.send();		
	}
	function callUrlStock(){
		// Obtener referencia al loader
		var loader = document.getElementById('loader');
		
		// Mostrar el loader cuando se inicia la solicitud
		loader.style.display = 'block';
		
		// Crear una instancia del objeto XMLHttpRequest
		var xhr = new XMLHttpRequest();
		
		// Configurar la solicitud AJAX
		xhr.open('GET', 'https://gestionst.com.ar/quebracho/Admin/productosStockTango', true);
		
		// Manejar la respuesta cuando se complete la solicitud
		xhr.onload = function() {
		  // Ocultar el loader cuando la solicitud se completa
		  loader.style.display = 'none';
		
		  if (xhr.status >= 200 && xhr.status < 400) {
			// La solicitud fue exitosa
			var mensaje = xhr.responseText;
			alert(mensaje);
		  } else {
			// Ocurrió un error al realizar la solicitud
			alert('Error al cargar la URL. Estado: ' + xhr.status);
		  }
		};
		
		// Manejar errores de red
		xhr.onerror = function() {
		  // Ocultar el loader en caso de error de red
		  loader.style.display = 'none';
		  alert('Error de red al cargar la URL.');
		};
		
		// Enviar la solicitud
		xhr.send();		
	}
	</script>	
	<div style='text-align:center;'>
		<button onClick=callUrlArticulos();>ARTICULOS</button>
		<button onClick=callUrlPrecios();>PRECIOS</button>
		<button onClick=callUrlStock();>STOCK</button>
			<div id=\"loader\" style=\"display: none;text-align:center;\">
				<img src='".base_url()."/assets/loader.gif' style='width:150px;height:150px;'>
			</div>
	</div>
	

	<script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
  	<script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js\"></script>
	";
	$this->load->view('otros.php',$output);	 
}
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
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
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
function getStockTango() {
    $pageNumber = 1;
    $productos = [];
	$this->setSession();
	do {
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://tiendas.axoft.com/api/Aperture/Stock?pageSize=5000&pageNumber=' . $pageNumber."",
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
    } while ($data['Paging']['MoreData']);
    return $productos;
}
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
function getProductosTango() {
    $pageNumber = 1;
    $productos = [];
	$this->setSession();	
    do {
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://tiendas.axoft.com/api/Aperture/Product?pageSize=5000&pageNumber=' . $pageNumber."&filter".$this->session->userdata('tangoLista'),
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
    } while ($data['Paging']['MoreData']);
    return $productos;
}
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
function getPreciosTango() {
    $pageNumber = 1;
    $productos = [];
	$this->setSession();
	do {
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://tiendas.axoft.com/api/Aperture/Price?pageSize=5000&pageNumber=' . $pageNumber.'&filter='.$this->session->userdata('tangoLista'),
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
    } while ($data['Paging']['MoreData']);
    return $productos;
}
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
public function productosTango(){
    $productos = $this->getProductosTango();
	$count=0;
    //$preciosArticulos= $this->getPreciosTango();
    //var_dump($productos);die();
    foreach ($productos as $producto) {
        // Buscar el precio correspondiente en $preciosArticulos utilizando SKUCode
        $precio = 0;        
        $data = array(
            'idTango' => $producto['Id'],
			'SKUCode' => $producto['SKUCode'],
            'precioProducto' => $precio,
            'nombreProducto' => $producto['Description'], 			
            'descripcionProducto' => $producto['AdditionalDescription'],
			'idCategoria' => 3			
        );		
		if($this->Productos_m->insert($data,'productos')===false){
			//echo "NO<br>";
		}
		else{
			$count++;
		}
    }
	echo "Fueron insertados ".$count." Articulos.";
} 
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
public function productosPreciosTango(){     
    $preciosArticulos= $this->getPreciosTango();    
	$count=0;
    foreach ($preciosArticulos as $producto) {         
        $data = array(
            //'SKUCode' => $producto['SKUCode'],
            'precioProducto' => $producto['Price']             			
        );					
		if($this->Productos_m->updategenerico('SKUCode',$producto['SKUCode'],$data,'productos')==='NO'){
			//echo "NO<br>";
		}
		else{
			$count++;
		}
    }
	echo "Fueron actualizados ".$count." precios.";
}
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
public function productosStockTango(){	
	$stockArticulos= $this->getStockTango();
	$count=0;    
    foreach ($stockArticulos as $producto) {         
        $data = array(
            //'SKUCode' => $producto['SKUCode'],
            'cantidadProducto' => $producto['Quantity']             			
        );		
		
		if($this->Productos_m->updategenerico('SKUCode',$producto['SKUCode'],$data,'productos')==='NO'){
			//echo "NO<br>";
		}
		else{
			$count++;
		}
    }
	echo "Fueron actualizadas las cantidades en ".$count." articulos.";
}
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
public function add_idProducto($post_array) {
    //$idProducto = $this->input->get('idProducto');
    //$post_array['idProducto'] = $idProducto;
    var_dump($post_array);die();
	return $post_array;
}
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
public function coloresProductos()
{
	if($this->session->userdata('email')==='entregamercaderia@gmail.com'){die();}
    if ($this->session->userdata('logged_in')) {
        // La sesión está creada, cargar la vista de productos
        try {
            $idProducto = $this->input->get('idProducto');
            
            $crud = new grocery_CRUD();    
            $crud->set_theme('bootstrap');
            $crud->set_table('productocolores');       
            $crud->set_subject('Colores');
            $crud->add_fields('idProducto','codigocolor');
            $crud->field_type('idProducto', 'hidden', $this->input->get('idProducto'));   
            $crud->required_fields('codigocolor');
            $crud->columns('idProducto', 'codigocolor');
            $crud->edit_fields('idProducto', 'codigocolor');
            $crud->unset_clone();
            $crud->unset_read();
            $crud->where('productocolores.idProducto', $idProducto);   
            $crud->unset_back_to_list();

            // Personalización del campo codigocolor para ser un campo de color
            $crud->callback_edit_field('codigocolor', function ($value, $primary_key) {
                return '<input type="color" name="codigocolor" value="' . $value . '" />';
            });

			$crud->callback_add_field('codigocolor', function () {
                return '<input type="color" name="codigocolor" />';
            });

			$crud->callback_column('codigocolor', function ($value, $row) {
				return '<div style="width: 30px; height: 30px; background-color: ' . $value . ';"></div>';
			});
			$crud->display_as('codigocolor','Color');
            $output = $crud->render();   
            $this->_example_output2($output);    
        } catch (Exception $e) {
            show_error($e->getMessage() . ' --- ' . $e->getTraceAsString());
        }
    } else {
        // La sesión no está creada, redireccionar a la página de inicio de sesión
        redirect('login');
    }
}

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
public function caracteristicasProductos()
	{
		if($this->session->userdata('email')==='entregamercaderia@gmail.com'){die();}
		if ($this->session->userdata('logged_in')) {
            // La sesión está creada, cargar la vista de productos
            try{
				
				$idProducto= $this->input->get('idProducto');
				
				$crud = new grocery_CRUD();	
				$crud->set_theme('bootstrap');
				$crud->set_table('productocaracteristicas');		
				$crud->set_subject('caracteristicas');
				$crud->add_fields('idProducto','titulo', 'descripcion');
				$crud->field_type('idProducto','hidden',$this->input->get('idProducto'));	
				$crud->required_fields('titulo','descripcion');
				$crud->columns('titulo','descripcion');
				$crud->edit_fields('titulo','descripcion');
				$crud->unset_clone();
				$crud->unset_read();
				$crud->where('productocaracteristicas.idProducto',$idProducto);
				
				
				 
				$crud->unset_back_to_list();				
				$output = $crud->render();	
				$this->_example_output($output);	
			}catch(Exception $e){
				show_error($e->getMessage().' --- '.$e->getTraceAsString());
			}
        } else {
            // La sesión no está creada, redireccionar a la página de inicio de sesión
            redirect('login');
        }
		
	}
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
public function fotoProductos()
	{
		if($this->session->userdata('email')==='entregamercaderia@gmail.com'){die();}
		if ($this->session->userdata('logged_in')) {
            // La sesión está creada, cargar la vista de productos
            try{
				$crud = new grocery_CRUD();	
				$crud->set_theme('bootstrap');
				$crud->set_table('productos');
				$crud->set_subject('productos');
				$crud->required_fields('fotoProducto');
				$crud->columns('fotoProducto','fotoProducto2','fotoProducto3','fotoProducto4','fotoProducto5');
				$crud->edit_fields('fotoProducto','fotoProducto2','fotoProducto3','fotoProducto4','fotoProducto5');
				$crud->unset_clone();
				$crud->unset_read();
				$crud->unset_delete();				
				$crud->unset_edit_fields('activo');
				$crud->unset_texteditor('descripcionProducto');				
				$crud->unset_back_to_list();	
				$crud->display_as('fotoProducto','Foto 1')
				->display_as('fotoProducto2','Foto 2')				
				->display_as('fotoProducto3','Foto 3')
				->display_as('fotoProducto4','Foto 4')
				->display_as('fotoProducto5','Foto 5');				
				$crud->set_field_upload('fotoProducto','images');
				$crud->set_field_upload('fotoProducto2','images');
				$crud->set_field_upload('fotoProducto3','images');
				$crud->set_field_upload('fotoProducto4','images');
				$crud->set_field_upload('fotoProducto5','images');
				$output = $crud->render();	
				$this->_example_output($output);
	
			}catch(Exception $e){
				show_error($e->getMessage().' --- '.$e->getTraceAsString());
			}
        } else {
            // La sesión no está creada, redireccionar a la página de inicio de sesión
            redirect('login');
        }
		
	}
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	public function productos()
	{


		if($this->session->userdata('email')==='entregamercaderia@gmail.com'){die();}
		if ($this->session->userdata('logged_in')) {
            // La sesión está creada, cargar la vista de productos
            try{
				$crud = new grocery_CRUD();
	
				$crud->set_theme('bootstrap');
				$crud->set_table('productos');
				$crud->set_subject('productos');
				$crud->required_fields('nombreProducto','idCategoria','precioProducto');
				$crud->columns('idProducto','nombreProducto','descripcionProducto','cantidadProducto','precioProducto');
				//$crud->columns('cantidad_y_precio','nombreProducto');


				$crud->unset_edit_fields('activo','fotoProducto','fotoProducto2','fotoProducto3','fotoProducto4','fotoProducto5');
				$crud->unset_add_fields('fotoProducto','fotoProducto2','fotoProducto3','fotoProducto4','fotoProducto5');

				$crud->set_relation('idRentabilidad','rentabilidad','{porcentaje}% {descripcion}');

				$crud->where('productos.activo',1);
				$crud->unset_clone();
				$crud->unset_read();
				$crud->unset_delete();
				
			 
				$crud->unset_texteditor('descripcionProducto');
				
				$crud->add_action('Fotos', '', '','fa fa-photo',array($this,'redirectFotosproductos'));
				$crud->add_action('Caracteristicas', '', '','fa fa-list',array($this,'redirectCaracteristicasproductos'));
				$crud->add_action('Colores', '', '','fa fa-paint-brush',array($this,'redirectColoresproductos'));
				$crud->add_action('Borrar', '', '','fa fa-trash',array($this,'eliminar_producto'));
				
				/*$crud->callback_column('cantidad_y_precio', function($value, $row) {
					// Concatenamos la cantidad y el precio del producto
					return $row->cantidadProducto . ' - $' . $row->precioProducto;
				});*/

				$crud->display_as('nombreProducto','Producto')
				->display_as('idRentabilidad','Rentabilidad')				
				->display_as('descripcionProducto','Descripcion')				
				->display_as('cantidadProducto','Cantidad')
				->display_as('idCategoria','Categoría')
				->display_as('precioProducto','Precio');
				$crud->set_relation('idCategoria','categorias','nombreCategoria');
				
				$output = $crud->render();
	
				$this->_example_output($output);
	
			}catch(Exception $e){
				show_error($e->getMessage().' --- '.$e->getTraceAsString());
			}
        } else {
            // La sesión no está creada, redireccionar a la página de inicio de sesión
            redirect('login');
        }
		
	}
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////	
public function redirectColoresproductos($primary_key,$row) 
	{
		
		 
		return site_url("Admin/coloresProductos/?idProducto=".$primary_key);
		
	}
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////	
public function redirectCaracteristicasproductos($primary_key,$row) 
	{
		
		 
		return site_url("Admin/caracteristicasProductos/?idProducto=".$primary_key);
		
	}
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////	
public function redirectFotosproductos($primary_key,$row)
	{
		return site_url("Admin/fotoProductos/edit/".$primary_key);
		
	}
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////	
	public function eliminar_producto($primary_key,$row)
	{
		return site_url("Admin/productoEliminado/?id=".$primary_key);
		
	}
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	public function productoEliminado()
	{
		if($this->session->userdata('email')==='entregamercaderia@gmail.com'){die();}
		$id=$this->input->get('id');
		$output = "<script>
		if (confirm('¿Estás seguro de que quieres borrar este producto?')===true){
			window.location.href = '".base_url()."Admin/borrarAhoraProd/?id=".$id."';
		}
		else
		{
			window.location.href = '".base_url()."Admin/productos';	
		}
		</script>";

    echo $output;		
			 
	}
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
public function borrarAhoraProd(){
		$where='idProducto';
		$id=$this->input->get('id');
		$data=array(        
			'activo' => 0          
		);
		$base='productos';
		$this->Productos_m->updategenerico($where,$id,$data,$base);		
		redirect("Admin/productos",'refresh');
}
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
public function categorias()
	{
		if($this->session->userdata('email')==='entregamercaderia@gmail.com'){die();}
		if ($this->session->userdata('logged_in')) {
		try{
			$crud = new grocery_CRUD();

			$crud->set_theme('bootstrap');
			$crud->set_table('categorias');
			$crud->set_subject('categorias');
			$crud->required_fields('nombreCategoria');
			$crud->columns('nombreCategoria');
			$crud->where('activo',1);
			$crud->unset_clone();
			$crud->unset_read();
			$crud->unset_delete();

			$crud->unset_edit_fields('activo');

			$crud->add_action('Borrar', '', '','fa fa-trash',array($this,'eliminar_categoria'));
			$crud->display_as('nombreCategoria','Categoría');
			$output = $crud->render();

			$this->_example_output($output);

		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
	}else {
		// La sesión no está creada, redireccionar a la página de inicio de sesión
		redirect('login');
	}

	}
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////	
	public function eliminar_categoria($primary_key,$row)
	{
		return site_url("Admin/categoriaEliminada/?id=".$primary_key);
		
	}
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	public function categoriaEliminada()
	{
		$id=$this->input->get('id');
		$output = "<script>
		if (confirm('¿Estás seguro de que quieres borrar esta categoria?')===true){
			window.location.href = '".base_url()."Admin/borrarAhoraCat/?id=".$id."';
		}
		else
		{
			window.location.href = '".base_url()."Admin/categorias';	
		}
		</script>";

    echo $output;		
			 
	}
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
public function borrarAhoraCat(){
		$where='idCategoria';
		$id=$this->input->get('id');
		$data=array(        
			'activo' => 0          
		);
		$base='categorias';
		$this->Productos_m->updategenerico($where,$id,$data,$base);		
		redirect("Admin/categorias",'refresh');
}
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
public function terminos()
	{
		if($this->session->userdata('email')==='entregamercaderia@gmail.com'){die();}
		if ($this->session->userdata('logged_in')) {
		try{
			$crud = new grocery_CRUD();

			$crud->set_theme('bootstrap');
			$crud->set_table('plataformaspago');
			$crud->set_subject('plataformaspago');			
			$crud->columns('url_proyecto');
			$crud->unset_clone();
			$crud->unset_read();
			$crud->unset_delete();
			$crud->unset_add();
			$crud->unset_back_to_list();
			$crud->unset_edit_fields('id');
			$crud->edit_fields('terminosycondiciones');
			$output = $crud->render();

			$this->_example_output($output);

		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
	}else {
		// La sesión no está creada, redireccionar a la página de inicio de sesión
		redirect('login');
	}
	}
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
public function plataformaspago()
	{
		if($this->session->userdata('email')==='entregamercaderia@gmail.com'){die();}
		if ($this->session->userdata('logged_in')) {
		try{
			$crud = new grocery_CRUD();

			$crud->set_theme('bootstrap');
			$crud->set_table('plataformaspago');
			$crud->set_subject('plataformaspago');			
			$crud->columns('url_proyecto');
			$crud->unset_clone();
			$crud->unset_read();
			$crud->unset_delete();
			$crud->unset_add();
			$crud->unset_back_to_list();
			$crud->unset_edit_fields('id');
			
			$crud->unset_fields('terminosycondiciones');
			$output = $crud->render();
			$this->_example_output($output);

		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
	}else {
		// La sesión no está creada, redireccionar a la página de inicio de sesión
		redirect('login');
	}
	}
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

public function _callback_metodopago($value, $row)
{
  if($row->metodoPago==="mercadopago"){
	return "<span>".$row->idOrden."</span>";
  }
  else
  {
	return "<span>".$row->uuid."</span>";
  }
	
}
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
public function verFactura(){

$stringJson='';
$total=0;
//////////////////////////////////////////////////////////////////////////////////////
// A partir de la idOrden obtener datos de los productos, ordenes,
        //clientes, etc...
        $id=base64_decode($this->input->get('id'));
        $datos=$this->Productos_m->getOrdenFactura($id);        
        $dataAFIP=$this->Productos_m->getCompAfip();
        $cuitAFIP= $dataAFIP['cuitAfip'];
        $compAFIP= $dataAFIP['numCompAfip'];
		$dataArray = json_decode($datos[0]['DataProductos'], true);
//////////////////////////////////////////////////////////////////////////////////////
foreach ($dataArray as $item) {
    $stringJson.= '<tr>';
    $stringJson.= '<td>' . htmlspecialchars($item['title']) . '</td>';
    $stringJson.= '<td align="center">' . $item['quantity'] . '</td>';				
    $stringJson.= '<td align="right"> $ ' . $item['unit_price'] . '</td>';
    $stringJson.= '<td align="right"> $ ' . $item['quantity']*$item['unit_price'] . '</td>';
    $stringJson.= '</tr>';
    $total+=$item['quantity']*$item['unit_price'];
}

$razon_social='Quebracho SRL';
 
$cuitAFIP= $dataAFIP['cuitAfip'];
$compAFIP= $dataAFIP['numCompAfip'];
$PtoVta=$dataAFIP['PtoVta'];
if($datos[0]['CbteTipo']===1){
	$tipo_factura="A";
}
else {
	$tipo_factura="B";
}
if($datos[0]['CbteTipo']===11){
	$tipo_factura="C";
}
/*
$facturaGenerada = array(
    'ver' => 1,
    'cuit' => 20307009715,
    'codAut' => 74165185186262,
    'tipoCodAut' => "E",
    'fecha' => "2024-04-17",
    'tipoCmp' => 11,
    'ptoVta' => 3,    
    'nroCmp' => 3,
    'importe' => 125,
    'tipoDocRec' => 96, //DNI 96  CUIT 80 
    'nroDocRec' => 26467801,
    'moneda' =>   "PES",
    'ctz' => 65    
);

*/
$facturaGenerada = array(
    'ver' => 1,
    'cuit' => (int)($cuitAFIP),
    'codAut' => (int)($datos[0]['CAE']),
    'tipoCodAut' => "E",
    'fecha' => $datos[0]['fechaFactura'],
    'tipoCmp' => (int)($datos[0]['CbteTipo']),
    'ptoVta' => (int)($PtoVta),    
    'nroCmp' => (int)($datos[0]['NroComprobante']),
    'importe' => 10,
    'tipoDocRec' => (int)($datos[0]['DocTipo']), //DNI 96  CUIT 80 
    'nroDocRec' => (int)($datos[0]['DocNro']),
    'moneda' =>   "PES",
    'ctz' => 65    
);

//var_dump($facturaGenerada);die();

// Convertir el array a JSON
$json = json_encode($facturaGenerada);
// Codificar el JSON en Base64
$base64_encoded = base64_encode($json);
// Construir la URL con el parámetro p= seguido del JSON codificado en Base64
$url = 'https://www.afip.gob.ar/fe/qr/?p='.urlencode($base64_encoded);
 
// Imprimir la URL para verificar
//echo $url;
// Convertir el array a JSON
$json = json_encode($facturaGenerada);
// Codificar el JSON en Base64
$base64_encoded = base64_encode($json);
function zero_fill ($valor, $long = 0)
{
    return str_pad($valor, $long, '0', STR_PAD_LEFT);
}
$mostrar['MENSAJE']= '
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Factura AFIP</title>
    <script type="text/javascript" src="'.base_url().'js/jquery.min.js"></script>
    <script type="text/javascript" src="'.base_url().'js/qrcode.js"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 800px;
            margin: 20px auto;
            border: 1px solid #ccc;
            padding: 20px;
        }
        .header {
            text-align: center;
            margin-bottom: 20px;
        }
        .details {
            margin-bottom: 20px;
        }
        .details table {
            width: 100%;
            border-collapse: collapse;
        }
        .details th, .details td {
            border: 1px solid #ccc;
            padding: 8px;
        }
        .footer {
            text-align: center;
            margin-top: 50px; /* Espacio adicional para el QR */
        }
        
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Factura Electrónica AFIP</h1>
            <p>Razón Social: '.$razon_social.'</p>
            <p>CUIT: '.$facturaGenerada['cuit'].'</p>
            <p>COMPROBANTE N&deg;: '.$tipo_factura.'-'.zero_fill($facturaGenerada['ptoVta'], 5).'-'.zero_fill($facturaGenerada['nroCmp'], 5).'</p>
        </div>
        <div class="details">
        <table>
        <thead>
            <tr>
                <th align="left">Descripción</th>
                <th>Cantidad</th>
                <th align="right">Precio Unitario</th>
                <th align="right">Subtotal</th>
            </tr>
        </thead>
        <tbody>
            '.$stringJson.'
            <!-- Más filas para otros productos -->
        </tbody>
        <tfoot>
            <tr>
                <td colspan="3">Total:</td>
                <td align="right">$ '.$total.'</td>
            </tr>
        </tfoot>
    </table>
        </div>
        <div class="footer">
             
                <input id="text" type="text" value="'.$url.'" style="display:none;width:1%" /><br />
                <span id="qrcode" 
                style="width:200px; height:200px; margin-top:5px;text-align:center;"></span><br /><br />
                    <p>Fecha de emisión: '.$facturaGenerada['fecha'].'</p>
                    <p>CAE: '.$facturaGenerada['codAut'].'</p>
                    <p>Comprobante autorizado por AFIP</p>
             
                </div>
    </div>
    <script type="text/javascript">
var qrcode = new QRCode(document.getElementById("qrcode"), {
	width : 200,
	height : 200
});

function makeCode () {		
	var elText = document.getElementById("text");
	
	if (!elText.value) {
		alert("Input a text");
		elText.focus();
		return;
	}
	
	qrcode.makeCode(elText.value);
}

makeCode();

$("#text").
	on("blur", function () {
		makeCode();
	}).
	on("keydown", function (e) {
		if (e.keyCode == 13) {
			makeCode();
		}
	});
</script>
</body>
</html>
';
$this->load->view('otros.php',$mostrar);
}
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
public function _callback_facturado($value, $row)
{
	 
	if($value==0){
		return "<a href='".site_url('facturar/?id='.base64_encode($row->idOrden))."'>Facturar</a>";
	}
	else{
		return "<a href='".site_url('admin/verFactura/?id='.base64_encode($row->idOrden))."'>Ver factura</a>";
	}   
}
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
public function ordenes()
	{
		if($this->session->userdata('email')==='entregamercaderia@gmail.com'){die();}
		if ($this->session->userdata('logged_in')) {
		try{
			$crud = new grocery_CRUD();

			$crud->set_theme('bootstrap');
			$crud->set_table('ordenes');
			$crud->set_subject('ordenes');			
			$crud->columns('idOrden','uuid','fecha','totalCompra','procesaPago','facturado');
			$crud->unset_clone();
			$crud->unset_read();
			$crud->unset_delete();
			$crud->unset_add();				
			$crud->fields('idOrden','uuid','idUsuario','fecha','dataProductos','totalCompra','metodoPago','procesaPago');
			$crud->field_type('idUsuario', 'readonly');
			$crud->field_type('fecha', 'readonly');
			$crud->field_type('totalCompra', 'readonly');
			$crud->field_type('metodoPago', 'readonly'); 
			$crud->field_type('idOrden', 'readonly'); 
			$crud->field_type('uuid', 'readonly'); 
			$crud->set_relation('idUsuario','usuarios','{usuario} ( {nombre} {apellido}');

			$crud->callback_column('uuid',array($this,'_callback_metodopago'));

			$arrayProcesaPago["pendiente"] = "pendiente";
			$arrayProcesaPago["pagado"] = "pagado";
			$arrayProcesaPago["fallo"] = "fallo";
			$crud->field_type('procesaPago','dropdown',$arrayProcesaPago);
			
			$crud->display_as('idUsuario','Usuario')
			->display_as('dataProductos','Productos')
			->display_as('idOrden','Orden N°')
			->display_as('uuid','N° UALA')
			->display_as('totalCompra','Total ($)')
			->display_as('metodoPago','Plataforma de Pago')
			->display_as('procesaPago','Estado de Orden')
			->display_as('facturado','Factura')
			;
			$crud->callback_column('facturado',array($this,'_callback_facturado'));
			$crud->callback_edit_field('dataProductos', function ($value, $primary_key) {
							// Decodificar el JSON a un array de PHP
			$dataArray = json_decode($value, true);

			// Codificar el array de nuevo a formato JSON pero con la opción JSON_PRETTY_PRINT
			$prettyJson = json_encode($dataArray, JSON_PRETTY_PRINT);
				$stringJson='';
			// Mostrar el JSON en un área de texto preformateada en HTML
			foreach ($dataArray as $item) {
				$stringJson.= '<div style="border: 1px solid #cbc9c9; padding: 10px; margin: 10px;">';
				$stringJson.= '<label>' . htmlspecialchars($item['title']) . '</label><br>';
				$stringJson.= '<label>Cantidad: ' . $item['quantity'] . '</label><br>';				
				$stringJson.= '<label>Precio: $' . $item['unit_price'] . '</label><br>';
				$stringJson.= '<img style="width:75px;height:75px;" src="' . htmlspecialchars($item['picture_url']) . '" alt="Producto"><br>';
				$stringJson.= '</div>';
			}
			return $stringJson;				
			}); 

			$output = $crud->render();

			$this->_example_output($output);

		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
	}else {
		// La sesión no está creada, redireccionar a la página de inicio de sesión
		redirect('login');
	}
	}
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
public function ordenesEntrega()
	{
		if ($this->session->userdata('logged_in')) {
		try{
			$crud = new grocery_CRUD();

			$crud->where('procesaPago','pendiente');

			$crud->set_theme('bootstrap');
			$crud->set_table('ordenes');
			$crud->set_subject('ordenes');			
			$crud->columns('idOrden','uuid','fecha','totalCompra','procesaPago');
			$crud->unset_clone();
			$crud->unset_read();
			$crud->unset_delete();
			
			//$crud->unset_edit();
			 
			$crud->unset_add();				
			$crud->fields('idOrden','uuid','idUsuario','fecha','dataProductos','totalCompra','metodoPago','procesaPago');
			$crud->field_type('idUsuario', 'readonly');
			$crud->field_type('fecha', 'readonly');
			$crud->field_type('totalCompra', 'readonly');
			$crud->field_type('metodoPago', 'readonly'); 
			$crud->field_type('idOrden', 'readonly'); 
			$crud->field_type('uuid', 'readonly'); 
			$crud->set_relation('idUsuario','usuarios','{usuario} ( {nombre} {apellido}');

			$crud->callback_column('uuid',array($this,'_callback_metodopago'));

			$arrayProcesaPago["pendiente"] = "pendiente";
			$arrayProcesaPago["entregado"] = "entregado";
			$arrayProcesaPago["fallo"] = "fallo";
			$crud->field_type('procesaPago','dropdown',$arrayProcesaPago);
			
			$crud->display_as('idUsuario','Usuario')
			->display_as('dataProductos','Productos')
			->display_as('idOrden','Orden N°')
			->display_as('uuid','N° UALA')
			->display_as('totalCompra','Total ($)')
			->display_as('metodoPago','Plataforma de Pago')
			->display_as('procesaPago','Estado de Orden')
			//->display_as('facturado','Factura')
			;
			$crud->callback_column('facturado',array($this,'_callback_facturado'));
			$crud->callback_edit_field('dataProductos', function ($value, $primary_key) {
							// Decodificar el JSON a un array de PHP
			$dataArray = json_decode($value, true);

			// Codificar el array de nuevo a formato JSON pero con la opción JSON_PRETTY_PRINT
			$prettyJson = json_encode($dataArray, JSON_PRETTY_PRINT);
				$stringJson='';
			// Mostrar el JSON en un área de texto preformateada en HTML
			foreach ($dataArray as $item) {
				$stringJson.= '<div style="border: 1px solid #cbc9c9; padding: 10px; margin: 10px;">';
				$stringJson.= '<label>' . htmlspecialchars($item['title']) . '</label><br>';
				$stringJson.= '<label>Cantidad: ' . $item['quantity'] . '</label><br>';				
				$stringJson.= '<label>Precio: $' . $item['unit_price'] . '</label><br>';
				$stringJson.= '<img style="width:75px;height:75px;" src="' . htmlspecialchars($item['picture_url']) . '" alt="Producto"><br>';
				$stringJson.= '</div>';
			}
			return $stringJson;				
			}); 

			$output = $crud->render();

			$this->_example_output3($output);

		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
	}else {
		// La sesión no está creada, redireccionar a la página de inicio de sesión
		redirect('login');
	}
	}

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

}
