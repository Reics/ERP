<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Productos extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('preciosUnitarios/productos_model');
    }

    public function index() {
        $data['header'] = array('title' => 'Productos', 'proveedores' => '', 'presupuestos' => 'active', 'profecionistas' => ''); //se inicializa el titulo de la pagina

        $tabla = array(
            'producto' => $this->productos_model->get_all()
        );

        /* Habre el html y el body, y carga el header junto con el css de bootstrap */
        $this->load->view('template/header', $data);

        /* carga el contenido de la pagina */
        $this->load->view('preciosUnitarios/productos/productos', $tabla);

        /* Se cierra el body y el html, y se agregan los js de bootstrap */
        $this->load->view('template/footer');
    }

    public function set_form() {
        $data['header'] = array('title' => 'Agregar Productos', 'proveedores' => '', 'presupuestos' => 'active', 'profecionistas' => ''); //se inicializa el titulo de la pagina

        /* Habre el html y el body, y carga el header junto con el css de bootstrap */
        $this->load->view('template/header', $data);

        /* carga el contenido de la pagina */
        $this->load->view('preciosUnitarios/productos/agregarProducto');

        /* Se cierra el body y el html, y se agregan los js de bootstrap */
        $this->load->view('template/footer');
    }
    
    public function set() {
        $data = $this->input->post();
        $this->productos_model->set($data);
        redirect('preciosUnitarios/productos');
    }

    public function delete($id) {
        $this->productos_model->delete($id);
        redirect('preciosUnitarios/productos');
    }

    public function update_form($id) {
        $get_data = $this->productos_model->get_by_id($id);
        if ($get_data != NULL) {
                $nombre = $get_data["nombre"];
                $unidadMedida = $get_data["unidadMedida"];
                $precioUnitario = $get_data["precioUnitario"];
                $idCategoria = $get_data["idCategoria"];
            
            $data = array (
                'idPreciosUnitarios' => $id,
                'nombre' => $nombre,
                'unidadMedida' => $unidadMedida,
                'precioUnitario' => $precioUnitario,
                'idCategoria' => $idCategoria
            );

        } else {
            $data = '';
        }
        $head['header'] = array('title' => 'Editar Productos', 'proveedores' => '', 'presupuestos' => 'active', 'profecionistas' => ''); //se inicializa el titulo de la pagina

        //Habre el html y el body, y carga el header junto con el css de bootstrap */
        $this->load->view('template/header', $head);

        /* carga el contenido de la pagina */
        $this->load->view('preciosUnitarios/productos/editarProducto', $data);

        /* Se cierra el body y el html, y se agregan los js de bootstrap */
        $this->load->view('template/footer');
        
    }
    public function update() {
        $data = $this->input->post();
        $this->productos_model->update($data);
        redirect('preciosUnitarios/productos');
    }

}





















