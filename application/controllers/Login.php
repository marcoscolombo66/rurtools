<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		//$this->load->database();
		$this->load->helper('url');
		$this->load->library('session'); 
		
		//$this->load->model('Productos_m');
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

        // Verificar las credenciales (en este caso, se comparan directamente)
        if ($email === 'rurtools@rurtools.com.ar' && $password === 'marcos01') {
        //if ($email === 'lascolonias152@gmail.com' && $password === 'braian010302') {
            // Credenciales válidas, redireccionar a la vista de productos
            $data = array(
                'email' => $email,
                'logged_in' => TRUE
            );
            $this->session->set_userdata($data);
            redirect('admin/productos');
        } else {
            // Credenciales incorrectas, redireccionar a la página de inicio de sesión
            $data['MENSAJE']='* Error, contraseña y / o  usuario son incorrectas';
            $this->load->view('login',$data);
        }
    }

}

