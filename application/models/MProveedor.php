<?php
class MProveedor extends CI_Model
/**
*-------------------------------------------------------------------------
* Modelo proveedor
* ------------------------------------------------------------------------
*
* Modelo de base de datos para el controlador proveedor
*
* @author Hugo, Cristopher, Jonathan
*
*/
{
	
    /**
     * Guarda proveedor
     *
     * @param   Array
     * @return  Boolean
     */
	public function guardar_proveedor($data)
    {
		
        //$this->db->insert('oserv_prod',$producto);
		$this->db->insert('proveedor',$data);
        $IDProveedor = $this->db->insert_id();
	}
	
    /**
     * Lista los proveedores
     *
     * @param   Int
     * @return  Object
     */
    public function lista_proveedores()
    {
        return $this->db->get('proveedor')->result();
    }

	/**
     * Obtiene un proveedor en específico
     * 
     * @param   Int
     * @return  Object
     */
    public function obtener_proveedor($id)
    {
        $this->db->where('IDProveedor',$id);
        return $this->db->get('proveedor')->row();
    }

    /**
    * Actualiza un proveedor
    *
    * @param   Int
    * @param   Array
    * @return  Boolean
    */
    public function actualizar_proveedor($id,$data)
    {
        $this->db->trans_start();
        $this->db->where('IDProveedor',$id);
        $this->db->update('proveedor',$data);
        $this->db->trans_complete();
        return $this->db->trans_status();
    }

	/**
     * Elimina el proveedor
     * 
     * @param   Int
     * @return  Boolean
     */
	public function elimina_proveedor($id)
    {
        $this->db->where('IDProveedor', $id);
        $this->db->delete('proveedor');
    
    }
}