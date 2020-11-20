<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
*-------------------------------------------------------------------------
* Modelo compras
* ------------------------------------------------------------------------
*
* Modelo de base de datos para el controlador compras
*
* @author Hugo, Cristopher, Jonathan
*
*/
class MCompras extends CI_Model
{

    public function guardar_compra($data)
    {
        return $this->db->insert('compra',$data);
    }

    /**
     * Lista Orden
     * 
     * @return  Array
     */

    public function lista_ordenes()
    {         
        $this->db->select('compra.IDCompra, catalogodirecciones.id_Direccion, catalogodirecciones.Calle,
        catalogodirecciones.NumInterior, catalogodirecciones.NumExterior, catalogodirecciones.Colonia, catalogodirecciones.Localidad,
        catalogodirecciones.Estado, catalogolinea.id_CatalogoLinea, catalogolinea.URL, contactos.IDContacto, 
        concat(contactos.Nombre," ", contactos.ApellidoPaterno," ", contactos.ApellidoMaterno) as contactoNombre, contactos.Telefono, contactos.Correo, proveedor.IDProveedor,
        concat(proveedor.Nombre," ", proveedor.ApellidoPaterno," ", proveedor.ApellidoMaterno) as proveedorNombre, proveedor.RFC, proveedor.Fax,
        proveedor.Telefono as proveedorTelefono, proveedor.Correo');
        
        $this->db->join('catalogodirecciones', 'compra.id_Direccion = catalogodirecciones.id_Direccion');
        $this->db->join ( 'catalogolinea', 'compra.id_CatalogoLinea = catalogolinea.id_CatalogoLinea' );
        $this->db->join ( 'contactos', 'compra.IDContacto = contactos.IDContacto' );
        $this->db->join ( 'proveedor', 'compra.IDProveedor = proveedor.IDProveedor' );
        $this->db->where ( 'catalogodirecciones.id_Direccion = compra.id_Direccion');
        $this->db->order_by ( 'IDCompra' );

        //debug( $this->db->get('compra')->result() );

        return $this->db->get('compra')->result();
    }

    /**
     * Lista proveedores
     * 
     * @return  Array
     */

    public function lista_proveedores()
    {
        return $this->db->get('proveedor')->result();
    }

    /**
     * Lista conactos
     * 
     * @return  Array
     */

    public function lista_contacto()
    {
        return $this->db->get('contactos')->result();
    }

    /**
     * Lista catalogos linea
     * 
     * @return  Array
     */

    public function lista_catalogo()
    {
        return $this->db->get('catalogolinea')->result();
    }

    /**
     * Lista catalogo direccion
     * 
     * @return  Array
     */

    public function lista_catalogoDir()
    {
        return $this->db->get('catalogodirecciones')->result();
    }
    
    public function eliminar_compra($id)
    {
        $this->db->where('IDCompra', $id);
        $this->db->delete('compra');
    }

    public function obtener_compra($id)
    {
        $this->db->where('IDCompra', $id);
        return $this->db->get('compra')->row();
    }
    
      /**
     * Actualizar compra
     *
     * @param   Int
     * @param   Array
     * @param   Array
     * @return  Boolean
     */
    public function actualizar_compra($id, $data)
    {
        $this->db->trans_start();
        $this->db->where('IDCompra',$id);
        $this->db->update('compra',$data);
        $this->db->trans_complete();
        return $this->db->trans_status();

    }
}
