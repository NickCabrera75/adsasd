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
    
$config['upload_path']          = './images/adoptar';
		$config['allowed_types']        = 'jpg|png';
		$config['max_size']             = 1000;
		$config['max_width']            = 1024;
		$config['max_height']           = 768;
		$config['encrypt_name'] 		=TRUE;
		$this->load->library('upload', $config);
		$this->upload->do_upload('imagenes');
		$data = $this->upload->data();
		
	     $imagenes=$data['file_name'];
		if (empty($imagenes)) {
         $imagenes="default.png";}
   
      
      $data = array(
          'Imagen' => $imagenes,
          'Nombre' => $this->input->post('Nombre'),
          'Edad' => $this->input->post('Edad'),
          'Description' => $this->input->post('Description'),
          'Raza' => $this->input->post('Raza'),
          'Color' => $this->input->post('Color'),
          'Tamano' => $this->input->post('Tamano'),
          'Pedigree' => $this->input->post('Pedigree'),
          'Tipo' => $this->input->post('Tipo'),
          'Sexo' => $this->input->post('Sexo'),
          );
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