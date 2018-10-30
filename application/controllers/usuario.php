<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Usuario extends CI_Controller {
public function __construct(){
		parent::__construct();
		$this->load->model("usuario_model");
	}
  public function index()
  {
		if($this->session->userdata('login'))
            {
              redirect('usuario/panel','refresh');

            }
        else
            {
              redirect('perros','refresh');
            }
    
  }
     
	
	
 
  public function validarusr()
  {
    $login=$_POST['login'];
    $password=md5($_POST['password']);
    $consulta=$this->usuario_model->validar($login, $password);

    if($consulta->num_rows()>0)
    {
      foreach ($consulta->result() as $row)
          {
            if(($row->login)==$login && ($row->password)==$password)
            {
              $this->session->set_userdata('idusuarios',$row->idusuarios);
                $this->session->set_userdata('Imagen',$row->Imagen);
							$this->session->set_userdata('Nombres',$row->Nombres);
							$this->session->set_userdata('PrimerApellido',$row->PrimerApellido);
							$this->session->set_userdata('SegundoApellido',$row->SegundoApellido);
							$this->session->set_userdata('Email',$row->Email);
                $this->session->set_userdata('login',$row->login);
                $this->session->set_userdata('tipo',$row->tipo);
                redirect('usuario/panel','refresh');
            }
          }
    }
    else
    {
      redirect('usuario/index','refresh');
    }
  }

 public function panel()
  {
    if($this->session->userdata('login'))
            {

              
    $this->load->view('inc/template_headerLogueado');
    $this->load->view('view/panel_view');
    $this->load->view('inc/template_footer');
            }
        else
            {
              redirect('usuario/index','refresh');
            }
  }

  public function logout()
    {
        $this->session->sess_destroy();
        redirect('animales','refresh');
    }
    
    
}

