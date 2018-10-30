<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Perrosgatos extends CI_Controller {
  public function __construct()
  {
    parent::__construct();
    $this->load->model('animales_model');//a nivel de clase
  }
  public function index()
  {
   $listaanimales=$this->animales_model->listaanimales();
    $data['animales']=$listaanimales;
    $this->load->view('inc/template_header');
    $this->load->view('view/perrosgatos_view',$data);
    $this->load->view('inc/template_footer');
  }
}