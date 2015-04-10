<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class proovedores extends CI_Model {
    function proovedor() {
        $this->db->select("proovedores.idProovedor,proovedores.Nombre as proovedor,proovedores.Provincia,categorias.Nombre");
        $this->db->from("proovedores");
		$this->db->join("proovedorescategorias","proovedorescategorias.idProovedor=proovedores.idProovedor","inner");
        $this->db->join("categorias","categorias.idCategoria=proovedorescategorias.idCategoria","inner");
        
        $query = $this->db->get();
        return ($query->num_rows() > 0) ? $query->result_array() : "";
    }
}

/*$this->db->select("idProovedor,proovedores.Nombre,Provincia,categorias.Nombre");
$this->db->join("proovedores-categorias","proovedores-categorias.idProovedor=proovedores.idProovedor","inner");
        $this->db->join("categorias","categorias.idCategoria=proovedores-categorias.idCategoria","inner");*/