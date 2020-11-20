<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PuntoVenta extends CI_Controller {

	private $views = 'puntoventa/';
	private $model = 'MVenta';

	public function __construct()
    {
        parent::__construct();

        //Corremos modelo de base de datos
		$this->load->model($this->model);
		//corremos el modelo xd
		$this->load->model('Mcorte_caja');
    }


	public function Index()
	{
		$data['ventas']=$this->{$this->model}->listar_ventas();
		$data['productos']=$this->{$this->model}->listar_producto();

		$this->load->view('puntoventa/ModuloVenta',$data);
	}

	//-------------------------------------------CORTE DE CAJA --------------------------------
	/**
     * Cargamos la consulta 
	 * y pasamos los resultados
	 * a nuestra vista
     *
     * @return  Void
	*/
	public function Corte()
	{

		#Guardarmos el resultado de la función listar_venta()
		$data['venta'] = $this->{$this->model}->every_ventas();

$this->load->view('puntoVenta/ModuloCorte',$data);
	
	}

public function ingresa_ventas()
	{

		#Guardarmos el resultado de la función listar_venta()
		
		if($this->input->post() ){
			$datos= $this->{$this->model}->obtener_productos($this->input->post('idproducto'));
			foreach ($datos as $key => $campo) {
				//$this->load->view('puntoventa/ModuloCorte',$data);
				$datos = array(
					'CodVenta' => null,
					'Cantidad' => $this->input->post('cantidad'),
					'Importe' => $campo->Precio*$this->input->post('cantidad'),
					'Fecha' => date('y-m-j'),
					'CodProducto' => $this->input->post('idproducto')
				);
				
			}
				$this->{$this->model}->insertar_ventas($datos);
			$data['ventas']=$this->{$this->model}->listar_ventas();

		$this->load->view('puntoventa/ModuloVenta',$data);
		}
	
	}

	//-------------------------------------------/CORTE DE CAJA --------------------------------


	public function Devolcion()
	{
		$this->load->view('puntoventa/ModuloDevolucion');

	}

	public function ajaxRequestPostDevolucion()
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


	public function Listar_Productos()
	{
		$data['producto']=$this->{$this->model}->listar_producto();
		$this->load->view('puntoventa/ModuloVenta',$data);
	}

}
