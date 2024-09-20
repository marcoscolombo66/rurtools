<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login_m extends CI_Model {
  public function __construct(){parent::__construct();}
    
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
public function getUserById($idusuario)
  {
    
    
    $query="SELECT * FROM usuarios  WHERE idUsuario=".$idusuario; 
    $consulta = $this->db->query($query); 
  return $consulta;
  }	
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
public function validarPasswordRegistro($idusuario)
{    
  $query="SELECT * FROM usuarios, plataformaspago  WHERE idUsuario=".$idusuario." AND activa=1"; 
  $consulta = $this->db->query($query); 
return $consulta;
}	
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
  public function validarPassword($usuario = null,$password = null)
  {
    
    if ($usuario !== null && $password !== null) {
      $query="SELECT * FROM usuarios, plataformaspago  
      WHERE usuario='".$usuario."' AND password='".$password."'"." AND activa=1";  
    }
    else {
      die();
    }
    $query="SELECT * FROM usuarios, plataformaspago    
    WHERE usuario='".$usuario."' AND password='".$password."'"." AND activa=1"; 
    $consulta = $this->db->query($query); 
  return $consulta;
  }	
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
public function update($id,$data,$base,$whereCampo)
    {
		$this->db->where($whereCampo, $id);
                $this->db->update($base, $data);
		 if ($this->db->affected_rows()>=1){
   return "SI"; 
}else {
   return "NO"; 
}
   
}
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
public function recordarPass($usuario)
{
$query="
SELECT * FROM usuarios WHERE usuario='".$usuario."'"; 
$consulta = $this->db->query($query); 
return $consulta;
}
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
}
?>