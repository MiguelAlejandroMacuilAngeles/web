<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class MDevolucion extends CI_Model
{

	public function ajaxRequest()
	{
		$data['data'] = $this->db->get("devolucion")->result();
		$this->load->view('ModuloDevolucion', $data);
	}

	public function ajaxRequestPost()
	{
		$data = array(
			'CodVenta' => $this->input->post('CodVenta'),
			'CodProducto' => $this->input->post('CodProducto'),
			'Cantidad' => $this->input->post('Cantidad'),
			'Motivo' => $this->input->post('Motivo'),
			'Autoriza' => $this->input->post('Autoriza')
		);
		$this->db->insert('devolucion', $data);


		echo 'Added successfully.';
	}

	//Cargar BD
    public function __construct(){
        $this->load->database();
    }

    public function listar_producto(){
    	$consulta = "SELECT producto.CodProducto, InventarioV.CodProducto, producto.Nombre, producto.Marca, producto.Modelo, producto.Descripcion, producto.FechaRegistro, producto.Precio, producto.Categoria, InventarioV.Stock FROM producto JOIN InventarioV ON producto.codproducto=InventarioV.codproducto";
        return $this->db->query($consulta)->result();
    }

	//Insertar en la tabla



}

