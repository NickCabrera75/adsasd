<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Animales_model extends CI_Model {

  public function listaanimales()
  {
    $this->db->select('*');
    $this->db->from('mascotas');
    return $this->db->get();
  }
 /* public function recuperaranimales($idanimales)
  {
    $this->db->select('*');
    $this->db->from('animales');
    $this->db->where('idanimales',$idanimales);
    return $this->db->get();
  }
  public function modificaranimales($idanimales,$data)
  {
    $this->db->where('idanimales',$idanimales);
    $this->db->update('animales',$data);
  }*/
  public function agregaranimales($data)
  {
    $this->db->insert('mascotas',$data);
  }/*
  public function eliminaranimales($idanimales)
  {
    $this->db->where('idanimales',$idanimales);
    $this->db->delete('animales');
  }*/
}
