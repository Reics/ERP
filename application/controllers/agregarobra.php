<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Agregarobra extends CI_Controller {

	
	public function index()
	{

	$data['header'] = array('title' => 'Proveedores' , 'proveedores' => '' , 'presupuestos' => '' , 'profecionistas' => 'active' );//se inicializa el titulo de la pagina
		$id=$this->input->post('id');
		/*Habre el html y el body, y carga el header junto con el css de bootstrap*/
		$this->load->view('header', $data);
 		$this->load->model('mvermas');
        $variable['registros'] = $this->mvermas->vermasprof($id);
		/*carga el contenido de la pagina*/
		$this->load->view('agregarobra',$variable);

		/*Se cierra el body y el html, y se agregan los js de bootstrap*/
		$this->load->view('footer');
	}
	public function insertarobra()
	{


			$nombre=$this->input->post('nomobra');
			$fechai=$this->input->post('fechai');
			$fechat=$this->input->post('fechat');
			$id=$this->input->post('agregar');
			$this->load->model('profesionista_model');
			$this->profesionista_model->insertarobra($nombre,$fechai,$fechat,$id);
			redirect(base_url()."index.php");
		}

		public function eliminarobra()
		{
	$id=$this->input->post('elimina');
	$this->load->model('profesionista_model');
	$this->profesionista_model->eliminaobra($id);
	redirect(base_url()."index.php");
		}
	}
	

