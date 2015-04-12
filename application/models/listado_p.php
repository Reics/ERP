<?php

class Listado_p extends CI_Model {

    function verReg() {
        $sql = $this->db->query('select * from profesionistas p left join especialidades e on p.ID_Profesionistas=e.ID_especialidad');
        if ($sql->num_rows() > 0) {
            foreach ($sql->result() as $fila) {
                $data[] = $fila;
            }return $data;
        }
        return false;
    }

    function filtroprofesion($dato) {
        $sql = $this->db->query('select * from profesionistas p inner join especialidades e on p.ID_Profesionistas=e.Profesionistas_ID_Profesionistas' . $dato);
        if ($sql->num_rows() > 0) {
            foreach ($sql->result() as $fila) {
                $data[] = $fila;
            }
            return $data;
        }
        return false;
    }

    function verObra($dato) {
        $sql = $this->db->query('select * from obras where Profesionistas_ID_Profesionistas=' . $dato);
        if ($sql->num_rows() > 0) {
            foreach ($sql->result() as $fila) {
                $data[] = $fila;
            }return $data;
        }
        else{
        return false;}
    }

    function verEsp($dato) {
        $sql = $this->db->query('select * from especialidades where Profesionistas_ID_Profesionistas=' . $dato);

        if ($sql->num_rows() > 0) {
            foreach ($sql->result() as $fila) {
                $data[] = $fila;
            }
            return $data;
        }
        return false;
    }

    function verCar($dato) {
        $sql = $this->db->query('select * from carrera where Profesionistas_ID_Profesionistas=' . $dato);
        if ($sql->num_rows() > 0) {
            foreach ($sql->result() as $fila) {
                $data[] = $fila;
            }
            return $data;
        } else
        return false;
    }
}
?>

