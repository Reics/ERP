<?php

class profesionista_model extends CI_Model {

function set($nombre, $apellido,$mail,$paginaWeb,$skype,$facebook,$twitter,$calle1,$municipio1,$estado1,$numint1,$numext1,$telCasa,$movil1,$movil2,$telOficina,$calle2,$municipio2,$estado2,$numint2,$numext2) {
    
     $data = array(
      'Nombre'=>$nombre,
     'Apellidos'=> $apellido,
      'Email'=>$mail,
      'PaginaWeb'=>$paginaWeb,
      'Skype'=>$skype,
      'calle1'=>$calle1,	
      'facebook'=>$facebook,
      'twitter'=>$twitter,
      'calle2'=>$calle2,
      'delegacion_municipio1'=>$municipio1,
      'estado1'=>$estado1,
      'interior1'=>$numint1,
      'exterior1'=>$numext1,
     'telefonofijo1'=>$telCasa,
      'movil1'=>$movil1,
      'movil2'=>$movil2,
      'telefono_trabajo1'=>$telOficina,
      'delegacion_municipio2'=>$municipio2,
      'estado2'=>$estado2,
      'interior2'=>$numint2,
      'exterior2'=>$numext2
      );
     $this->db->insert('profesionistas', $data); 
       
    }

    function insertarcarrera($nombre,$grado,$especialidad,$anios,$cedula,$id)
    {
     $data=array(
'nombrecarrera'=>$nombre,
'grado'=>$grado,
'especialidad'=>$especialidad,
'años'=>$anios,
'cedula'=>$cedula,
'Profesionistas_ID_Profesionistas'=>$id
      );


    $this->db->insert('carrera', $data);    
    }

    function insertarobra($nombre,$fechai,$fechat,$id)
    {
 $data=array(
'Nombre'=>$nombre,
'Fecha_de_inicio'=>$fechai,
'Fecha_de_termino'=>$fechat,
'Profesionistas_ID_Profesionistas'=>$id
);
  $this->db->insert('obras', $data);    

    }


function insertarespecialidad($nombre,$tipo,$anios,$id)
    {
 $data=array(
'nombre_especialidad'=>$nombre,
'tipo'=>$tipo,
'años'=>$anios,
'Profesionistas_ID_Profesionistas'=>$id
);
  $this->db->insert('especialidades', $data);    

    }

  function eliminaobra($id)
  {
  

    $this->db->where('ID_Obra', $id);
$this->db->delete('obras'); 
   }
    function eliminacarrera($id)
  {
  $this->db->where('idCarrera', $id);
  $this->db->delete('carrera'); 
   }

  function eliminaesp($id)
  {
  $this->db->where('ID_especialidad', $id);
  $this->db->delete('especialidades'); 

  }
}