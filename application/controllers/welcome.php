<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	
	public function index()
	{
		
		/*Habre el html y el body, y carga el header junto con el css de bootstrap*/
		$this->load->view('header');

		/*carga el contenido de la pagina*/
		$this->load->view('menu');

		/*Se cierra el body y el html, y se agregan los js de bootstrap*/
		$this->load->view('footer');
	
	}
	}
	

