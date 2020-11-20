<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Proveedor extends CI_Controller {


    private $views = 'Proveedor/';
    private $model = 'MProveedor';

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

	/**
     * Muestra la vista principal
     *
     * @return  Void
     */
    public function index()
    {
        $data['prov'] = $this->{$this->model}->lista_proveedores();
        $this->load->view($this->views.'listar_proveedores',$data);
    }

	/**
     * Agrega un usuario nuevo
     *
     * @return  Void
     */

	public function nuevo_proveedor()
	{

		// Validaciones de Formulario
        $this->form_validation->set_rules(
            array(
		        array(
		            'field' => 'nombre',
		            'label' => 'nombre',
		            'rules' => 'required'
		        ),
		        array(
		            'field' => 'apellido_paterno',
		            'label' => 'apellido paterno',
		            'rules' => 'required'
				),
				array(
		            'field' => 'apellido_materno',
		            'label' => 'apellido materno',
		            'rules' => 'required'
		        ),
		        array(
		            'field' => 'rfc',
		            'label' => 'rfc',
		            'rules' => 'required'
		        ),
		        array(
		            'field' => 'fax',
		            'label' => 'fax',
		            'rules' => 'required'
		        ),
		        array(
		            'field' => 'telefono',
		            'label' => 'telefono',
		            'rules' => 'required'
				),
				array(
		            'field' => 'correo',
		            'label' => 'correo',
		            'rules' => 'required'
				)
			)
        );
        if( $this->form_validation->run() && $this->input->post() ){

        	//Corremos libreria
        	//$this->load->library('bcrypt');
			
        	$data = array(
				'IDProveedor'	=> NULL,
        		'Nombre' => $this->input->post('nombre',TRUE),
        		'apellidoPaterno' => $this->input->post('apellido_paterno',TRUE),
        		'apellidoMaterno' => $this->input->post('apellido_materno',TRUE),
        		'RFC' => $this->input->post('rfc',TRUE),
        		'Fax' => $this->input->post('fax',TRUE),
        		'Telefono' => $this->input->post('telefono',TRUE),
				'correo' => $this->input->post('correo',TRUE),
			);
			$this->{$this->model}->guardar_proveedor($data);
			redirect('Proveedor');
        }
		$this->load->view($this->views .'agregar_proveedor');
        //Vista		
		

	}

	public function editar_proveedor($id)
	{
		if( !$data['prov'] = $this->{$this->model}->obtener_proveedor($id) )
		$data['prov'] = $this->{$this->model}->obtener_proveedor($id);
		
        $this->form_validation->set_rules(
            array(
		        array(
		            'field' => 'nombre',
		            'label' => 'nombre',
		            'rules' => 'required'
		        ),
		        array(
		            'field' => 'apellido_paterno',
		            'label' => 'apellido paterno',
		            'rules' => 'required'
				),
				array(
		            'field' => 'apellido_materno',
		            'label' => 'apellido materno',
		            'rules' => 'required'
		        ),
		        array(
		            'field' => 'rfc',
		            'label' => 'rfc',
		            'rules' => 'required'
		        ),
		        array(
		            'field' => 'fax',
		            'label' => 'fax',
		            'rules' => 'required'
		        ),
		        array(
		            'field' => 'telefono',
		            'label' => 'telefono',
		            'rules' => 'required'
				),
				array(
		            'field' => 'correo',
		            'label' => 'correo',
		            'rules' => 'required'
				)
			)
        );

        if( $this->form_validation->run() && $this->input->post()){
        	//Obtenemos el usuario a editar
			if( !$prov = $this->{$this->model}->obtener_proveedor($this->input->post('id_token',TRUE)) )
        	//Corremos libreria
        	//$this->load->library('bcrypt');
        	$data_update = array(
        		'Nombre' => $this->input->post('nombre',TRUE),
        		'apellidoPaterno' => $this->input->post('apellido_paterno',TRUE),
        		'apellidoMaterno' => $this->input->post('apellido_materno',TRUE),
        		'RFC' => $this->input->post('rfc',TRUE),
        		'Fax' => $this->input->post('fax',TRUE),
        		'Telefono' => $this->input->post('telefono',TRUE),
				'correo' => $this->input->post('correo',TRUE),				
        	);
        	$this->{$this->model}->actualizar_proveedor($id,$data_update);
        	redirect('Proveedor');
        }
		//Vista
		$this->load->view($this->views .'editar_proveedor',$data);
	}

	/**
     * Elimina un determinado usuario
     * 
     * @param 	Int
     * @return  Void
     */
	public function eliminar_usuario($id)
    {
        $this->{$this->model}->elimina_usuario($id);
        redirect('usuarios');
    }

}
