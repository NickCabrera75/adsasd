<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Animalesinvitado extends CI_Controller {
  public function __construct()
  {
    parent::__construct();
    $this->load->model('animales_model');//a nivel de clase
  }
  public function index()
  {
    $listaanimales=$this->animales_model->listaanimales();
    $data['animales']=$listaanimales;
    $this->load->view('invitado_view',$data);
  }
  /*
  public function modificar()
  {
    $idanimales=$_POST['idanimales'];

    $data['infoanimales']=$this->animales_model->recuperaranimales($idanimales);
    $this->load->view('mod_animales_view',$data);
  }
  public function modificarbd()
  {
    $idanimales=$_POST['idanimales'];

    $idanimales=$_POST['idanimales'];
    $data['idanimales']=$idanimales;

    $animal=$_POST['animal'];
    $data['animal']=$animal;

    $pais=$_POST['pais'];
    $data['pais']=$pais;

    $this->animales_model->modificaranimales($idanimales,$data);
    redirect('animales/index','refresh');
  }
  public function agregar()
  {
    $this->load->view('add_animales_view');
  }
  public function agregarbd()
  {
    $data['idanimales']=$_POST['idanimales'];
    $data['animal']=$_POST['animal'];
    $data['pais']=$_POST['pais'];

    $this->animales_model->agregaranimales($data);
    redirect('animales/index','refresh');
  }
  public function eliminarbd()
  {
    $idanimales=$_POST['idanimales'];
    $this->animales_model->eliminaranimales($idanimales);
    redirect('animales','refresh');
  }
  */
}
