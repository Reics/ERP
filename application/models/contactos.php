<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class contactos extends CI_Model {
	function mapa($id) {
        $this->db->select("Direccion,Provincia,codigoPostal,Estado");
        $this->db->from("contactos");
        $this->db->where("idContacto", $id);
        $query = $this->db->get();
        return ($query->num_rows() > 0) ? $query->result_array() : "";
    }

    function contacto($id) {
        $this->db->select("idContacto,Nombre,Direccion,RFC,Telefono1,Provincia,Correo1");
        $this->db->from("contactos");
        $this->db->join("localizacion", "localizacion.idLocalizacion = contactos.idLocalizacion", "inner");
        $this->db->join("numeros", "numeros.idNumero = localizacion.idNumero", "inner");
        $this->db->join("correos", "correos.idCorreo = localizacion.idCorreo", "inner");
        $this->db->where("idContacto", $id);
        $query = $this->db->get();
        return ($query->num_rows() > 0) ? $query->result_array() : "";
    }
}