<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Usuariocrear extends CI_Controller {
  public function __construct()
  {
    parent::__construct();
    $this->load->model('usuario_model');//a nivel de clase
  }
  public function index()
  {
    $listausuarios=$this->usuario_model->listarusuarios();
    $data['usuarios']=$listausuarios;
    $this->load->view('usuariocrear_view',$data);
  }

  public function agregar()
  {
    $this->load->view('usuariocrear_view');
  }
  public function agregarbd()
  {
   
      
      $config['upload_path']          = './images/usuarios';
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
         $imagenes="default.jpg";}
      
      
     /* $nombre_imagen=$_FILES['imagenes']['name'];
    	$config['max_size']=2000;
    	$config['quality']='90%';
    	$config['upload_path']='./images/usuarios/';
    	$config['allowed_types']='gif|jpg|jpeg|png';
    	$config['file_name']=$nombre_imagen;
    	$this->load->library('upload',$config);
    	$this->upload->do_upload();
        $this->create_thumbnail($nombre_imagen);*/
      
      $data = array(
          'Imagen' => $imagenes,
      'Nombres' => $this->input->post('Nombres'),
          'PrimerApellido' => $this->input->post('PrimerApellido'),
          'SegundoApellido' => $this->input->post('SegundoApellido'),
          'Email' => $this->input->post('Email'),
          'login' => $this->input->post('login'),
       
            'password' => md5($this->input->post('password')),
    /*$data['password']=md5($_POST['password']);*/
    //$data['tipo']=$_POST['tipo'];
          );
    $this->usuario_model->agregarusuario($data);
    redirect('animales/index','refresh');
  }
    
    /*function create_thumbnail($filename){
    	
        $config['image_library'] = 'gd2';
        //carpeta uploads
        $config['source_image'] = './images/usuarios/'.$filename;
        $config['create_thumb'] = TRUE;
        $config['maintain_ratio'] = TRUE;
        //carpeta thumbs
        $config['new_image']='./images/usuarios/';
        $config['width'] = 150;
        $config['height'] = 150;
        $this->load->library('image_lib', $config); 
        $this->image_lib->resize();
    }*/
       
    
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
