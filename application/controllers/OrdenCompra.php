<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class OrdenCompra extends CI_Controller {


    private $views = 'OrdenCompra/';
    private $model = 'MordenCompra';

    public function __construct()
    {
        parent::__construct();

        //Corremos modelo de base de datos
        $this->load->model($this->model);

        if(!$this->session->userdata('usuario'))
		{
			redirect('Login');
		}
    }

	public function index()
	{
		$data['ordcomp'] = $this->{$this->model}->lista_ordenCompra();
		/*foreach ($data['ordcomp'] as $key => $pr) {
			//$usuario->admin = ($usuario->admin == 1) ? 'Si' : 'No';
			//$usuario->active = ($usuario->active == 1) ? 'Activo' : 'In-activo';
			//$pr->proveedor = $this->{$this->model}->obtener_proveedor($pr->NOrden);
		}
		*/
		$this->load->view($this->views .'listar_orden_compra',$data);
	}

	/*public function nueva_orden()
	{
		$this->load->view($this->views .'nueva_orden');
	}
*/
	public function eliminar_orden($id)
    {
        $this->{$this->model}->eliminar_ordenc($id);
        redirect('OrdenCompra');
    }// -------------------/ELIMINAR EQUIPO DE CALIBRACION FIN
    // -------------------------------------------------------------------

	/**
     * Agrega un usuario nuevo
     *
     * @return  Void
     */

	public function agregar_orden()
	{

		// Validaciones de Formulario
        $this->form_validation->set_rules(
            array(
		        array(
		            'field' => 'Status',
		            'label' => 'Nombre',
		            'rules' => 'required'
		        ),
		        array(
		            'field' => 'Proveedor',
		            'label' => 'proveedor',
		            'rules' => 'required'
		        ),
		        array(
		            'field' => 'Fecha',
		            'label' => 'Grupos',
		            'rules' => 'required'
		        ),
		        array(
		            'field' => 'Elaboro',
		            'label' => 'Elaboro',
		            'rules' => 'required'
		        ),
		        array(
		            'field' => 'Referencia',
		            'label' => 'Referencia',
		            'rules' => 'required'
		        ),
		        array(
		            'field' => 'Total',
		            'label' => 'Total',
		            'rules' => 'required'
		        )
			)
        );

        if( $this->form_validation->run() && $this->input->post() ){

        	//Corremos libreria
        	//$this->load->library('bcrypt');

        	$data = array(
        		'IDOrdenC' => $this->input->post('IDOrdenC',TRUE),
        		'Estatus' 	=> $this->input->post('Status',TRUE),
        		'Proovedor' => $this->input->post('Proveedor',TRUE),
        		'Fecha' => $this->input->post('Fecha',TRUE),
        		'Elaboro' => $this->input->post('Elaboro',TRUE),
        		'Referencia' => $this->input->post('Referencia',TRUE),
        		'Total' => $this->input->post('Total',TRUE),
        	);

        	$this->{$this->model}->guardar_ordenc($data);
        }

		$this->load->view($this->views .'agregar_orden');

	}

	public function editar_ordenc($id)
	{
		//Obtenemos el usuario a editar
		if( !$data['orden'] = $this->{$this->model}->obtener_orden($id) )
		$data['orden'] = $this->{$this->model}->obtener_orden($id);
		// Validaciones de Formulario
        $this->form_validation->set_rules(
            array(
		        array(
		            'field' => 'Status',
		            'label' => 'Estatus',
		            'rules' => 'required'
		        ),
		        array(
		            'field' => 'Proveedor',
		            'label' => 'Proveedor',
		            'rules' => 'required'
		        ),
		        array(
		            'field' => 'Fecha',
		            'label' => 'Fecha',
		            'rules' => 'required'
		        ),
		        array(
		            'field' => 'Elaboro',
		            'label' => 'Elaboro',
		            'rules' => 'required'
		        ),
		        array(
		            'field' => 'Total',
		            'label' => 'Total',
		            'rules' => 'required'
		        ),
		        array(
		            'field' => 'Referencia',
		            'label' => 'Referencia',
		            'rules' => 'required'
		        )
			)
        );

        if( $this->form_validation->run() && $this->input->post() ){
        	$data_update = array(
				'Referencia' => $this->input->post('Referencia',TRUE),
				'Total' => $this->input->post('Total',TRUE),
				'Fecha' => $this->input->post('Fecha',TRUE),
				'Estatus' 	=> $this->input->post('Status',TRUE),
				'Elaboro' => $this->input->post('Elaboro',TRUE),
				'Proovedor' => $this->input->post('Proveedor',TRUE),        		        		        
        	);
        
        	$this->{$this->model}->actualizar_orden($id,$data_update);
        	redirect('OrdenCompra');

        }

		$this->load->view($this->views .'editar_ordenC',$data);


}
}
