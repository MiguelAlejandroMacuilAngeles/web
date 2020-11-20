 <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MVenta extends CI_Model
{

	//Cargamos la base de datos 
    public function __construct(){
        $this->load->database();
    }

    public function listar_producto(){
    	 return $this->db->get('producto')->result();
    }
	public function listar_ventas(){
    	$consulta = "SELECT venta.CodVenta, producto.Nombre,producto.Descripcion,venta.Cantidad,producto.Precio,venta.Importe  FROM venta,producto WHERE venta.CodProducto=producto.CodProducto";
        return $this->db->query($consulta)->result();
    }
	   public function obtener_productos($id){
		    $this->db->where('CodProducto',$id);
        return $this->db->get('producto')->result();
    }
	  public function insertar_ventas($data){
		   $this->db->insert('venta', $data);
    }
	public function every_ventas(){
    	 return $this->db->get('venta')->result();
    }
	
	


}

