<?php

class filtros extends CI_Model {
    function filtrar_especialidad($especialidad){
     $sql = $this->db->query('select * from profesionistas p left join especialidades e on p.ID_Profesionistas=e.ID_especialidad where nombre_especialidad='.'"'.$especialidad.'"');
        if ($sql->num_rows() > 0) {
            foreach ($sql->result() as $fila) {
                $data[] = $fila;
            }return $data;
        }
        return false;
    }

     function filtrar_profesion($profesion){	 
     	 $sql = $this->db->query('select * from profesionistas p left join especialidades e on p.ID_Profesionistas=e.ID_especialidad where profesion='.'"'.$profesion.'"');
        if ($sql->num_rows() > 0) {
            foreach ($sql->result() as $fila) {
                $data[] = $fila;
            }return $data;
        }
        return false;
    }

     function filtrar_carrera($carrera){
         $sql = $this->db->query('select * from profesionistas p left join especialidades e on p.ID_Profesionistas=e.ID_especialidad left join carrera on carrera.idCarrera = p.ID_Profesionistas where nombrecarrera='.'"'.$carrera.'"');
        if ($sql->num_rows() > 0) {
            foreach ($sql->result() as $fila) {
                $data[] = $fila;
            }return $data;
        }
        return false;
    }



 
}













