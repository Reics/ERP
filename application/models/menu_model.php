<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class materias_model extends CI_Model {

    function get_anadidos() {
      $query=$this->db->query('SELECT nombre,profesion from profesionista');
        return ($query->num_rows() > 0) ? $query->result_array() : "";
    }
    
    
}

