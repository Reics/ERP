<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Agregarespecialidad extends CI_Controller {

	
	public function index()
	{

		$data['header'] = array('title' => 'Proveedores' , 'proveedores' => '' , 'presupuestos' => '' , 'profecionistas' => 'active' );//se inicializa el titulo de la pagina
		$id=$this->input->post('id');
		/*Habre el html y el body, y carga el header junto con el css de bootstrap*/
		$this->load->view('header', $data);
 		$this->load->model('mvermas');
        $variable['registros'] = $this->mvermas->vermasprof($id);
		/*carga el contenido de la pagina*/
		$this->load->view('agregarespecialidad',$variable);

		/*Se cierra el body y el html, y se agregan los js de bootstrap*/
		$this->load->view('footer');
	}

	public function insertaresp(){

			$nombre=$this->input->post('nomesp');
			$tipo=$this->input->post('tipoesp');
			$anios=$this->input->post('anios');
			$id=$this->input->post('agregar');
			$this->load->model('profesionista_model');
			$this->profesionista_model->insertarespecialidad($nombre,$tipo,$anios,$id);
			redirect(base_url()."index.php");
	}

	public function eliminaresp()
	{
	$id=$this->input->post('elimina');
	$this->load->model('profesionista_model');
	$this->profesionista_model->eliminaesp($id);
	redirect(base_url()."index.php");


	}
	}
	

