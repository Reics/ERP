<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class procon extends CI_Model {
    function contactos() {
        $this->db->select("idContacto as idc,Nombre as Noc");
        $this->db->from("contactos");
        $query = $this->db->get();
        return ($query->num_rows() > 0) ? $query->result_array() : "";
    }

    function proveedores() {
        $this->db->select("idProovedor as idp,Nombre as Nop");
        $this->db->from("proovedores");
        $query = $this->db->get();
        return ($query->num_rows() > 0) ? $query->result_array() : "";
    }

    function insertar($a,$b){
        $data = array("idProovedor" => $a,"idContacto" => $b);

        $this->db->insert("proovedorescontactos",$data);
    }

    function proovedorescontactos($pro,$con) {
        $this->db->select("*");
        $this->db->from("proovedorescontactos");
        $this->db->where("idProovedor",$pro);
        $this->db->where("idContacto",$con);
        
        $query = $this->db->get();
        return ($query->num_rows() > 0) ? $query->result_array() : "";
    }

    function checarupdate($nombre) {
        $this->db->select("*");
        $this->db->from("proovedores");
        $this->db->where("Nombre",$nombre);
        
        $query = $this->db->get();
        return ($query->num_rows() > 0) ? $query->result_array() : "";
    }

    function checarupdateid($proovedor,$nombre) {
        $this->db->select("*");
        $this->db->from("proovedores");
        $this->db->where("Nombre",$nombre);
         $this->db->where("idProovedor",$proovedor);
        
        $query = $this->db->get();
        return ($query->num_rows() > 0) ? $query->result_array() : "";
    }
    function checarupdateidc($contacto,$nombre) {
        $this->db->select("*");
        $this->db->from("contactos");
        $this->db->where("Nombre",$nombre);
         $this->db->where("idContacto",$contacto);
        
        $query = $this->db->get();
        return ($query->num_rows() > 0) ? $query->result_array() : "";
    }

    function checarupdatec($nombre) {
        $this->db->select("*");
        $this->db->from("contactos");
        $this->db->where("Nombre",$nombre);
        
        $query = $this->db->get();
        return ($query->num_rows() > 0) ? $query->result_array() : "";
    }


}