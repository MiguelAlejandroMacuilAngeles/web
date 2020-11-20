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
class MOrdenS extends CI_Model
{

    /**
     * Lista Orden
     * 
     * @return  Array
     */

    public function lista_ordenes()
    {
        return $this->db->get('orden_servicio')->result();
    }
    /**
     * Elimina Orden
     *
     * @param   Int
     * @return  Boolean
     */
    public function obtener_producto($id)
    {
        $this->db->join('oserv_prod','oserv_prod.CodProducto=producto.CodProducto');
        $this->db->where('oserv_prod.NOrden',$id);
        return $this->db->get('producto')->result();
    }

    /**
     * Guarda usuarios y grupos relacionados
     *
     * @param   Array
     * @param   Array
     * @return  Boolean
     */
    public function guardar_orden($data, $producto)
    {
        $this->db->insert('orden_servicio',$data);
        //$this->db->insert('oserv_prod',$producto);
        $NOrden = $this->db->insert_id();

        $index=0;
        foreach ($producto as $key => $prod){
            $data_permisos[$index]['CodProducto']   = $prod;
            $data_permisos[$index]['NOrden'] = $NOrden;
            $index++;
        }

        $this->db->insert_batch('oserv_prod',$data_permisos);
        
    }

    public function listar_productos()
    {
        return $this->db->get('producto')->result();
    }

    public function eliminar_orden($id)
    {
        $this->db->where('NOrden', $id);
        $this->db->delete('oserv_prod');
        
        $this->db->where('NOrden', $id);
        $this->db->delete('orden_servicio');
    }
        // --------------------------------------------------------------------

    /**
     * Obtiene un usuario en específico
     *
     * @param   Int
     * @return  Object
     */
    public function obtener_orden($id)
    {
        $this->db->where('NOrden',$id);
        return $this->db->get('orden_servicio')->row();
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
    public function actualizar_orden($id, $data, $producto)
    {
        $this->db->trans_start();
        $this->db->where('NOrden',$id);
        $this->db->delete('oserv_prod');

        $this->db->where('NOrden',$id);
        $this->db->update('orden_servicio',$data);

        $index=0;
        foreach ($producto as $key => $prod){
            $data_permisos[$index]['CodProducto']  = $prod;
            $data_permisos[$index]['NOrden'] = $id;
            $index++;
        }

        $this->db->insert_batch('oserv_prod',$data_permisos);
        $this->db->trans_complete();
        return $this->db->trans_status();

    }
}
