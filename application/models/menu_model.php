<?php

class menu_model extends CI_Model {

    function get_anadidos() {
      $query=$this->db->query('SELECT nombre,profesion from profesionistas limit 5');
        return ($query->num_rows() > 0) ? $query->result_array() : "";
    }
       function get_consulta($nombre)
   {

         $sql = $this->db->query('select * from profesionistas p left join especialidades e on p.ID_Profesionistas=e.ID_especialidad where nombre='.'"'.$nombre.'"');
        if ($sql->num_rows() > 0) {
            foreach ($sql->result() as $fila) {
                $data[] = $fila;
            }return $data;
        }
        return false;
   }

      
}

