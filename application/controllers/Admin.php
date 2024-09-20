<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {

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
		$this->_example_output((object)array('output' => '' , 'js_files' => array() , 'css_files' => array()));
	}
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	public function productos()
	{
		if ($this->session->userdata('logged_in')) {
            // La sesión está creada, cargar la vista de productos
            try{
				$crud = new grocery_CRUD();
	
				$crud->set_theme('bootstrap');
				$crud->set_table('productos');
				$crud->set_subject('productos');
				$crud->required_fields('nombreProducto','idCategoria','precioProducto','fotoProducto');
				$crud->columns('nombreProducto','descripcionProducto','fotoProducto','cantidadProducto','precioProducto');
				$crud->where('productos.activo',1);
				$crud->unset_clone();
				$crud->unset_read();
				$crud->unset_delete();
				
				$crud->unset_edit_fields('activo');
				$crud->unset_texteditor('descripcionProducto');
				
				$crud->add_action('Borrar', '', '','fa fa-trash',array($this,'eliminar_producto'));
	
				$crud->display_as('nombreProducto','Producto')
				->display_as('descripcionProducto','Descripcion')
				->display_as('fotoProducto','Imágen')
				->display_as('cantidadProducto','Cantidad')
				->display_as('idCategoria','Categoría')
				->display_as('precioProducto','Precio');
				$crud->set_relation('idCategoria','categorias','nombreCategoria');
				$crud->set_field_upload('fotoProducto','images');
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
	public function eliminar_producto($primary_key,$row)
	{
		return site_url("Admin/productoEliminado/?id=".$primary_key);
		
	}
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	public function productoEliminado()
	{
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
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
public function plataformaspago()
	{
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
public function ordenes()
	{
		if ($this->session->userdata('logged_in')) {
		try{
			$crud = new grocery_CRUD();

			$crud->set_theme('bootstrap');
			$crud->set_table('ordenes');
			$crud->set_subject('ordenes');			
			$crud->columns('idOrden','uuid','fecha','totalCompra','procesaPago');
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
			;

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

}
