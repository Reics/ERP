<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Presupuestos_Model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    public function set($data) {
        $this->db->insert('presupuesto', $data);
    }

    public function update($data) {
        $this->db->where('idPresupuesto', $data["idPresupuesto"]);
        $this->db->update('presupuesto', $data);
    }

    public function delete($id) {
        $this->db->where('idPresupuesto', $id);
        $this->db->delete('presupuesto');
    }

    public function get_by_id($id) {
        $query = $this->db->get_where('presupuesto', array('idPresupuesto' => $id));
        return ($query->num_rows() > 0) ? $query->row_array() : NULL;
    }

    public function get_all() {
        $query = $this->db->get('presupuesto');
        return ($query->num_rows() > 0) ? $query->result_array() : NULL;
    }

    public function get_product($id) {
        $this->db->select("*");
        $this->db->from("detalle_presupuesto");
        $this->db->join("preciosunitarios", "preciosunitarios.idPreciosUnitarios = detalle_presupuesto.idPreciosUnitarios", "inner");
        $this->db->where("idpresupuesto", $id);
        $query = $this->db->get();
        //$queryjoin = $this->db->query('SELECT * FROM detalle_presupuesto d LEFT JOIN preciosunitarios p ON p.idPreciosUnitarios=d.idPreciosUnitarios');
        //$query = $this->db->get_where($queryjoin, array('idPresupuesto'=>$id));
        //$query = $this->db->get_where('detalle_presupuesto', array('idPresupuesto'=>$id));
        return ($query->num_rows() > 0) ? $query->result_array() : NULL;
    }
    public function get_products(){
        $query = $this->db->get('preciosunitarios');
        return ($query->num_rows() > 0) ? $query->result_array() : NULL;
    }
    public function setProducto($data) {
        $this->db->insert('detalle_presupuesto', $data);
    }
}

