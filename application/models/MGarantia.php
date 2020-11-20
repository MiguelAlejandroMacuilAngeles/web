<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
*-------------------------------------------------------------------------
* Modelo Garantias
* ------------------------------------------------------------------------
*
* Modelo de base de datos para el controlador Garantias
*
* @author Avalos Salazar Daniela
*         Diaz Lira Abel
*         Rodriguez Ortiz David
*         Teran Ruiz Luis Antonio
* / Universidad Politécnica de Tlaxcala
*
*/
class MGarantia extends CI_Model{

    /**
     * Lista Garantias
     * 
     * @return  Array
     */

    public function listar_garantias(){
        return $this->db->get('garantia')->result();
    }
    /**
     * Busca Garantia
     *
     * @param   Int
     * @return  Boolean
     */
    public function obtener_garantia($id){
        $this->db->where('venta',$id);
        return $this->db->get('venta')->row();
    }

}