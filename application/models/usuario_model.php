<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Usuario_model extends CI_Model {

  public function validar($login,$password)
  {
    $this->db->select('*');
    $this->db->from('usuarios');
    $this->db->where('login',$login);
    $this->db->where('password',$password);
    return $this->db->get();
  }

  public function listarusuarios()
  {
    $this->db->select('*');
    $this->db->from('usuarios');
    return $this->db->get();
  }
  public function recuperarusuario($idusuario)
  {
    $this->db->select('*');
    $this->db->from('usuarios');
    $this->db->where('idusuario',$idusuario);
    return $this->db->get();
  }
  public function modificarusuario($idusuario,$data)
  {
    $this->db->where('idusuario',$idusuario);
    $this->db->update('usuarios',$data);
  }
  public function agregarusuario($data)
  {
    $this->db->insert('usuarios',$data);
  }
  public function eliminarusuario($idusuario)
  {
    $this->db->where('idusuario',$idusuario);
    $this->db->delete('usuarios');
  }
}
