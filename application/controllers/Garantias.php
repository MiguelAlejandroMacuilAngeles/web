<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Garantias extends CI_Controller {


    private $views = 'Garantias/';
    private $model = 'MGarantia';

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

	public function index(){
		$data['garantias'] = $this->{$this->model}->listar_garantias();
		$this->load->view($this->views .'Garantias',$data);
	}

	public function visualizar_garantia($id){
		$data['garantias'] = $this->{$this->model}->listar_garantias();
		$this->load->view($this->views .'Garantias',$data);
	}
}
?>