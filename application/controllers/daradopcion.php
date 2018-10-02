<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Daradopcion extends CI_Controller {
  public function __construct()
  {
    parent::__construct();
    $this->load->model('animales_model');//a nivel de clase
  }
  public function index()
  {
    $listaanimales=$this->animales_model->listaanimales();
    $data['animales']=$listaanimales;
    $this->load->view('daradopcion_view',$data);
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
  }*/
  public function agregar()
  {
    $this->load->view('daradopcion_view');
  }
  public function agregarbd()
  {
    /*if($this->input->post())
		{
      
			$Nombre = $this->db->escape($_POST["Nombre"]);
			$Edad = $this->db->escape($_POST["Edad"]);
      $Description = $this->db->escape($_POST["Description"]);
      $Raza = $this->db->escape($_POST["Raza"]);
      $Color = $this->db->escape($_POST["Color"]);
      $Tamaño = $this->db->escape($_POST["Tamaño"]);
      $Pedigree = $this->db->escape($_POST["Pedigree"]);
      $Imagen = $this->db->escape($_POST["Imagen"]);
      $IdCuenta = $this->db->escape($_POST["IdCuenta"]);
      $Tipo = $this->db->escape($_POST["Tipo"]);
      $Sexo = $this->db->escape($_POST["Sexo"]);

      /*if ($this->animales_model->agregaranimales()
      {
				header("Location:".base_url()."employees");
			}
    }*/

    $data['Nombre']=$_POST['Nombre'];
    $data['Edad']=$_POST['Edad'];
    $data['Description']=$_POST['Description'];
    $data['Raza']=$_POST['Raza'];
    $data['Color']=$_POST['Color'];
    $data['Tamano']=$_POST['Tamano'];
    $data['Pedigree']=$_POST['Pedigree'];
    /*$data['Imagen']=$_POST['Imagen'];
    $data['idCuenta']=$_POST['IdCuenta'];*/
    $data['Tipo']=$_POST['Tipo'];
    $data['Sexo']=$_POST['Sexo'];


    $this->animales_model->agregaranimales($data);
    redirect('animales/index','refresh');
  }
  /*public function eliminarbd()
  {
    $idanimales=$_POST['idanimales'];
    $this->animales_model->eliminaranimales($idanimales);
    redirect('animales','refresh');
  }
  */
}