<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contacto extends CI_Controller {


	       public function __construct() 
        { 
            parent::__construct();
            $this->load->helper('url');            
        }


	public function index()
	{
		$data['header'] = array('title' => 'Contacto' , 'proveedores' => 'active' , 'presupuestos' => '' , 'profecionistas' => '' );//se inicializa el titulo de la pagina
		
		/*Habre el html y el body, y carga el header junto con el css de bootstrap*/
		$this->load->view('template/header', $data);

		/*carga el contenido de la pagina*/
		$this->load->view('proveedores/contacto');

		/*Se cierra el body y el html, y se agregan los js de bootstrap*/
		$this->load->view('template/footer');
	}

		public function agregar()
	{
		$data['header'] = array('title' => 'Categoria' , 'proveedores' => 'active' , 'presupuestos' => '' , 'profecionistas' => '' );//se inicializa el titulo de la pagina

		/*Habre el html y el body, y carga el header junto con el css de bootstrap*/
		$this->load->view('template/header', $data);

		/*carga el contenido de la pagina*/
		$this->load->view('proveedores/agregareditarcontacto');

		/*Se cierra el body y el html, y se agregan los js de bootstrap*/
		$this->load->view('template/footer');
	}

		public function editar()
	{
		$data['header'] = array('title' => 'Categoria' , 'proveedores' => 'active' , 'presupuestos' => '' , 'profecionistas' => '' );//se inicializa el titulo de la pagina

		/*Habre el html y el body, y carga el header junto con el css de bootstrap*/
		$this->load->view('template/header', $data);

		/*carga el contenido de la pagina*/
		$this->load->view('proveedores/agregareditarcontacto');

		/*Se cierra el body y el html, y se agregan los js de bootstrap*/
		$this->load->view('template/footer');
	}

}
