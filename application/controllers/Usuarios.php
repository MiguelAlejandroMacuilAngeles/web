<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios extends CI_Controller {


    private $views = 'Usuarios/';
    private $model = 'MUsuario';

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
        $data['usuario'] = $this->{$this->model}->lista_usuarios();
        $this->load->view($this->views.'listar_usuarios',$data);
    }

	/**
     * Agrega un usuario nuevo
     *
     * @return  Void
     */

	public function nuevo_usuario()
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
		            'field' => 'area',
		            'label' => 'area',
		            'rules' => 'required'
		        ),
		        array(
		            'field' => 'puesto',
		            'label' => 'puesto',
		            'rules' => 'required'
		        ),
		        array(
		            'field' => 'tipoUsuario',
		            'label' => 'tipo de usuario',
		            'rules' => 'required'
				),
				array(
		            'field' => 'grupoTrabajo',
		            'label' => 'grupo de trabajo',
		            'rules' => 'required'
				),
				array(
		            'field' => 'correo',
		            'label' => 'correo',
		            'rules' => 'required'
		        ),
		        array(
		            'field' => 'contrasena',
		            'label' => 'Contraseña',
		            'rules' => 'required'
		        )
			)
        );

        if( $this->form_validation->run() && $this->input->post() ){

        	//Corremos libreria
        	//$this->load->library('bcrypt');
			
        	$data = array(
				'IDUsuario'	=> NULL,
        		'Nombre' => $this->input->post('nombre',TRUE),
        		'apellidoPaterno' => $this->input->post('apellido_paterno',TRUE),
        		'apellidoMaterno' => $this->input->post('apellido_materno',TRUE),
        		'Area' => $this->input->post('area',TRUE),
        		'Puesto' => $this->input->post('puesto',TRUE),
        		'tipoUsuario' => $this->input->post('tipoUsuario',TRUE),
				'grupoTrabajo' => $this->input->post('grupoTrabajo',TRUE),
				'correo' => $this->input->post('correo',TRUE),
				'contrasena' => $this->input->post('contrasena',TRUE),
			);
			$this->{$this->model}->guardar_usuario($data);
			redirect('Usuarios');
        }
		$this->load->view($this->views .'agregar_usuario');
        //Vista		
		

	}

	public function editar_usuarios($id)
	{
		if( !$data['usuario'] = $this->{$this->model}->obtener_usuario($id) )
		$data['usuario'] = $this->{$this->model}->obtener_usuario($id);
		
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
		            'field' => 'area',
		            'label' => 'area',
		            'rules' => 'required'
		        ),
		        array(
		            'field' => 'puesto',
		            'label' => 'puesto',
		            'rules' => 'required'
		        ),
		        array(
		            'field' => 'tipoUsuario',
		            'label' => 'tipo de usuario',
		            'rules' => 'required'
				),
				array(
		            'field' => 'grupoTrabajo',
		            'label' => 'grupo de trabajo',
		            'rules' => 'required'
				),
				array(
		            'field' => 'correo',
		            'label' => 'correo',
		            'rules' => 'required'
		        ),
		        array(
		            'field' => 'contrasena',
		            'label' => 'Contraseña',
		            'rules' => 'required'
		        )
			)
        );

        if( $this->form_validation->run() && $this->input->post()){
        	//Obtenemos el usuario a editar
			if( !$usuario = $this->{$this->model}->obtener_usuario($this->input->post('id_token',TRUE)) )
        	//Corremos libreria
        	//$this->load->library('bcrypt');
        	$data_update = array(
        		'Nombre' => $this->input->post('nombre',TRUE),
        		'apellidoPaterno' => $this->input->post('apellido_paterno',TRUE),
        		'apellidoMaterno' => $this->input->post('apellido_materno',TRUE),
        		'Area' => $this->input->post('area',TRUE),
        		'Puesto' => $this->input->post('puesto',TRUE),
        		'tipoUsuario' => $this->input->post('tipoUsuario',TRUE),
				'grupoTrabajo' => $this->input->post('grupoTrabajo',TRUE),
				'correo' => $this->input->post('correo',TRUE),
				'contrasena' => $this->input->post('contrasena',TRUE),
        	);
        	$this->{$this->model}->actualizar_usuario($id,$data_update);
        	redirect('Usuarios');
        }
		//Vista
		$this->load->view($this->views .'editar_usuario',$data);
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
