<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inicio extends CI_Controller {
	
	function __construct()
	{
		parent::__construct();
		if(!$this->session->userdata('usuario'))
		{
			redirect('Login');
		}
	}

	public function index()
	{
		$this->load->view('inicio/Index');
	}

	function logout()
	{
		if($this->session->userdata('usuario'))
		{
			$this->session->unset_userdata('usuario');
			redirect('Login');
		}
	}
}
