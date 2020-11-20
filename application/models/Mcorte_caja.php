<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
*-------------------------------------------------------------------------
* Modelo Corte de caja
* ------------------------------------------------------------------------
*
* Modelo de base de datos para el modulo de corte de caja
*
* @author Fabrica de software / Universidad Politécnica de Tlaxcala
*
*/
class Mcorte_caja extends CI_Model{

    public function __construct()
    {
        $this->load->database();
    }

    //-------------------------------- CORTRE DE CAJA --------------------------------
    /**
     * Hace una consulta a la tabla venta
     *
     * @return  $query
    */
    public function listar_venta()
    {
        $query = $this->db->order_by('IDV','DESC')->get('venta');
        return $query->result_array();
    }

    //-------------------------------- /CORTRE DE CAJA --------------------------------

}
