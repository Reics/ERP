<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class contactos extends CI_Model {

    public function delete_contacto($id){
        $this->db->where('idContacto', $id);
        $this->db->delete('Contactos');

        $this->db->where('idContacto', $id);
        $this->db->delete('proovedorescontactos');
    } 

    public function update_contacto($data,$id) {
        $this->db->where('idContacto', $id);
        $this->db->update('contactos', $data);
    }

    function get_contactos() {
        $this->db->select("*");
        $this->db->from("contactos");
        $query = $this->db->get();
        return ($query->num_rows() > 0) ? $query->result_array() : "";
    }

    function get_proveedores() {
        $this->db->select("*");
        $this->db->from("proovedores");
        $query = $this->db->get();
        return ($query->num_rows() > 0) ? $query->result_array() : "";
    }

    function get_contactos_id($id) {
        $this->db->select("*");
        $this->db->from("contactos");
        $this->db->where("Nombre",$id);

        $query = $this->db->get();
        return ($query->num_rows() > 0) ? $query->result_array() : "";
    }

    function insertar_contacto($nombre,$rfc,$direccion,$estado,$pais,$numero,$correo){
        $data = ['Nombre' => $nombre,'RFC' => $rfc,'Direccion' => $direccion,'Estado' => $estado,'Pais' => $pais,'Numero' => $numero,'Correo' => $correo];
        $this->db->insert('contactos', $data); 
    }

    function insertar_conpro($proovedor,$contacto){
        $data = ['idProovedor' => $proovedor,'idContacto' => $contacto];
        $this->db->insert('proovedorescontactos', $data);
    }

}