<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Productos extends CI_Model {
    function __construct() {
        parent::__construct();
    }

    public function set($data) {
        $this->db->insert('detalle_presupuesto', $data);
    }
    public function update($data) {
        $this->db->where('idPreciosUnitarios', $id);
        $this->db->update('detalle_presupuesto', $data); 
    }
    public function delete($id) {
        $this->db->where('idPreciosUnitarios', $id);
        $this->db->delete('detalle_presupuesto'); 
    }

    public function get_by_id($id) {
        $query = $this->db->get_where('detalle_presupuesto', array('idPreciosUnitarios'=>$id));
        return ($query->num_rows() > 0) ? $query->row_array() : NULL;
    }

    public function get_all() {
        $query = $this->db->get('detalle_presupuesto');
        return ($query->num_rows() > 0) ? $query->result_array() : NULL;
    }

}