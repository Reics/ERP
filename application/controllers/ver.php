<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Ver extends CI_Controller {

    public function index() {

     $data['header'] = array('title' => 'Proveedores' , 'proveedores' => '' , 'presupuestos' => '' , 'profecionistas' => 'active' );//se inicializa el titulo de la pagina
        /* Habre el html y el body, y carga el header junto con el css de bootstrap */
        $this->load->view('header', $data);
        /* Se cierra el body y el html, y se agregan los js de bootstrap */
        $this->load->view('footer');
    }

    public function vermas() {
      $data['header'] = array('title' => 'Proveedores' , 'proveedores' => '' , 'presupuestos' => '' , 'profecionistas' => 'active' );//se inicializa el titulo de la pagina
        /* Habre el html y el body, y carga el header junto con el css de bootstrap */
        $this->load->view('header', $data);
        $id = $this->input->post('id');
        //se carga en memoria
        $this->load->model('mvermas');
        //mostrarlo-devuelve datos
        
        $variable['registros'] = $this->mvermas->vermasprof($id);
        /* carga el contenido de la pagina Y ENVIARLA A LA VISTA */
        /* carga el contenido de la pagina */
        $this->load->view('vermas', $variable);
        /* Se cierra el body y el html, y se agregan los js de bootstrap */
        $this->load->view('footer');
    }

    public function buscarPorProfesion() {
        $data['header'] = array('title' => 'Proveedores' , 'proveedores' => '' , 'presupuestos' => '' , 'profecionistas' => 'active' );//se inicializa el titulo de la pagina
        $profesion = $this->input->post('profesion');
        $this->load->model('filtros');
         $variable['registros'] = $this->filtros->filtrar_profesion($profesion);
        /* carga el contenido de la pagina Y ENVIARLA A LA VISTA */
        if( $variable['registros'] ==false)
        {
            redirect(base_url()."index.php/Listado");
        }else
        {
        $this->load->view('header', $data);
        $this->load->view('profesionalistas', $variable);
        //$this->load->view('profesionalistas');
        /* Se cierra el body y el html, y se agregan los js de bootstrap */
        $this->load->view('footer');
    }
    }

    public function buscarPorEspecialidad() {
        $data['header'] = array('title' => 'Proveedores' , 'proveedores' => '' , 'presupuestos' => '' , 'profecionistas' => 'active' );//se inicializa el titulo de la pagina
         $especialidad = $this->input->post('especialidad');
        $this->load->model('filtros');
         $variable['registros'] = $this->filtros->filtrar_especialidad($especialidad);
        /* carga el contenido de la pagina Y ENVIARLA A LA VISTA */
        if( $variable['registros'] ==false)
        {
            redirect(base_url()."index.php/Listado");
        }else
        {
        $this->load->view('header', $data);
        $this->load->view('profesionalistas', $variable);
        //$this->load->view('profesionalistas');
        /* Se cierra el body y el html, y se agregan los js de bootstrap */
        $this->load->view('footer');
    }}

    public function buscarPorCarrera() {
        $data['header'] = array('title' => 'Proveedores' , 'proveedores' => '' , 'presupuestos' => '' , 'profecionistas' => 'active' );//se inicializa el titulo de la pagina
        $especialidad = $this->input->post('carrera');
        $this->load->model('filtros');
         $variable['registros'] = $this->filtros->filtrar_carrera($especialidad);
       
        if( $variable['registros'] ==false)
        {
            redirect(base_url()."index.php/Listado");
        }else
        {
        $this->load->view('header', $data);
        $this->load->view('profesionalistas', $variable);
        //$this->load->view('profesionalistas');
       
        $this->load->view('footer');
    }}
    
    public function welcome() {
       $data['header'] = array('title' => 'Proveedores' , 'proveedores' => '' , 'presupuestos' => '' , 'profecionistas' => 'active' );//se inicializa el titulo de la pagina
        $this->load->view('header',$data);

      
        $this->load->view('menu');

      
        $this->load->view('footer');
    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */