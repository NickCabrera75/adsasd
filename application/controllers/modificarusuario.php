<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Modificarusuario extends CI_Controller {
  public function __construct()
  {
    parent::__construct();
    $this->load->model('usuario_model');//a nivel de clase
  }
  public function index()
  {
    $listausuarios=$this->usuario_model->listarusuarios();
    $data['usuarios']=$listausuarios;
    $this->load->view('',$data);
  }

  public function agregar()
  {
    $this->load->view('usuariocrear_view');
  }
  public function agregarbd()
  {
    $data['Nombres']=$_POST['Nombres'];
       $data['PrimerApellido']=$_POST['PrimerApellido'];
       $data['SegundoApellido']=$_POST['SegundoApellido'];
       $data['Email']=$_POST['Email'];
       $data['login']=$_POST['login'];
      $data['Imagen']=$_POST['Imagen'];
    $data['password']=md5($_POST['password']);
    //$data['tipo']=$_POST['tipo'];
    $this->usuario_model->agregarusuario($data);
    redirect('animales/index','refresh');
  }
  public function modificar()
  {
    $idusuario=$_POST['idusuarios'];

    $data['infousuario']=$this->usuario_model->recuperarusuario($idusuarios);
    $this->load->view('administarusuarios_view',$data);
  }
  public function modificarbd()
  {
    $idusuarios=$this->session->userdata('idusuarios');
    $data['SegundoApellido']=$_POST['SegundoApellido'];
      
    

    $this->usuario_model->modificarusuario($idusuarios,$data);
    redirect('usuario/panel','refresh');
  }
}