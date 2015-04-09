<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Menu extends CI_Controller {


	public function __construct() 
    { 
        parent::__construct();
        $this->load->helper('url'); 
    }

    public function index()
	{
		//shalalalala n.n' 
	}

	public function proveedores()
	{
		$data['header'] = array('title' => 'Proveedores' , 'proveedores' => 'active' , 'presupuestos' => '' , 'profecionistas' => '' );//se inicializa el titulo de la pagina

		/*Habre el html y el body, y carga el header junto con el css de bootstrap*/
		$this->load->view('template/header', $data);

		/*carga el contenido de la pagina*/
		$this->load->view('proveedores/menu');

		/*Se cierra el body y el html, y se agregan los js de bootstrap*/
		$this->load->view('template/footer');
	}

		public function preciosUnitarios()
	{
		$data['header'] = array('title' => 'Presupuestos' , 'proveedores' => '' , 'presupuestos' => 'active' , 'profecionistas' => '' );//se inicializa el titulo de la pagina
		/*Habre el html y el body, y carga el header junto con el css de bootstrap*/
		$this->load->view('template/header', $data);

		/*carga el contenido de la pagina*/
		$this->load->view('preciosUnitarios/menu');

		/*Se cierra el body y el html, y se agregan los js de bootstrap*/
		$this->load->view('template/footer');
	}

		public function profesionistas()
	{
		$data['header'] = array('title' => 'Profesionistas' , 'proveedores' => '' , 'presupuestos' => '' , 'profecionistas' => 'active' );//se inicializa el titulo de la pagina

		/*Habre el html y el body, y carga el header junto con el css de bootstrap*/
		$this->load->view('template/header', $data);

		/*carga el contenido de la pagina*/
		//$this->load->view('proveedores/menu');

		/*Se cierra el body y el html, y se agregan los js de bootstrap*/
		$this->load->view('template/footer');
	}


}
