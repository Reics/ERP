<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Agregar extends CI_Controller {

function __construct()
	{
	parent::__construct();
$this->load->helper('array');
$this->load->helper('url');
$this->load->model('profesionista_model');
	}

    public function index() {
    	$bool=0;
    	$nombre= $this->input->post('nombre');
    	$apellido = $this->input->post("apellidos");
        $mail = $this->input->post("mail");
        $paginaWeb = $this->input->post("paginaWeb");
        $skype = $this->input->post("skype");
        $facebook = $this->input->post("facebook");
        $twitter = $this->input->post("twitter");
        $calle1 = $this->input->post("calle1");
        $municipio1 = $this->input->post("municipio1");
        $estado1 = $this->input->post("estado1");
        $numint1 = $this->input->post("numint1");
        $numext1 = $this->input->post("numext1");
        $telCasa = $this->input->post("telCasa");
        $movil1 = $this->input->post("movil1");
        $movil2 = $this->input->post("movil2");
        $telOficina = $this->input->post("telOficina");
        $calle2 = $this->input->post("calle2");
        $municipio2 = $this->input->post("municipio2");
        $estado2 = $this->input->post("estado2");
        $numint2 = $this->input->post("numint2");
        $numext2 = $this->input->post("numext2");
    if ($nombre=='')
    {
    $bool=1;
    }else
    {
   	$bool=0;
    }

    

 if ($bool==1)
    {
    	$data['header'] = array('title' => 'Proveedores' , 'proveedores' => '' , 'presupuestos' => '' , 'profecionistas' => 'active' );//se inicializa el titulo de la pagina
  		$this->load->view('header', $data);
		$this->load->view('agregarProfesionista');
		$this->load->view('footer');
    }else
    {
    $this->profesionista_model->set($nombre, $apellido,$mail,$paginaWeb,$skype,$facebook,$twitter,$calle1,$municipio1,$estado1,$numint1,$numext1,$telCasa,$movil1,$movil2,$telOficina,$calle2,$municipio2,$estado2,$numint2,$numext2); 
   	redirect(base_url()."index.php");
    }

     
	
      

       

}
   
        
    }


