<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Compras extends CI_Controller {


    private $views = 'compras/';
    private $model = 'MCompras';

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
		$data['comp'] = $this->{$this->model}->lista_ordenes();
		//debug($data['comp']);
		$this->load->view($this->views .'listar_compras',$data);
	}


	public function eliminar_compra($id)
    {
        $this->{$this->model}->eliminar_compra($id);
        redirect('Compras');
	}

	/**
     * Agrega una compra
     *
     * @return  Void
     */
	public function nueva_compra()
	{

		// Validaciones de Formulario
        $this->form_validation->set_rules(
            array(
		        array(
		            'field' => 'id_proveedor',
		            'label' => 'Proveedor',
		            'rules' => 'required'
		        ),
		        array(
		            'field' => 'id_contacto',
		            'label' => 'Contacto',
		            'rules' => 'required'
		        ),
		        array(
		            'field' => 'id_direccion',
					'label' => 'Direccion',
		            'rules' => 'required'
				),
				array(
		            'field' => 'id_catalogo',
					'label' => 'Catalogo linea',
		            'rules' => 'required'
		        )
			)
        );

        if( $this->form_validation->run() && $this->input->post() ){

        	//Corremos libreria
        	//$this->load->library('bcrypt');

        	$data = array(
				'IDProveedor' 	=> $this->input->post('id_proveedor',TRUE),
				'IDContacto' 	=> $this->input->post('id_contacto',TRUE),
				'id_Direccion' 	=> $this->input->post('id_direccion',TRUE),
        		'id_CatalogoLinea' 	=> $this->input->post('id_catalogo',TRUE),
			);
			$this->{$this->model}->guardar_compra($data);
			redirect('Compras');
        }
        //Vista
		$data['contacto'] = $this->{$this->model}->lista_contacto();
		$data['proveedor'] = $this->{$this->model}->lista_proveedores();
		$data['catalogoLin'] = $this->{$this->model}->lista_catalogo();
		$data['catalogoDir'] = $this->{$this->model}->lista_catalogoDir();
		$this->load->view($this->views .'nueva_compra',$data);

	}

	public function editar_compra($id)
	{
		//Obtenemos el usuario a editar
		if( !$data['compra'] = $this->{$this->model}->obtener_compra($id) )

		$data['compra'] = $this->{$this->model}->obtener_compra($id);

		// Validaciones de Formulario
        $this->form_validation->set_rules(
			array(
				array(
					'field' => 'id_proveedor',
		            'label' => 'Proveedor',
					'rules' => 'required'
		        ),
		        array(
					'field' => 'id_contacto',
		            'label' => 'Contacto',
		            'rules' => 'required'
		        ),
		        array(
					'field' => 'id_direccion',
					'label' => 'Direccion',
		            'rules' => 'required'
				),
				array(
					'field' => 'id_catalogo',
					'label' => 'Catalogo linea',
		            'rules' => 'required'
				)
			)
		);
				
				
		if( $this->form_validation->run() && $this->input->post() ){

			//Obtenemos el usuario a editar
			if( !$compra = $this->{$this->model}->obtener_compra($this->input->post('id_token',TRUE)) )
			
			//Corremos libreria
			//$this->load->library('bcrypt');
			
			$data_update = array(
				'IDProveedor' 	=> $this->input->post('id_proveedor',TRUE),
				'IDContacto' 	=> $this->input->post('id_contacto',TRUE),
				'id_Direccion' 	=> $this->input->post('id_direccion',TRUE),
				'id_CatalogoLinea' 	=> $this->input->post('id_catalogo',TRUE),
			);
			
			$this->{$this->model}->actualizar_compra($id,$data_update);
			redirect('Compras');
			
		}
		
		$data['contacto'] = $this->{$this->model}->lista_contacto();
		$data['proveedor'] = $this->{$this->model}->lista_proveedores();
		$data['catalogoLin'] = $this->{$this->model}->lista_catalogo();
		$data['catalogoDir'] = $this->{$this->model}->lista_catalogoDir();
		
		//debug($data );
		
		//Vista
		$this->load->view($this->views .'editar_compra',$data);
		
	}
}
