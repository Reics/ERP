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

	public function borrarcontacto()
	{
		$data['header'] = array('title' => 'Listado' , 'proveedores' => 'active' , 'presupuestos' => '' , 'profecionistas' => '' );//se inicializa el titulo de la pagina

		/*Habre el html y el body, y carga el header junto con el css de bootstrap*/
		$this->load->view('template/header', $data);

		/*carga el contenido de la pagina*/
        $this->load->model('proovedores');
        $x['proovedores'] = $this->proovedores->get_contactos_mostrar();
        $this->load->view('proveedores/contactosmostrar',$x);

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
		$this->load->model('proovedores');
		$x['proovedores'] = $this->proovedores->get_proovedores_id($id);
		$this->load->view('proveedores/agregarproovedor',$x);

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

		if($x['proovedores'] != null){
			$this->load->view('proveedores/contactos',$x);
			
        }
        else{
			$this->load->view('proveedores/nocontactos');
		}
		

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

	public function elegircontactovista($id)
	{
		$data['header'] = array('title' => 'Listado' , 'proveedores' => 'active' , 'presupuestos' => '' , 'profecionistas' => '' );//se inicializa el titulo de la pagina

		/*Habre el html y el body, y carga el header junto con el css de bootstrap*/
		$this->load->view('template/header', $data);

		$this->load->model('contactos');
		$x['hola'] = $this->contactos->get_contactos();
		/*carga el contenido de la pagina*/
		$this->load->view('proveedores/agregarcontacto 2',$x);

		/*Se cierra el body y el html, y se agregan los js de bootstrap*/
		$this->load->view('template/footer');
	}

	public function borrar($id){
		$this->load->model('proovedores');
		$this->proovedores->delete_proovedor($id);
        redirect('proveedores/listado');
	}

	public function aecontacto($id)
	{
		$data['header'] = array('title' => 'Listado' , 'proveedores' => 'active' , 'presupuestos' => '' , 'profecionistas' => '' );//se inicializa el titulo de la pagina

		/*Habre el html y el body, y carga el header junto con el css de bootstrap*/
		$this->load->view('template/header', $data);

		/*carga el contenido de la pagina*/
		$this->load->model('proovedores');
		$x['proovedores'] = $this->proovedores->editar_direccion($id);
		$this->load->view('proveedores/agregareditarcontacto',$x);

		/*Se cierra el body y el html, y se agregan los js de bootstrap*/
		$this->load->view('template/footer');
	}

	public function update($id){
		$data = $this->input->post();
		$nombre = $this->input->post("Nombre");

		$this->load->model('procon');
		$df = $this->procon->checarupdatec($nombre);

		if($df == null){
		$this->load->model('proovedores');
		$this->proovedores->update_contacto($data,$id);
		redirect('proveedores/listado/');
		}
		else{

			$data['header'] = array('title' => 'Listado' , 'proveedores' => 'active' , 'presupuestos' => '' , 'profecionistas' => '' );//se inicializa el titulo de la pagina

		/*Habre el html y el body, y carga el header junto con el css de bootstrap*/
		$this->load->view('template/header', $data);

		$this->load->view('proveedores/errorcontacto');

		$this->load->view('template/footer');

		}
	}

	public function insert(){
		$data = $this->input->post();
		$nombre = $this->input->post('Nombre');

		$this->load->model('procon');
		$df = $this->procon->checarupdate($nombre);
		
		

		if($df == null){
			$this->load->model('proovedores');
		$this->proovedores->insert_proveedor($data);
		redirect('proveedores/listado');
		}
		else{
			$data['header'] = array('title' => 'Listado' , 'proveedores' => 'active' , 'presupuestos' => '' , 'profecionistas' => '' );//se inicializa el titulo de la pagina

		/*Habre el html y el body, y carga el header junto con el css de bootstrap*/
		$this->load->view('template/header', $data);

		$this->load->view('proveedores/errorproovedor');

		$this->load->view('template/footer');

		}
	}

	public function update_proveedor($id){
		$nombre = $this->input->post('Nombre');
		$data = $this->input->post();

		
		$this->load->model('procon');
		$df = $this->procon->checarupdate($nombre);

		if($df == null){
			$this->load->model('proovedores');
		$this->proovedores->update_proveedor($data,$id);
		redirect('proveedores/listado');
		}
		else{
			$data['header'] = array('title' => 'Listado' , 'proveedores' => 'active' , 'presupuestos' => '' , 'profecionistas' => '' );//se inicializa el titulo de la pagina

		/*Habre el html y el body, y carga el header junto con el css de bootstrap*/
		$this->load->view('template/header', $data);

		$this->load->view('proveedores/errorproovedor');

		$this->load->view('template/footer');

		}
	}

	public function addcontacto($id){
		$data = $this->input->post();

	/*
		$this->load->model('proovedores');
		$con = $this->proovedores->suma_contactos();
*/
		$this->load->model('proovedores');
		$this->proovedores->add_contacto($data,$id/*,$con*/);

		redirect('proveedores/listado');
	}
}
