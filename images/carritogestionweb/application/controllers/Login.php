<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		//$this->load->database();
		$this->load->helper('url');
		$this->load->library('session'); 
		$this->load->database();
		 
		$this->load->model('Productos_m');
	}

    public function index()
	{
        $data['MENSAJE']='';
		$this->load->view('login',$data);
	}

    public function verificar_login() {
        // Recuperar los datos del formulario
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $consulta=$this->Productos_m->getDatosAdmin();
        $consulta_array = $consulta->result_array();  
        // Verificar las credenciales (en este caso, se comparan directamente)
        //if ($email === 'lascolonias152@gmail.com' && $password === 'marcos01') {
        if ($email === 'lascolonias152@gmail.com' && $password === 'braian010302') {
            // Credenciales válidas, redireccionar a la vista de productos
            $data = array(
                'email' => $email,
                'logged_in' => TRUE,
                'tangoToken'=> $consulta_array[0]["tangoToken"],
                'tangoLista' => $consulta_array[0]["tangoLista"]
            );
            $this->session->set_userdata($data);
            $bandera="admin";
        } else {
            // Credenciales incorrectas, redireccionar a la página de inicio de sesión
            $data['MENSAJE']='* Error, contraseña y / o  usuario son incorrectas';
            $this->load->view('login',$data);
        }

        if ($email === 'entregamercaderia@gmail.com' && $password === 'braian010302') {
            // Credenciales válidas, redireccionar a la vista de productos
            $data = array(
                'email' => $email,
                'logged_in' => TRUE,
                'tangoToken'=> $consulta_array[0]["tangoToken"],
                'tangoLista' => $consulta_array[0]["tangoLista"]
            );
            $this->session->set_userdata($data);
            $bandera="entrega";
        } else {
            // Credenciales incorrectas, redireccionar a la página de inicio de sesión
            $data['MENSAJE']='* Error, contraseña y / o  usuario son incorrectas';
            $this->load->view('login',$data);
        }


        if($bandera==="admin"){
            redirect('admin/productos');
        }
        if($bandera==="entrega"){
            redirect('admin/ordenesEntrega');
        }
    }

}

