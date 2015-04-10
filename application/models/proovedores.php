<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class proovedores extends CI_Model {
    function get_proovedores() {
        $this->db->select("proovedores.idProovedor,proovedores.Nombre as proovedor,proovedores.Provincia,categorias.Nombre");
        $this->db->from("proovedores");
		$this->db->join("proovedorescategorias","proovedorescategorias.idProovedor=proovedores.idProovedor","inner");
        $this->db->join("categorias","categorias.idCategoria=proovedorescategorias.idCategoria","inner");
        
        $query = $this->db->get();
        return ($query->num_rows() > 0) ? $query->result_array() : "";
    }

    public function delete_proovedor($id){
        $this->db->where('idProovedor', $id);
        $this->db->delete('proovedores');

        $this->db->where('idProovedor', $id);
        $this->db->delete('proovedorescategorias');

        $this->db->where('idProovedor', $id);
        $this->db->delete('proovedorescontactos');
        
        /*
        $this->db->select("idLocalizacion");
        $this->db->from("proovedores");
        $this->db->where('idProovedor', $id);
        $localizaciones = $this->db->get();
        return ($localizaciones->num_rows() > 0) ? $localizaciones->result_array() : "";
        //numeros
        $this->db->select("idNumero");
        $this->db->from("localizaciones");
        $this->db->where('idLocalizacion', $localizaciones);
        $numeros = $this->db->get();
        return ($numeros->num_rows() > 0) ? $numeros->result_array() : "";
        //correos
        $this->db->select("idCorreo");
        $this->db->from("localizaciones");
        $this->db->where('idLocalizacion', $localizaciones);
        $correos = $this->db->get();
        return ($correos->num_rows() > 0) ? $correos->result_array() : "";
        //twitters
        $this->db->select("idTwitter");
        $this->db->from("localizaciones");
        $this->db->where('idLocalizacion', $localizaciones);
        $twitters = $this->db->get();
        return ($twitters->num_rows() > 0) ? $twitters->result_array() : "";
        //Facebooks
        $this->db->select("idFacebook");
        $this->db->from("localizaciones");
        $this->db->where('idLocalizacion', $localizaciones);
        $facebooks = $this->db->get();
        return ($facebooks->num_rows() > 0) ? $facebooks->result_array() : "";
        
        $this->db->where('idLocalizacion', $localizaciones);
        $this->db->delete('localizaciones');
        $this->db->where('idCorreo', $correos);
        $this->db->delete('correos');

        $this->db->where('idNumero', $numeros);
        $this->db->delete('numeros');

        $this->db->where('idTwitter', $twitters);
        $this->db->delete('twitters');

        $this->db->where('idFacebook', $facebooks);
        $this->db->delete('facebooks');
        */
    } 

    function get_all($id) {
        $this->db->select("proovedores.idProovedor,proovedores.Nombre,proovedores.Direccion,proovedores.codigoPostal,proovedores.Provincia, proovedores.Estado,
        numeros.Numero1 as No1,numeros.Numero2 as No2,numeros.Numero3 as No3,correos.Correo1 as Co1,correos.Correo2 as Co2,Facebooks.Facebook1 as Fa1,
        facebooks.facebook2 as Fa2");
        
        $this->db->from("proovedores");
        $this->db->join("localizaciones","localizaciones.idLocalizacion=proovedores.idLocalizacion","inner");
        $this->db->join("numeros","numeros.idNumero=localizaciones.idNumero","inner");
        $this->db->join("correos","correos.idCorreo=localizaciones.idCorreo","inner");
        $this->db->join("facebooks","facebooks.idFacebook=localizaciones.idFacebook","inner");
        $this->db->where('idProovedor', $id);
        
        $query = $this->db->get();
        return ($query->num_rows() > 0) ? $query->result_array() : "";
    }

    function get_contactos($id) {

        $this->db->select("proovedores.idProovedor as idp,contactos.Nombre as No,contactos.idContacto idc,contactos.Direccion as Dir,
            contactos.RFC RFC,contactos.Provincia Pro");
        $this->db->from("proovedores");
        $this->db->join("proovedorescontactos","proovedorescontactos.idProovedor=proovedores.idProovedor","inner");
        $this->db->join("contactos","contactos.idContacto=proovedorescontactos.idContacto","inner");
        $this->db->where('proovedorescontactos.idProovedor', $id);

        $query = $this->db->get();
        return ($query->num_rows() > 0) ? $query->result_array() : "";
    }

    function get_direccion($id) {
        $this->db->select("idProovedor,Direccion,codigoPostal,Provincia,Estado");
        $this->db->from("proovedores");
        $this->db->where('proovedores.idProovedor', $id);

        $query = $this->db->get();
        return ($query->num_rows() > 0) ? $query->result_array() : "";
    }

    function editar_direccion($id) {
        $this->db->select("idContacto,Nombre,Direccion,Provincia,RFC");
        $this->db->from("contactos");
        $this->db->where('idContacto', $id);

        $query = $this->db->get();
        return ($query->num_rows() > 0) ? $query->result_array() : "";
    }

    public function update_contacto($data) {
        $this->db->where('idContacto', $data['idContacto']);
        $this->db->update('contactos', $data);
    }
}

/*$this->db->select("idProovedor,proovedores.Nombre,Provincia,categorias.Nombre");
$this->db->join("proovedores-categorias","proovedores-categorias.idProovedor=proovedores.idProovedor","inner");
        $this->db->join("categorias","categorias.idCategoria=proovedores-categorias.idCategoria","inner");*/