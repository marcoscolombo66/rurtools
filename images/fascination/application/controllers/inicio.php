<?php

class inicio extends CI_Controller {
	
	function __construct() {
        parent::__construct();
        //$this->load->model('inicio_m');
		$this->load->helper('url');
        $this->load->database();
		//$this->load->model('chat_m');
    }
	public function index(){		
	 $data="";
				$this->load->view('inicio',$data);
		
	}
	
public function GetDesde(){
       
		$data=$this->inicio_m->GetRowDesde();  
//echo json_encode($data);		
        $ciudad='';
		foreach ($data as $sugerencias){
//$ciudad=str_replace('|',',',$sugerencias['DESDE']);

//$ciudad = strstr($sugerencias['DESDE'], ',', true); 

$ciudad=$ciudad."'".$sugerencias['DESDE']."',";
		 
}
$ciudad=$ciudad."''";
		
		//echo ($llena.'</ul>');
		
		return ($ciudad);
    }
	
	public function GetHasta(){
       $data=$this->inicio_m->GetRowHasta();  
//echo json_encode($data);		
        $ciudad='';
		foreach ($data as $sugerencias){
//$ciudad=str_replace('|',',',$sugerencias['DESDE']);

//$ciudad = strstr($sugerencias['DESDE'], ',', true); 

$ciudad=$ciudad."'".$sugerencias['HASTA']."',";
		 
}
$ciudad=$ciudad."''";
		
		//echo ($llena.'</ul>');
		
		return ($ciudad);
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */