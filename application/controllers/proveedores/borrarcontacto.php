<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class borrarcontacto extends CI_Controller {


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
        $this->load->model('proovedores');
        $x['proovedores'] = $this->proovedores->get_contactos_mostrar();
        $this->load->view('proveedores/contactosmostrar',$x);

		/*Se cierra el body y el html, y se agregan los js de bootstrap*/
		$this->load->view('template/footer');
	}


	public function elegircontacto($id)
	{
		$data['header'] = array('title' => 'Listado' , 'proveedores' => 'active' , 'presupuestos' => '' , 'profecionistas' => '' );//se inicializa el titulo de la pagina

		/*Habre el html y el body, y carga el header junto con el css de bootstrap*/
		$this->load->view('template/header', $data);
		/*carga el contenido de la pagina*/

		$var['proo'] = $id;

		$this->load->model('contactos');
        $x['proo'] = $this->contactos->get_contactos();

		if($var['proo'] != null){
			$this->load->view('proveedores/elegircontacto',$var,$x);
			
        }
        else{
			$this->load->view('proveedores/nocontactos');
		}
		

		/*Se cierra el body y el html, y se agregan los js de bootstrap*/
		$this->load->view('template/footer');
	}

	public function borrar($id){
		$this->load->model('contactos');
		$this->contactos->delete_contacto($id);
        redirect('proveedores/borrarcontacto');
	}

	public function update($id){
		$data = $this->input->post();
		$nombre = $this->input->post('Nombre');

		$this->load->model('procon');
		$df = $this->procon->checarupdatec($nombre);

		if($df == null){
			$this->load->model('contactos');
		$this->contactos->update_contacto($data,$id);
		redirect('proveedores/borrarcontacto');
		}
		else{
			$data['header'] = array('title' => 'Listado' , 'proveedores' => 'active' , 'presupuestos' => '' , 'profecionistas' => '' );//se inicializa el titulo de la pagina

		/*Habre el html y el body, y carga el header junto con el css de bootstrap*/
		$this->load->view('template/header', $data);

		$this->load->view('proveedores/errorcontacto');

		$this->load->view('template/footer');

		}

		
	}

	public function aecontacto($id)
	{
		$data['header'] = array('title' => 'Listado' , 'proveedores' => 'active' , 'presupuestos' => '' , 'profecionistas' => '' );//se inicializa el titulo de la pagina

		/*Habre el html y el body, y carga el header junto con el css de bootstrap*/
		$this->load->view('template/header', $data);

		/*carga el contenido de la pagina*/
		$this->load->model('proovedores');
		$x['proovedores'] = $this->proovedores->editar_direccion($id);
		$this->load->view('proveedores/agregareditarcontacto 3',$x);

		/*Se cierra el body y el html, y se agregan los js de bootstrap*/
		$this->load->view('template/footer');
	}

	public function agregarcontacto()
	{
		$data['header'] = array('title' => 'Listado' , 'proveedores' => 'active' , 'presupuestos' => '' , 'profecionistas' => '' );//se inicializa el titulo de la pagina

		/*Habre el html y el body, y carga el header junto con el css de bootstrap*/
		$this->load->view('template/header', $data);

		/*carga el contenido de la pagina*/
		$this->load->view('proveedores/addcontacto');

		/*Se cierra el body y el html, y se agregan los js de bootstrap*/
		$this->load->view('template/footer');
	}

	public function addcontacto()
	{
		$nombre = $this->input->post('Nombre');
		$rfc = $this->input->post('RFC');
		$direccion = $this->input->post('Direccion');
		$estado = $this->input->post('Estado');
		$pais = $this->input->post('Pais');
		$numero = $this->input->post('Numero');
		$correo = $this->input->post('Correo');

		$this->load->model('procon');
		$df = $this->procon->checarupdatec($nombre);


		if($df == null){
		$this->load->model('contactos');
			$this->contactos->insertar_contacto($nombre,$rfc,$direccion,$estado,$pais,$numero,$correo);
			redirect('proveedores/borrarcontacto');
		}
		else{
			$data['header'] = array('title' => 'Listado' , 'proveedores' => 'active' , 'presupuestos' => '' , 'profecionistas' => '' );//se inicializa el titulo de la pagina

		/*Habre el html y el body, y carga el header junto con el css de bootstrap*/
		$this->load->view('template/header', $data);

		$this->load->view('proveedores/errorcontacto');

		$this->load->view('template/footer');

		}
	}
}
