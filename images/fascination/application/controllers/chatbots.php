<?php

class chatbots extends CI_Controller {
	
	function __construct() {
        parent::__construct();
        //$this->load->model('chatbots_m');
		$this->load->helper('url');
        $this->load->database();
		//$this->load->model('chat_m');
    }
	public function index(){		
	 $data="";
				$this->load->view('chatbots',$data);
		
	}
	
public function GetDesde(){
       
		$data=$this->chatbots_m->GetRowDesde();  
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
       $data=$this->chatbots_m->GetRowHasta();  
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