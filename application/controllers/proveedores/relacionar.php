<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class relacionar extends CI_Controller {


	       public function __construct() 
        { 
            parent::__construct();
            $this->load->helper('url'); 
        }

	public function index()
	{		$data['header'] = array('title' => 'Listado' , 'proveedores' => 'active' , 'presupuestos' => '' , 'profecionistas' => '' );//se inicializa el titulo de la pagina

		/*Habre el html y el body, y carga el header junto con el css de bootstrap*/
		$this->load->view('template/header', $data);

		/*carga el contenido de la pagina*/
		$this->load->database();
        $this->load->model('procon');
        $x['procon2'] = $this->procon->contactos();
        $y['procon1'] = $this->procon->proveedores();

        $this->load->view('proveedores/procon1',$y);
        $this->load->view('proveedores/procon2',$x);

		/*Se cierra el body y el html, y se agregan los js de bootstrap*/
		$this->load->view('template/footer');
	}

	public function insertar(){
		$pro = $this->input->post('idProovedor');
		$con = $this->input->post('idContacto');


		$this->load->model('procon');


		$data = $this->procon->proovedorescontactos($pro,$con);

		if($data == null){
			$this->procon->insertar($pro,$con);
			redirect('menu/proveedores');
		}
		else{
			$data['header'] = array('title' => 'Listado' , 'proveedores' => 'active' , 'presupuestos' => '' , 'profecionistas' => '' );//se inicializa el titulo de la pagina

		/*Habre el html y el body, y carga el header junto con el css de bootstrap*/
		$this->load->view('template/header', $data);

		$this->load->view('proveedores/errorconpro');

		$this->load->view('template/footer');

		}

		

	}
}
