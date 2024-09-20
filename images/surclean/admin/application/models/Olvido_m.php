<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Olvido_m extends CI_Model {
public function __construct(){parent::__construct();}
    
 	
	
	function insert_olvido($data) {
        $this->db->insert('pilotos', $data);
		//return $this->db->insert_id();
    }
	
function existe_usuario($usuario){
$query = $this->db->query('SELECT
*
FROM
pilotos
WHERE EMAIL="'.$usuario.'"');
$row = $query->row();
if($query->num_rows() > 0 )
{
//veamos que sólo retornamos una fila con row(), no result()
return $row;
}else return false;
}


}
?>