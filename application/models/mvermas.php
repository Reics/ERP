<?php
class Mvermas extends CI_Model{
    function vermasprof($dato){
       
     $sql=$this->db->query('select * from profesionistas where ID_profesionistas='.$dato);    
        
     if($sql->num_rows()>0){
         foreach ($sql->result() as $fila)
         {
             $data[]=$fila;
         }
         return $data;
     }
        return false;
    }   

     function cambiar($id,$nombre, $apellido,$mail,$paginaWeb,$skype,$facebook,$twitter,$calle1,$municipio1,$estado1,$numint1,$numext1,$telCasa,$movil1,$movil2,$telOficina,$calle2,$municipio2,$estado2,$numint2,$numext2){
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

$this->db->where('ID_profesionistas', $id);
$this->db->update('profesionistas', $data); 
}
       function eliminar($id){
        $this->db->delete('profesionistas', array('ID_profesionistas' => $id)); 
       }
} 
?>
