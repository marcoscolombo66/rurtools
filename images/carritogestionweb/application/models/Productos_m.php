<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//QUEBRACHO
class Productos_m extends CI_Model {
  public function __construct(){parent::__construct();   
   }    
 
	

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
public function getEstadisticasVendidos($id)
{
   $sql = "SELECT * FROM `estadisticas`   
   where idProducto=?";
   $consulta = $this->db->query($sql, array($id));

   if ($consulta) {
      if ($consulta->num_rows() > 0) {
         return $consulta->result_array();
      } else {
         return false;
      }
   } else {
      // Manejar el caso de error en la consulta
      return false;
   }
}
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
public function getCompAfip()
{
   $sql = "SELECT numCompAfip, PtoVta, cuitAfip FROM `plataformaspago`   
   where id=0";
   $consulta = $this->db->query($sql);

   if ($consulta) {
      if ($consulta->num_rows() > 0) {
         $numCompAfip=$consulta->result_array();
         return $numCompAfip[0];
      } else {
         return false;
      }
   } else {
      // Manejar el caso de error en la consulta
      return false;
   }
}
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
public function getOrdenFactura($id)
{
   $sql = "SELECT * FROM `facturas`     
   where idOrden=?";
   $consulta = $this->db->query($sql, array($id));

   if ($consulta) {
      if ($consulta->num_rows() > 0) {
         return $consulta->result_array();
      } else {
         return false;
      }
   } else {
      // Manejar el caso de error en la consulta
      return false;
   }
}
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
public function getOrdenUsuario($id)
{
   $sql = "SELECT * FROM `ordenes` 
   INNER JOIN usuarios on ordenes.idUsuario=usuarios.idUsuario 
   where idOrden=?";
   $consulta = $this->db->query($sql, array($id));

   if ($consulta) {
      if ($consulta->num_rows() > 0) {
         return $consulta->result_array();
      } else {
         return false;
      }
   } else {
      // Manejar el caso de error en la consulta
      return false;
   }
}
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
public function getUsuarioId($id)
{
   $sql = "SELECT * FROM usuarios WHERE idUsuario = ?";
   $consulta = $this->db->query($sql, array($id));

   if ($consulta) {
      if ($consulta->num_rows() > 0) {
         return $consulta->result_array();
      } else {
         return false;
      }
   } else {
      // Manejar el caso de error en la consulta
      return false;
   }
}
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
public function getOrdenId($id)
{
   $sql = "SELECT * FROM ordenes WHERE idOrden = ?";
   $consulta = $this->db->query($sql, array($id));

   if ($consulta) {
      if ($consulta->num_rows() > 0) {
         return $consulta->result_array();
      } else {
         return false;
      }
   } else {
      // Manejar el caso de error en la consulta
      return false;
   }
}
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
public function getOrdenIdUala($id)
{
   $sql = "SELECT * FROM ordenes WHERE uuid = ?";
   $consulta = $this->db->query($sql, array($id));

   if ($consulta) {
      if ($consulta->num_rows() > 0) {
         return $consulta->result_array();
      } else {
         return false;
      }
   } else {
      // Manejar el caso de error en la consulta
      return false;
   }
}
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
public function getProductoIdTango($id)
{
   $sql = "SELECT * FROM productos WHERE idTango = ?";
   $consulta = $this->db->query($sql, array($id));

   if ($consulta) {
      if ($consulta->num_rows() > 0) {
         return $consulta->result_array();
      } else {
         return false;
      }
   } else {
      // Manejar el caso de error en la consulta
      return false;
   }
}
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
public function getProductoId($id)
{
   $sql = "SELECT * FROM productos WHERE idProducto = ?";
   $consulta = $this->db->query($sql, array($id));

   if ($consulta) {
      if ($consulta->num_rows() > 0) {
         return $consulta->result_array();
      } else {
         return false;
      }
   } else {
      // Manejar el caso de error en la consulta
      return false;
   }
}
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
public function getDatosAdmin()
{
   $sql = "SELECT * FROM plataformaspago where id=0";
   
$consulta = $this->db->query($sql); 
return $consulta;
}
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
public function getProductosOfertas()
{
   $sql = "SELECT * FROM productos where oferta=1 AND activo=1";
   
$consulta = $this->db->query($sql); 
return $consulta;
}
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
public function getProductosMasBuscados()
{   
  
   $sql = "
   SELECT * FROM `estadisticas` 
INNER JOIN productos on estadisticas.idProducto=productos.idProducto
INNER JOIN rentabilidad on productos.idRentabilidad=rentabilidad.idRentabilidad
order by estadisticas.cantidad_clicks ASC
";   

    $consulta = $this->db->query($sql);

    return $consulta;
}
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
public function getProductosMes()
{   
  
   $sql = "
   SELECT * 
   FROM productos 
   INNER JOIN rentabilidad ON productos.idRentabilidad = rentabilidad.idRentabilidad
   WHERE activo = 1 
   AND fecha_agregado >= DATE_SUB(NOW(), INTERVAL 30 DAY) LIMIT 4
";   

    $consulta = $this->db->query($sql);

    return $consulta;
}
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
public function getProductos($busqueda, $pageNumber, $productosPorPagina = 4)
{
    // Calcula el offset basado en el número de página
    $offset = ($pageNumber - 1) * $productosPorPagina;

    $sql = "SELECT * FROM productos 
   INNER JOIN rentabilidad ON  productos.idRentabilidad = rentabilidad.idRentabilidad
    WHERE activo=1";
    if ($busqueda !== null) {
        // Utiliza la función escape para prevenir inyección SQL
        $busquedaEscapada = $this->db->escape_like_str($busqueda);
        $sql .= " AND nombreProducto LIKE '%$busquedaEscapada%'";
        // Ajusta "nombreProducto" según el campo real en tu base de datos que deseas buscar
    }

    // Agrega la cláusula LIMIT y OFFSET para la paginación
    $sql .= " LIMIT $offset, $productosPorPagina";

    $consulta = $this->db->query($sql);

    return $consulta;
}
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
public function getProductosCaracteristicas($idProducto)
{   
    $sql = "SELECT * FROM productocaracteristicas WHERE idProducto=".$idProducto;   
    $consulta = $this->db->query($sql);
    return $consulta;
}
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
public function getProductosConsulta()
{
$query="SELECT * FROM  productos  WHERE activo=1"; 
$consulta = $this->db->query($query); 
$consulta = $consulta->result_array();
return $consulta;
}
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
public function getCategorias()
{
$query="SELECT * FROM  categorias  WHERE activo=1"; 
$consulta = $this->db->query($query); 
return $consulta;
}
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
public function getProductosCategoria($idCategoria, $pageNumber, $productosPorPagina = 12)
{
    // Calcula el offset basado en el número de página
    $offset = ($pageNumber - 1) * $productosPorPagina;
    $sql = "SELECT * FROM productos 
    INNER JOIN categorias on productos.idCategoria = categorias.idCategoria
    INNER JOIN rentabilidad on productos.idRentabilidad = rentabilidad.idRentabilidad
    WHERE productos.activo=1 AND productos.idCategoria = $idCategoria";
    // Agrega la cláusula LIMIT y OFFSET para la paginación
    $sql .= " LIMIT $offset, $productosPorPagina";
    $consulta = $this->db->query($sql);
    return $consulta;
}
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
public function getOrdenesAll()
{
  $query="SELECT * FROM  ordenes where facturado=0  AND fecha <= DATE_SUB(CURDATE(), INTERVAL 1 DAY)"; 
   //$query="SELECT * FROM  ordenes where facturado=0 "; 
   $consulta = $this->db->query($query); 
   return $consulta;
}
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
public function getProductoCantidad($idProducto)
{
   $query="SELECT * FROM  productos WHERE idProducto = ".$idProducto.""; 
   $consulta = $this->db->query($query); 
   return $consulta;
}
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
public function getOrdenes($idUsuario)
{
   $query="SELECT * FROM  ordenes WHERE idUsuario=".$idUsuario." ORDER BY idOrden DESC"; 
   $consulta = $this->db->query($query); 
   return $consulta;
}
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
public function insert2($data,$base)
{
	$this->db->insert($base, $data);                
		if ($this->db->affected_rows()>=1){
      return "SI"; 
      }
      else {
      return "NO"; 
      }   
}
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////	 
public function update($id,$data,$base)
{
	$this->db->where('idUSUARIO', $id);
   $this->db->update($base, $data);
		if ($this->db->affected_rows()>=1){
         return "SI"; 
      }
      else {
         return "NO"; 
      }   
}
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
public function updatepedidoTodos($idNegocio,$idConductor,$data,$base)
    {
		$this->db->where('ESTADOS_PEDIDOS', 'TOMADO');
		$this->db->where('idNEGOCIOS', $idNegocio);
		$this->db->where('idCONDUCTOR', $idConductor);
                $this->db->update($base, $data);
		 if ($this->db->affected_rows()>=1){
   return "SI"; 
}else {
   return "NO"; 
}   
}
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
public function updatepedido($id,$data,$base)
    {
		$this->db->where('idPEDIDOS', $id);
                $this->db->update($base, $data);
		 if ($this->db->affected_rows()>=1){
   return "SI"; 
}else {
   return "NO"; 
}   
}
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
public function updategenerico($where,$id,$data,$base)
{
	$this->db->where($where, $id);
   $this->db->update($base, $data);
		if ($this->db->affected_rows()>=1){
         return "SI"; 
      }else {
         return "NO"; 
      }   
}
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
function insert($data,$base){
	$db_debug = $this->db->db_debug; //save setting
   $this->db->db_debug = FALSE; //disable debugging for queries
	$datos=$this->db->insert($base, $data); 		 
		if ($this->db->affected_rows()>=1){			
         return $this->db->insert_id(); 
      }else {
         return false;  
      }			
}
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
function enviaNotificacionEmail($para,$asunto,$mensaje){
$nombre='Agile Delivery';
$desde='admin@libreviaje.com';
@$this->load->library('email');
@$mail_config['smtp_host'] = 'mail.libreviaje.com';
@$mail_config['smtp_port'] = '587';
@$mail_config['smtp_user'] = 'admin@libreviaje.com';
@$mail_config['smtp_pass'] = 'Marcos30700971';
//$mail_config['smtp_crypto'] = 'tls'; //FIXED
@$mail_config['protocol'] = 'smtp'; //FIXED
@$mail_config['mailtype'] = 'html'; //FIXED
@$mail_config['charset'] = 'utf-8';
@$mail_config['newline'] = '\r\n';
@$this->email->initialize($mail_config);	   
@$this->email->from($desde,$nombre);
@$this->email->to($para);
@$this->email->subject($asunto);
@$this->email->message($mensaje);	
@$this->email->send();	
}	
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////		
public function eliminaRegistroFavorito($idProducto,$idUsuario) {
   $this->db->where('idProducto', $idProducto);
   $this->db->where('idUsuario', $idUsuario);
   $this->db->delete('favoritos');
}
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////		
public function getColores($idProducto) {
   $sql = "SELECT * FROM productocolores WHERE idProducto =".$idProducto;   
   $consulta = $this->db->query($sql);   
      if ($consulta->num_rows() > 0) {
          
         return $consulta->result_array();
      } else {
         
         return false;
      }   
}
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////		
public function getFavorito($idProducto,$idUsuario) {
   $sql = "SELECT * FROM favoritos WHERE idProducto =".$idProducto." AND idUsuario =".$idUsuario."";   
   $consulta = $this->db->query($sql);   
      if ($consulta->num_rows() > 0) {
          
         return true;
      } else {
         
         return false;
      }   
}
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////		
public function getFavoritosListado($id)
{
$query="SELECT productos.idProducto,productos.nombreProducto,productos.descripcionProducto,
productos.cantidadProducto,productos.fecha_agregado,
productos.fotoProducto,productos.fotoProducto2,productos.fotoProducto3,productos.fotoProducto4,productos.fotoProducto5,
productos.precioProducto, rentabilidad.porcentaje
 FROM `favoritos` 
 INNER JOIN productos ON favoritos.idProducto=productos.idProducto 
 INNER JOIN usuarios ON favoritos.idUsuario=usuarios.idUsuario 
 INNER JOIN rentabilidad ON rentabilidad.idRentabilidad=productos.idRentabilidad 
 WHERE usuarios.idUsuario=".$id; 
$consulta = $this->db->query($query); 
return $consulta;
}
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////		
public function setEstadisticaClick($data){
   $this->db->set('cantidad_clicks', 'cantidad_clicks + 1', FALSE);
   $this->db->where('idProducto', $data['idProducto']);		
   $this->db->update('estadisticas');
		if ($this->db->affected_rows()==0){
         $this->Productos_m->insert($data,'estadisticas');
      }        
}
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////		
public function setEstadisticas($data){
   $this->db->set('cantidad_vendido', 'cantidad_vendido + ' . $data['cantidad_vendido'], FALSE);
   $this->db->where('idProducto', $data['idProducto']);		
   $this->db->update('estadisticas');
		if ($this->db->affected_rows()==0){
         $this->Productos_m->insert($data,'estadisticas');
      }        
}
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////	 
public function modificaStock($data){
   $this->db->set('cantidadProducto', 'cantidadProducto - ' . $data['cantidad_vendido'], FALSE);
   $this->db->where('idProducto', $data['idProducto']);		
   $this->db->update('productos');
}
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////	 
public function eliminaOrdenCron($idOrden) {
   $this->db->where('idOrden', $idOrden);
   $this->db->where('facturado', 0);
   $this->db->delete('ordenes');
}
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////	 
	}
?>