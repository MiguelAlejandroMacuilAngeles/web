<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class OrdenSer extends CI_Controller {


    private $views = 'OrdenS/';
    private $model = 'MOrdenS';

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
		$data['ords'] = $this->{$this->model}->lista_ordenes();
		foreach ($data['ords'] as $key => $pr) {
			//$usuario->admin = ($usuario->admin == 1) ? 'Si' : 'No';
			//$usuario->active = ($usuario->active == 1) ? 'Activo' : 'In-activo';
			$pr->producto = $this->{$this->model}->obtener_producto($pr->NOrden);
		}
		$this->load->view($this->views .'lista_ordenes',$data);
	}

	/*public function nueva_orden()
	{
		$this->load->view($this->views .'nueva_orden');
	}
*/
	public function eliminar_orden($id)
    {
        $this->{$this->model}->eliminar_orden($id);
        redirect('OrdenSer');
    }// -------------------/ELIMINAR EQUIPO DE CALIBRACION FIN
    // -------------------------------------------------------------------

	/**
     * Agrega un usuario nuevo
     *
     * @return  Void
     */

	public function nueva_orden()
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
		            'field' => 'Fecha',
		            'label' => 'Grupos',
		            'rules' => 'required'
		        ),
		        array(
		            'field' => 'Elaboro',
		            'label' => 'Contraseña',
		            'rules' => 'required'
		        ),
		        array(
		            'field' => 'Empresa',
		            'label' => 'Repetir contraseña',
		            'rules' => 'required'
		        ),
		        array(
		            'field' => 'Orden',
		            'label' => 'Repetir contraseña',
		            'rules' => 'required'
		        ),
		        array(
		            'field' => 'Responsable',
		            'label' => 'Repetir contraseña',
		            'rules' => 'required'
		        )
			)
        );

        if( $this->form_validation->run() && $this->input->post() ){

        	//Corremos libreria
        	//$this->load->library('bcrypt');

        	$data = array(
        		'Estatus' 	=> $this->input->post('Status',TRUE),
        		'Fecha' => $this->input->post('Fecha',TRUE),
        		'NOrden' => NULL,
        		'Elaborado_Por' => $this->input->post('Elaboro',TRUE),
        		'Empresa' => $this->input->post('Empresa',TRUE),
        		'OrdCompra' => $this->input->post('Orden',TRUE),
        		'Responsable' => $this->input->post('Responsable',TRUE),
        	);
        	$producto = $this->input->post('Productos',TRUE);

        	$this->{$this->model}->guardar_orden($data, $producto);
        }

        //Vista
		$data['producto'] = $this->{$this->model}->listar_productos();
		$this->load->view($this->views .'nueva_orden',$data);

	}

	public function editar_orden($id)
	{
		//Obtenemos el usuario a editar
		if( !$data['orden'] = $this->{$this->model}->obtener_orden($id) )

		$data['orden']->productos = $this->{$this->model}->obtener_productos_orden($id);
		$data['producto1'] = $this->{$this->model}->obtener_productos_orden($id);

		// Validaciones de Formulario
        $this->form_validation->set_rules(
            array(
		        array(
		            'field' => 'Status',
		            'label' => 'Nombre',
		            'rules' => 'required'
		        ),
		        array(
		            'field' => 'Fecha',
		            'label' => 'Grupos',
		            'rules' => 'required'
		        ),
		        array(
		            'field' => 'Elaboro',
		            'label' => 'Contraseña',
		            'rules' => 'required'
		        ),
		        array(
		            'field' => 'Empresa',
		            'label' => 'Repetir contraseña',
		            'rules' => 'required'
		        ),
		        array(
		            'field' => 'Orden',
		            'label' => 'Repetir contraseña',
		            'rules' => 'required'
		        ),
		        array(
		            'field' => 'Responsable',
		            'label' => 'Repetir contraseña',
		            'rules' => 'required'
		        )
			)
        );

        if( $this->form_validation->run() && $this->input->post() ){

        	//Obtenemos el usuario a editar
			if( !$orden = $this->{$this->model}->obtener_orden($this->input->post('id_token',TRUE)) )

        	//Corremos libreria
        	//$this->load->library('bcrypt');

        	$data_update = array(
        		'Estatus' 	=> $this->input->post('Status',TRUE),
        		'Fecha' => $this->input->post('Fecha',TRUE),
        		'Elaborado_Por' => $this->input->post('Elaboro',TRUE),
        		'Empresa' => $this->input->post('Empresa',TRUE),
        		'OrdCompra' => $this->input->post('Orden',TRUE),
        		'Responsable' => $this->input->post('Responsable',TRUE),
        	);
        	$producto = $this->input->post('Productos',TRUE);

        	$this->{$this->model}->actualizar_orden($id,$data_update, $producto);
        	redirect('OrdenSer');

        }

        //Vista
		$data['producto'] = $this->{$this->model}->listar_productos();
		$this->load->view($this->views .'editar_orden',$data);

}
}
