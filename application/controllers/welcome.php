<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct() 
        { 
            parent::__construct();
            $this->load->helper('url'); 
            $this->load->model('menu_model');
        }
		
	public function index()
	{	
		
		$data['header'] = array('title' => 'Proveedores' , 'proveedores' => '' , 'presupuestos' => '' , 'profecionistas' => 'active' );//se inicializa el titulo de la pagina
		/*Habre el html y el body, y carga el header junto con el css de bootstrap*/
		$this->load->view('template/header',$data);

		$dato['profes']=$this->menu_model->get_anadidos();    
		$this->load->view('menu',$dato);

		/*Se cierra el body y el html, y se agregan los js de bootstrap*/
		$this->load->view('template/footer');

	}
	public function mostrar()
	{
			$nombre=$this->input->post('nombre');
			$data['registros']=$this->menu_model->get_consulta($nombre); 
		
		if($data['registros']==false)
		{
			$url= base_url();
			redirect($url);

		}else{
			
			$data['header'] = array('title' => 'Proveedores' , 'proveedores' => '' , 'presupuestos' => '' , 'profecionistas' => 'active' );//se inicializa el titulo de la pagina
		
		$this->load->view('template/header',$data);
		$this->load->view('profesionalistas',$data);
		$this->load->view('template/footer');
		}
	}


	}
	

