<?php

class Login extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		if($this->session->userdata('usuario'))
		{
			redirect('Inicio');
		}
	}	
	
	/////---------------------------------------------------------
	///Funcion para verificar
	function verify(){
		//$matricula = $this->input->post('matricula');
		//$contrasena = $this->input->post('contrasena');
		$this->load->model('MUsuario');
		$check = $this->MUsuario->validate();
		if($check)
		{
			$this->session->set_userdata('usuario','1');
			redirect('Inicio');
		}
		else
		{
			redirect('Login');
		}
	}

	/////---------------------------------------------------------
	//funcion de login

	function index(){		
		if($this->session->userdata('usuario'))
		{
			redirect('Inicio');
		}
		$this->load->view('login/Log');		
	}
	/////---------------------------------------------------------
	function logout()
	{
		if($this->session->userdata('usuario'))
		{
			$this->session->unset_userdata('usuario');
			redirect('Login');
		}
	}
}
