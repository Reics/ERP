<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Listado extends CI_Controller {


	       public function __construct() 
        { 
            parent::__construct();
            $this->load->helper('url'); 
        }


	public function index()
	{
		$data['header'] = array('title' => 'Listado' , 'proveedores' => 'active' , 'presupuestos' => '' , 'profecionistas' => '' );//se inicializa el titulo de la pagina

		/*Habre el html y el body, y carga el header junto con el css de bootstrap*/
		$this->load->view('template/header', $data);

		/*carga el contenido de la pagina*/
		$this->load->database();
        $this->load->model('proovedores');
        $x['proovedores'] = $this->proovedores->get_proovedores();
		$this->load->view('proveedores/listado',$x);

		/*Se cierra el body y el html, y se agregan los js de bootstrap*/
		$this->load->view('template/footer');
	}

	public function datos($id){
		$data['header'] = array('title' => 'Listado' , 'proveedores' => 'active' , 'presupuestos' => '' , 'profecionistas' => '' );//se inicializa el titulo de la pagina

		/*Habre el html y el body, y carga el header junto con el css de bootstrap*/
		$this->load->view('template/header', $data);

		/*carga el contenido de la pagina*/
		$this->load->model('proovedores');
		$x['proovedores'] = $this->proovedores->get_all($id);
		$this->load->view('proveedores/datos',$x);

		/*Se cierra el body y el html, y se agregan los js de bootstrap*/
		$this->load->view('template/footer');
	}

	public function contacto($id)
	{
		$data['header'] = array('title' => 'Listado' , 'proveedores' => 'active' , 'presupuestos' => '' , 'profecionistas' => '' );//se inicializa el titulo de la pagina

		/*Habre el html y el body, y carga el header junto con el css de bootstrap*/
		$this->load->view('template/header', $data);

		/*carga el contenido de la pagina*/

		$this->load->view('proveedores/contacto');

		/*Se cierra el body y el html, y se agregan los js de bootstrap*/
		$this->load->view('template/footer');
	}

	public function contactos($id)
	{
		$data['header'] = array('title' => 'Listado' , 'proveedores' => 'active' , 'presupuestos' => '' , 'profecionistas' => '' );//se inicializa el titulo de la pagina

		/*Habre el html y el body, y carga el header junto con el css de bootstrap*/
		$this->load->view('template/header', $data);

		/*carga el contenido de la pagina*/
		$this->load->model('proovedores');
		$x['proovedores'] = $this->proovedores->get_contactos($id);
		$this->load->view('proveedores/contactos',$x);

		/*Se cierra el body y el html, y se agregan los js de bootstrap*/
		$this->load->view('template/footer');
	}

	public function mapa($id)
	{
		$data['header'] = array('title' => 'Listado' , 'proveedores' => 'active' , 'presupuestos' => '' , 'profecionistas' => '' );//se inicializa el titulo de la pagina

		/*Habre el html y el body, y carga el header junto con el css de bootstrap*/
		$this->load->view('template/header', $data);

		/*carga el contenido de la pagina*/
		/*carga el contenido de la pagina*/
		$this->load->model('proovedores');
		$x['proovedores'] = $this->proovedores->get_direccion($id);
		$this->load->view('proveedores/mapa',$x);

		/*Se cierra el body y el html, y se agregan los js de bootstrap*/
		$this->load->view('template/footer');
	}

	public function borrar($id){
		$this->load->model('proovedores');
		$this->proovedores->delete_proovedor($id);
        redirect('proveedores/listado');
	}

	public function aecontacto()
	{
		$data['header'] = array('title' => 'Listado' , 'proveedores' => 'active' , 'presupuestos' => '' , 'profecionistas' => '' );//se inicializa el titulo de la pagina

		/*Habre el html y el body, y carga el header junto con el css de bootstrap*/
		$this->load->view('template/header', $data);

		/*carga el contenido de la pagina*/
		$this->load->view('proveedores/agregareditarcontacto');

		/*Se cierra el body y el html, y se agregan los js de bootstrap*/
		$this->load->view('template/footer');
	}
}
