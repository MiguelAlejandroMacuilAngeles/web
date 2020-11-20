<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
*-------------------------------------------------------------------------
* Modelo Sistema
* ------------------------------------------------------------------------
*
* Modelo de base de datos para el controlador Sistema
*
* @author Fabrica de software / Universidad Politécnica de Tlaxcala
*
*/
class MordenCompra extends CI_Model
{

    /**
     * Lista Ordenes de compra
     * 
     * @return  Array
     */

    public function lista_ordenCompra()
    {
        return $this->db->get('orden_compra')->result();
    }
    /**
     * Elimina Orden
     *
     * @param   Int
     * @return  Boolean
     */
   /** public function obtener_producto($id)
    {
        $this->db->join('oserv_prod','oserv_prod.CodProducto=producto.CodProducto');
        $this->db->where('oserv_prod.NOrden',$id);
        return $this->db->get('producto')->result();
    }*/

    public function obtener_proveedor($id)
    {
        $this->db->join('orden_compra','orden_compra.Proovedor=proveedor.IDProveedor');
        $this->db->where('proveedor.IDProveedor',$id);
        return $this->db->get('proveedor')->result();
    }

    /**
     * Guarda usuarios y grupos relacionados
     *
     * @param   Array
     * @param   Array
     * @return  Boolean
     */
    public function guardar_orde($data)
    {
        $this->db->insert('orden_compra',$data);
        $NOrden = $this->db->insert_id();

        $index=0;
        foreach ($producto as $key => $prod){
            $data_permisos[$index]['CodProducto']   = $prod;
            $data_permisos[$index]['NOrden'] = $NOrden;
            $index++;
        }

        $this->db->insert_batch('oserv_prod',$data_permisos);
        
    }

    //-------------------------------------------------------------
    /**
     * Guarda area
     *
     * @param Array
     * @return  Boolean
     */
    public function guardar_ordenc($data)
    {
        return $this->db->insert('orden_compra', $data);
    }
    //--------------------------------------------------------------
    public function listar_productos()
    {
        return $this->db->get('producto')->result();
    }

    /**
     * Elimina la orden de compra
     *
     * @param Int
     * @return  Boolean
     */
    public function eliminar_ordenc($id)
    {
        $this->db->where('IDOrdenC', $id);
        $this->db->delete('orden_compra');
    }
        // --------------------------------------------------------------------

    /**
     * Obtiene un id en específico de orden de compra
     *
     * @param   Int
     * @return  Object
     */
    public function obtener_orden($id)
    {
        $this->db->where('IDOrdenC',$id);
        return $this->db->get('orden_compra')->row();
    }

    /**
     * Lista todos los grupos de trabajo
     *
     * @param   Int
     * @return  Array
     */
    public function obtener_productos_orden($id)
    {
        $this->db->join('oserv_prod','oserv_prod.CodProducto=producto.CodProducto');
        $this->db->where('oserv_prod.NOrden',$id);
        return $this->db->get('producto')->result();
    }
        /**
     * Actualizar usuario y grupos
     *
     * @param   Int
     * @param   Array
     * @param   Array
     * @return  Boolean
     */
    public function actualizar_orden($id, $data)
    {
        $this->db->trans_start();
        $this->db->where('IDOrdenC',$id);
        $this->db->update('orden_compra',$data);
        $this->db->trans_complete();
        return $this->db->trans_status();

    }
}