<?php

class Grupo_model extends CI_Model{

  public $id;
  public $enabled;
  public $nombre;

  public function save($grupo){

     $this->db->insert('grupo', $grupo);
  }




}



 ?>
