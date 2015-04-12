<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Listado extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->helper('url');
        
}
    
    public function index() {
       $data['header'] = array('title' => 'Proveedores' , 'proveedores' => '' , 'presupuestos' => '' , 'profecionistas' => 'active' );//se inicializa el titulo de la pagina
        /* Habre el html y el body, y carga el header junto con el css de bootstrap */
        $this->load->view('header', $data);
        //se carga en memoria
        $this->load->model('listado_p');
        //mostrarlo-devuelve datos
        $variable['registros'] = $this->listado_p->verReg();
        /* carga el contenido de la pagina Y ENVIARLA A LA VISTA */
        $this->load->view('profesionalistas', $variable);
        //$this->load->view('profesionalistas');
        /* Se cierra el body y el html, y se agregan los js de bootstrap */
        $this->load->view('footer');
    }
    public function verEspecialidad()
	{
	$data['header'] = array('title' => 'Proveedores' , 'proveedores' => '' , 'presupuestos' => '' , 'profecionistas' => 'active' );//se inicializa el titulo de la pagina
                /*Habre el html y el body, y carga el header junto con el css de bootstrap*/
                $this->load->view('header', $data);
                $id = $this->input->post('id');
                $this->load->model('listado_p');
                $variable['registros'] = $this->listado_p->verEsp($id);
                 $variable['id'] = $id;
		/*carga el contenido de la pagina*/
		$this->load->view('verespecialidad',$variable);
		/*Se cierra el body y el html, y se agregan los js de bootstrap*/
		$this->load->view('footer');
	}

        public function verCarrera()
	{
		$data['header'] = array('title' => 'Proveedores' , 'proveedores' => '' , 'presupuestos' => '' , 'profecionistas' => 'active' );//se inicializa el titulo de la pagina
                /*Habre el html y el body, y carga el header junto con el css de bootstrap*/
                $this->load->view('header', $data);
                $id = $this->input->post('id');
                $this->load->model('listado_p');
                $variable['registros'] = $this->listado_p->verCar($id);
                $variable['id'] = $id;
                $this->load->view('vercarrera',$variable); //bn
                $this->load->view('footer');
	}
        
        public function verObras()
	{
	$data['header'] = array('title' => 'Proveedores' , 'proveedores' => '' , 'presupuestos' => '' , 'profecionistas' => 'active' );//se inicializa el titulo de la pagina
                /*Habre el html y el body, y carga el header junto con el css de bootstrap*/
                $this->load->view('header', $data);
                $id = $this->input->post('id');
                $this->load->model('listado_p');
                $variable['registros'] = $this->listado_p->verObra($id);
                $variable['id'] = $id;
		/*carga el contenido de la pagina*/
		$this->load->view('verobra',$variable);
		/*Se cierra el body y el html, y se agregan los js de bootstrap*/
		$this->load->view('footer');
	}
        
        public function vermas(){
           $data['header'] = array('title' => 'Proveedores' , 'proveedores' => '' , 'presupuestos' => '' , 'profecionistas' => 'active' );//se inicializa el titulo de la pagina
        /* Habre el html y el body, y carga el header junto con el css de bootstrap */
        $this->load->view('header', $data);
        $id = $this->input->post('id');
        //se carga en memoria
        $this->load->model('mvermas');//mostrarlo-devuelve datos
        $variable['registros'] = $this->mvermas->vermasprof($id);
        /* carga el contenido de la pagina Y ENVIARLA A LA VISTA */
        /* carga el contenido de la pagina */
        $this->load->view('vermas', $variable);
        /* Se cierra el body y el html, y se agregan los js de bootstrap */
		$this->load->view('footer');
        }

 public function modifica(){
       $data['header'] = array('title' => 'Proveedores' , 'proveedores' => '' , 'presupuestos' => '' , 'profecionistas' => 'active' );//se inicializa el titulo de la pagina
        /* Habre el html y el body, y carga el header junto con el css de bootstrap */
        $this->load->view('header', $data);
        $id = $this->input->post('id');
        //se carga en memoria
        $this->load->model('mvermas');//mostrarlo-devuelve datos
        $variable['registros'] = $this->mvermas->vermasprof($id);
        /* carga el contenido de la pagina Y ENVIARLA A LA VISTA */
        /* carga el contenido de la pagina */
        $this->load->view('vermass', $variable);
        /* Se cierra el body y el html, y se agregan los js de bootstrap */
        $this->load->view('footer');
    }
    public function modificarya(){
        /* Habre el html y el body, y carga el header junto con el css de bootstrap */
      
        $id= $this->input->post('id');
       $nombre= $this->input->post('nombre');
        $apellido = $this->input->post("apellidos");
        $mail = $this->input->post("mail");
        $paginaWeb = $this->input->post("paginaWeb");
        $skype = $this->input->post("skype");
        $facebook = $this->input->post("facebook");
        $twitter = $this->input->post("twitter");
        $calle1 = $this->input->post("calle1");
        $municipio1 = $this->input->post("municipio1");
        $estado1 = $this->input->post("estado1");
        $numint1 = $this->input->post("numint1");
        $numext1 = $this->input->post("numext1");
        $telCasa = $this->input->post("telCasa");
        $movil1 = $this->input->post("movil1");
        $movil2 = $this->input->post("movil2");
        $telOficina = $this->input->post("telOficina");
        $calle2 = $this->input->post("calle2");
        $municipio2 = $this->input->post("municipio2");
        $estado2 = $this->input->post("estado2");
        $numint2 = $this->input->post("numint2");
        $numext2 = $this->input->post("numext2");
        //se carga en memoria
        $this->load->model('mvermas');//mostrarlo-devuelve datos
        $this->mvermas->cambiar($id,$nombre, $apellido,$mail,$paginaWeb,$skype,$facebook,$twitter,$calle1,$municipio1,$estado1,$numint1,$numext1,$telCasa,$movil1,$movil2,$telOficina,$calle2,$municipio2,$estado2,$numint2,$numext2);
        /* carga el contenido de la pagina Y ENVIARLA A LA VISTA */
        redirect(base_url()."index.php/welcome");
    }
      public function elimina(){

    $id= $this->input->post('id');
    $this->load->model('mvermas');//mostrarlo-devuelve datos
    $this->mvermas->eliminar($id);
    redirect(base_url()."index.php/welcome");
      }
}
