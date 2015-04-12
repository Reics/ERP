<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Presupuestos extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('preciosUnitarios/presupuestos_model');
        $this->load->model('preciosUnitarios/productos_model');
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

    public function set_form() {
        $data['header'] = array('title' => 'Agregar Presupuesto', 'proveedores' => '', 'presupuestos' => 'active', 'profecionistas' => ''); //se inicializa el titulo de la pagina

        /* Habre el html y el body, y carga el header junto con el css de bootstrap */
        $this->load->view('template/header', $data);

        /* carga el contenido de la pagina */
        $this->load->view('preciosUnitarios/presupuestos/agregarPresupuesto');

        /* Se cierra el body y el html, y se agregan los js de bootstrap */
        $this->load->view('template/footer');
    }
    
    public function set() {
        $data = $this->input->post();
        $this->presupuestos_model->set($data);
        redirect('preciosUnitarios/presupuestos');
    }
    
       public function delete($id) {
        $this->presupuestos_model->delete($id);
        redirect('preciosUnitarios/presupuestos');
    }

    public function update_form($id) {
        $get_data = $this->presupuestos_model->get_by_id($id);
        if ($get_data != NULL) {
                $contratista= $get_data["contratista"];
                $obra = $get_data["obra"];
                $ubicacion = $get_data["ubicacion"];
                $analisis = $get_data["analisis"];
                $fecha_inicio = $get_data["fecha_inicio"];
                $fecha_fin = $get_data["fecha_fin"];
                $unidad = $get_data["unidad"];
                $rendimiento = $get_data["rendimiento"];
                $partida = $get_data["partida"];
            $data = array (
                'idPresupuesto' => $id,
                'contratista' => $contratista,
                'obra' => $obra,
                'ubicacion' => $ubicacion,
                'analisis' => $analisis,
                'fecha_inicio' => $fecha_inicio,
                'fecha_fin' => $fecha_fin,
                'unidad' => $unidad,
                'rendimiento' => $rendimiento,
                'partida' => $partida
            );

        } else {
            $data = '';
        }
        $head['header'] = array('title' => 'Editar Presupuesto', 'proveedores' => '', 'presupuestos' => 'active', 'profecionistas' => ''); //se inicializa el titulo de la pagina

        /* Habre el html y el body, y carga el header junto con el css de bootstrap */
        $this->load->view('template/header', $head);

        /* carga el contenido de la pagina */
        $this->load->view('preciosUnitarios/presupuestos/editarPresupuesto', $data);

        /* Se cierra el body y el html, y se agregan los js de bootstrap */
        $this->load->view('template/footer');
    }

    public function update() {
        $data = $this->input->post();
        $this->presupuestos_model->update($data);
        redirect('preciosUnitarios/presupuestos');
    }
    public function indexproduct($id) {
        
        $head['header'] = array('title' => 'Presupuestos', 'proveedores' => '', 'presupuestos' => 'active', 'profecionistas' => ''); //se inicializa el titulo de la pagina

        $tabla = array(
            'presupuesto' => $this->presupuestos_model->get_product($id)
        );
        
        $this->load->view('template/header', $head);

        $this->load->view('preciosUnitarios/presupuestos/presupuestoProductos', $tabla);

        $this->load->view('template/footer');
    }
}
