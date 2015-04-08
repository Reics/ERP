<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Productos extends CI_Controller {


	       public function __construct() 
        { 
            parent::__construct();
            $this->load->helper('url'); 
        }


	public function index()
	{
		$data['title'] = 'Productos';//se inicializa el titulo de la pagina

		/*Habre el html y el body, y carga el header junto con el css de bootstrap*/
		$this->load->view('template/header', $data);

		/*carga el contenido de la pagina*/
		$this->load->view('preciosUnitarios/productos/productos');

		/*Se cierra el body y el html, y se agregan los js de bootstrap*/
		$this->load->view('template/footer');
	}

	public function agregar()
	{
		$data['title'] = 'Agregar Productos';//se inicializa el titulo de la pagina

		/*Habre el html y el body, y carga el header junto con el css de bootstrap*/
		$this->load->view('template/header', $data);

		/*carga el contenido de la pagina*/
		$this->load->view('preciosUnitarios/productos/agregarProducto');

		/*Se cierra el body y el html, y se agregan los js de bootstrap*/
		$this->load->view('template/footer');
	}

	public function editar()
	{
		$data['title'] = 'Editar Productos';//se inicializa el titulo de la pagina

		/*Habre el html y el body, y carga el header junto con el css de bootstrap*/
		$this->load->view('template/header', $data);

		/*carga el contenido de la pagina*/
		$this->load->view('preciosUnitarios/productos/editarProducto');

		/*Se cierra el body y el html, y se agregan los js de bootstrap*/
		$this->load->view('template/footer');
	}
}	