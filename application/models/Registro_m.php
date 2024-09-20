<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Registro_m extends CI_Model {
public function __construct(){parent::__construct();}
    
 	
	
	function insert($data) {
        $this->db->insert('usuarios', $data);
		return $this->db->insert_id();
    }	
	
  function existe_usuario($usuario){
    $query = $this->db->query('SELECT
    usuario FROM usuarios    
    WHERE usuario="'.$usuario.'"');
    $row = $query->row();
    if($query->num_rows() > 0 )
    {
    //veamos que sólo retornamos una fila con row(), no result()
    return true;
    }else return false;
    }


}
?>