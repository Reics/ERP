<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Agregarcarrera extends CI_Controller {

	function __construct()
	{
	parent::__construct();
$this->load->helper('array');
$this->load->helper('url');

	}
	public function index()
	{

		$data['header'] = array('title' => 'Proveedores' , 'proveedores' => '' , 'presupuestos' => '' , 'profecionistas' => 'active' );//se inicializa el titulo de la pagina
		$id=$this->input->post('id');
		/*Habre el html y el body, y carga el header junto con el css de bootstrap*/
		$this->load->view('header', $data);
 		$this->load->model('mvermas');
        $variable['registros'] = $this->mvermas->vermasprof($id);
		/*carga el contenido de la pagina*/
		$this->load->view('agregarcarrera',$variable);

		/*Se cierra el body y el html, y se agregan los js de bootstrap*/
		$this->load->view('footer');
	
	}
	public function insertar()
	{
			$nombre=$this->input->post('nomobra');
			$especialidad=$this->input->post('espes');
			$cedula=$this->input->post('cedula');
			$grado=$this->input->post('grado');
			$anios=$this->input->post('anios');
			$id=$this->input->post('agregar');
			$this->load->model('profesionista_model');
			$this->profesionista_model->insertarcarrera($nombre,$grado,$especialidad,$anios,$cedula,$id);
			redirect(base_url()."index.php");
	} 

	public function eliminarcarrera()
	{
		$id=$this->input->post('elimina');
	$this->load->model('profesionista_model');
	$this->profesionista_model->eliminacarrera($id);
	redirect(base_url()."index.php");

	}
	}
	

