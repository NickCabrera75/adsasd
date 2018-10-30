<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Adopcion extends CI_Controller {
  public function __construct()
  {
    parent::__construct();
    $this->load->model('animales_model');//a nivel de clase
  }
  public function index()
  {
    $listaanimales=$this->animales_model->listaanimales();
    $data['animales']=$listaanimales;
     $this->load->view('inc/template_headerLogueado');
    $this->load->view('view/adopcion_view',$data);
    $this->load->view('inc/template_footer');
  }

}