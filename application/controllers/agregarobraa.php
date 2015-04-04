<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Agregarobraa extends CI_Controller {

	
	public function index()
	{

		$data['title'] = 'Nueva Obra';//se inicializa el titulo de la pagina

		/*Habre el html y el body, y carga el header junto con el css de bootstrap*/
		$this->load->view('header', $data);

		/*carga el contenido de la pagina*/
		$this->load->view('agregarobra1');

		/*Se cierra el body y el html, y se agregan los js de bootstrap*/
		$this->load->view('footer');
	
	}
	}
	

