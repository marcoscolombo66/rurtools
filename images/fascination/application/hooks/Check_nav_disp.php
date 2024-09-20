<?php if (!defined( 'BASEPATH')) exit('No direct script access allowed');

class Check_nav_disp
{
	
    private $ci;
	
    public function __construct()
    {
        $this->ci =& get_instance();
		
        !$this->ci->load->helper('url') ? $this->ci->load->helper('url') : false;
		
		!$this->ci->load->library('user_agent') ? $this->ci->load->library('user_agent') : false;

	}
	
	//controlamos desde el navegador que llegan nuestros usuarios
    public function navegadores()
    {
        
		if ($this->ci->agent->is_browser('Chrome'))
		{
			
			echo 'Está usándose Chrome.';
		
		}else if ($this->ci->agent->is_browser()){
			
			echo 'Está usando un navegador.';
		
		}
		
    }
	
	//podemos detectar si es un dispositivo móvil
	public function dispositivos()
	{
		
		if ($this->ci->agent->is_mobile('iphone'))
		{
			
			//mostramos el nombre del dispositivo que nos visita
			//y cargamos la vista correspondiente
			echo $this->ci->agent->mobile();
			$this->ci->load->view('iphone');
		
		}else if ($this->ci->agent->is_mobile()){
			
			//mostramos el nombre del dispositivo que nos visita
			//y cargamos la vista correspondiente
			echo $this->ci->agent->mobile();
			$this->ci->load->view('mobile');
			
		}else{
			
			//cargamos la vista home
			echo 'el dispositivo es de otro tipo';
			$this->ci->load->view('home');
			
		}
		
	}
	
	//el nombre de los robots que nos visitan
	public function robot()
	{
		
		if($this->ci->agent->is_robot())
		{
			
			//podemos guardar el nombre del robot
			echo $this->ci->agent->robot();
			
		}
		
	}
	
	//la plataforma/sistema operativo desde que nos visita el usuario
	public function plataforma()
	{
		
		//obtenemos el nombre del sistema operativo (Linux, Windows, OS X, etc.).
		echo $this->ci->agent->platform();
		
	}
}
/*
/end hooks/Check_nav_disp.php
*/