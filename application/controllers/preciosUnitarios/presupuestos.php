<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Presupuestos extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('preciosUnitarios/presupuestos_model');
    }

    public function index() {
        $data['header'] = array('title' => 'Presupuestos', 'proveedores' => '', 'presupuestos' => 'active', 'profecionistas' => ''); //se inicializa el titulo de la pagina

        $tabla = array(
            'presupuesto' => $this->presupuestos_model->get_all()
        );

        /* Habre el html y el body, y carga el header junto con el css de bootstrap */
        $this->load->view('template/header', $data);

        /* carga el contenido de la pagina */
        $this->load->view('preciosUnitarios/presupuestos/presupuestos', $tabla);

        /* Se cierra el body y el html, y se agregan los js de bootstrap */
        $this->load->view('template/footer');
    }

    public function agregar() {
        $data['header'] = array('title' => 'Agregar Presupuesto', 'proveedores' => '', 'presupuestos' => 'active', 'profecionistas' => ''); //se inicializa el titulo de la pagina

        /* Habre el html y el body, y carga el header junto con el css de bootstrap */
        $this->load->view('template/header', $data);

        /* carga el contenido de la pagina */
        $this->load->view('preciosUnitarios/presupuestos/agregarPresupuesto');

        /* Se cierra el body y el html, y se agregan los js de bootstrap */
        $this->load->view('template/footer');
    }

    public function editar() {
        $data['header'] = array('title' => 'Editar Presupuesto', 'proveedores' => '', 'presupuestos' => 'active', 'profecionistas' => ''); //se inicializa el titulo de la pagina

        /* Habre el html y el body, y carga el header junto con el css de bootstrap */
        $this->load->view('template/header', $data);

        /* carga el contenido de la pagina */
        $this->load->view('preciosUnitarios/presupuestos/editarPresupuesto');

        /* Se cierra el body y el html, y se agregan los js de bootstrap */
        $this->load->view('template/footer');
    }

    public function agregarProducto() {
        $data['header'] = array('title' => 'Agregar Producto Presupuesto', 'proveedores' => '', 'presupuestos' => 'active', 'profecionistas' => ''); //se inicializa el titulo de la pagina

        /* Habre el html y el body, y carga el header junto con el css de bootstrap */
        $this->load->view('template/header', $data);

        /* carga el contenido de la pagina */
        $this->load->view('preciosUnitarios/presupuestos/agregarProductoPresupuesto');

        /* Se cierra el body y el html, y se agregan los js de bootstrap */
        $this->load->view('template/footer');
    }

    public function editarProducto() {
        $data['header'] = array('title' => 'Editar Producto Presupuesto', 'proveedores' => '', 'presupuestos' => 'active', 'profecionistas' => ''); //se inicializa el titulo de la pagina

        /* Habre el html y el body, y carga el header junto con el css de bootstrap */
        $this->load->view('template/header', $data);

        /* carga el contenido de la pagina */
        $this->load->view('preciosUnitarios/presupuestos/editarProductoPresupuesto');

        /* Se cierra el body y el html, y se agregan los js de bootstrap */
        $this->load->view('template/footer');
    }

}
