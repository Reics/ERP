<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Productos extends CI_Model {
    function __construct() {
        parent::__construct();
    }

    public function set($data) {
        $this->db->insert('preciosunitarios', $data);
    }
    public function update($data) {
        $this->db->where('idPreciosUnitarios', $id);
        $this->db->update('preciosunitarios', $data); 
    }
    public function delete($id) {
        $this->db->where('idPreciosUnitarios', $id);
        $this->db->delete('preciosunitarios'); 
    }

    public function get_by_id($id) {
        $query = $this->db->get_where('preciosunitarios', array('idPreciosUnitarios'=>$id));
        return ($query->num_rows() > 0) ? $query->row_array() : NULL;
    }

    public function get_all() {
        $query = $this->db->get('preciosunitarios');
        return ($query->num_rows() > 0) ? $query->result_array() : NULL;
    }

        public function get_all_categorias() {
        $categoria = $this->db->get('preciosunitarios');
        return ($categoria->num_rows() > 0) ? $categoria->result_array() : NULL;
    }
}