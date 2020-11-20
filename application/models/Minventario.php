<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Minventario extends CI_Model 
{
//INICIO DE CLASE
public function __construct() 
{
$this->load->database();
}

function createData() 
{
$data = array 
(
'estatus' => $this->input->post('estatus'),
'stock' => $this->input->post('stock'),
'CodProducto' => $this->input->post('CodigoProducto'),
'Precio' => $this->input->post('Precio'),
'FechaRegistro' => $this->input->post('Fecha'),
'Nombre' => $this->input->post('NombreEquipo'),
'Marca' => $this->input->post('Marca'),
'Modelo' => $this->input->post('Modelo'),
'Num_Serie' => $this->input->post('NumSerie'),
'Descripcion' => $this->input->post('Descripcion'),
'Categoria' => $this->input->post('Categoria')
);
$this->db->insert('producto', $data);
}

function getAllData() 
{
$query = $this->db->query('SELECT codproducto,nombre,marca,modelo,num_serie,descripcion,estatus,fecharegistro from producto');
return $query->result();
}

function getData($codproducto) 
{
$query  = $this->db->select('*')
->from('producto')
->where('codproducto', $codproducto) 
->get();
return $query->row();
}

function updateData($codproducto) 
{
$data = array 
(
'estatus' => $this->input->post('estatus'),
'stock' => $this->input->post('stock'),
'CodProducto' => $this->input->post('CodProducto'),
'Precio' => $this->input->post('Precio'),
'FechaRegistro' => $this->input->post('Fecha'),
'Nombre' => $this->input->post('NombreEquipo'),
'Marca' => $this->input->post('Marca'),
'Modelo' => $this->input->post('Modelo'),
'Num_Serie' => $this->input->post('NumSerie'),
'Descripcion' => $this->input->post('Descripcion'),
'Categoria' => $this->input->post('Categoria')
);
$this->db->where('codproducto', $codproducto);
$this->db->update('producto', $data);
}

function deleteData($codproducto) 
{
$this->db->where('codproducto', $codproducto);
$this->db->delete('producto');
}
//FIN DE CLASE
}
