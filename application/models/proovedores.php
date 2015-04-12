<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Proovedores extends CI_Model {
    function get_proovedores() {
        $this->db->select("*");
        $this->db->from("proovedores");
        $query = $this->db->get();
        return ($query->num_rows() > 0) ? $query->result_array() : "";
    }

    function get_contactos_mostrar() {
        $this->db->select("*");
        $this->db->from("contactos");
        $query = $this->db->get();
        return ($query->num_rows() > 0) ? $query->result_array() : "";
    }

    function get_proovedores_id($id) {
        $this->db->select("*");
        $this->db->from("proovedores");
        $this->db->where('idProovedor', $id);

        $query = $this->db->get();
        return ($query->num_rows() > 0) ? $query->result_array() : "";
    }

    public function delete_proovedor($id){
        $this->db->where('idProovedor', $id);
        $this->db->delete('proovedores');

        $this->db->where('idProovedor', $id);
        $this->db->delete('proovedorescontactos');
    } 

    function get_all($id) {
        $this->db->select("*");
        $this->db->from("proovedores");
        $this->db->where('idProovedor', $id);

        $query = $this->db->get();
        return ($query->num_rows() > 0) ? $query->result_array() : "";
    }

    function get_contactos($id) {

        $this->db->select("proovedores.idProovedor as idp,contactos.Nombre as No,contactos.idContacto idc,contactos.Direccion as Dir,
            contactos.RFC RFCC,contactos.Pais Pai,contactos.Estado as Est,contactos.Numero as Numero, contactos.Correo as Correo");
        $this->db->from("proovedores");
        $this->db->join("proovedorescontactos","proovedorescontactos.idProovedor=proovedores.idProovedor","inner");
        $this->db->join("contactos","contactos.idContacto=proovedorescontactos.idContacto","inner");
        $this->db->where('proovedorescontactos.idProovedor', $id);

        $query = $this->db->get();
        return ($query->num_rows() > 0) ? $query->result_array() : "";
    }

    function get_direccion($id) {
        $this->db->select("*");
        $this->db->from("proovedores");
        $this->db->where('idProovedor', $id);

        $query = $this->db->get();
        return ($query->num_rows() > 0) ? $query->result_array() : "";
    }

    function editar_direccion($id) {
        $this->db->select("*");
        $this->db->from("contactos");
        $this->db->where('idContacto', $id);

        $query = $this->db->get();
        return ($query->num_rows() > 0) ? $query->result_array() : "";
    }

    public function update_contacto($data,$id) {
        $this->db->where('idContacto', $id);
        $this->db->update('contactos', $data);
    }

    public function insert_proveedor($data) {
        $this->db->insert('proovedores', $data);
    }

    public function update_proveedor($data,$id){
        $this->db->where('idProovedor',$id);
        $this->db->update('proovedores',$data);
    }

    public function add_contacto($data,$id/*,$con*/){
        $this->db->insert('contactos', $data);

        $array = array('idProovedor' => $id["idProovedor"], 'idContacto' => 2);

        $this->db->set($array);
        $this->db->insert('contactos');

    }
}

/*$this->db->select("idProovedor,proovedores.Nombre,Provincia,categorias.Nombre");
$this->db->join("proovedores-categorias","proovedores-categorias.idProovedor=proovedores.idProovedor","inner");
        $this->db->join("categorias","categorias.idCategoria=proovedores-categorias.idCategoria","inner");*/