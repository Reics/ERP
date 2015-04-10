<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Categorias_model extends CI_Model {
	function __construct() {
        parent::__construct();
    }

       
    public function get_all() {
        $query = $this->db->get('categorias');
        return ($query->num_rows() > 0) ? $query->result_array() : NULL;
    }

}