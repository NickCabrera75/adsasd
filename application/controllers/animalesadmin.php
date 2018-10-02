<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Animalesadmin extends CI_Controller {
  public function __construct()
  {
    parent::__construct();
    $this->load->model('animales_model');//a nivel de clase
  }
  public function index()
  {
    $listaanimales=$this->animales_model->listaanimales();
    $data['animales']=$listaanimales;
    $this->load->view('admin_view',$data);
  }
  /*public function modificar()
  {
    $idusuario=$_POST['idusuarios'];

    $data['infousuario']=$this->usuario_model->recuperarusuario($idusuarios);
    $this->load->view('administarusuarios_view',$data);
  }
  public function modificarbd()
  {
    login=$_POST['login'];
    $data['login']=$login
      ;
    $password=md5($_POST['password']);
    md5($_POST['password'])=$password;

    $tipo=$_POST['tipo'];
    $data['tipo']=$tipo;

    $this->usuario_model->modificarusuario($idusuarios,$data);
    redirect('usuario/index','refresh');
  }*/
}
