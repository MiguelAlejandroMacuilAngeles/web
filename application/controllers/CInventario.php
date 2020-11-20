<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CInventario extends CI_Controller 
{
//INICIO DE CLASE
public function __construct() 
{
parent:: __construct();
$this->load->model('Minventario');
}

public function index() 
{
$data['result'] = $this->Minventario->getAllData();
$this->load->view('inventarioV/listar_inv', $data);
}

public function create() 
{
$this->load->view('inventarioV/nuevo_inv');
}

public function edit($codproducto) 
{
$data['row'] = $this->Minventario->getData($codproducto);
$this->load->view('inventarioV/editar_inv', $data);
}

public function new()
{
$this->Minventario->createData();
redirect("CInventario");
}

public function update($codproducto) 
{
$this->Minventario->updateData($codproducto);
redirect("CInventario");
}

public function delete($codproducto) 
{
$this->Minventario->deleteData($codproducto);
redirect("CInventario");
}
//FIN DE CLASE
}
