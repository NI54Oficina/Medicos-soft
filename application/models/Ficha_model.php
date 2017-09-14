<?php

class Ficha_model extends CI_Model{

  public $id;
  public $nombre;

  public function save($ficha){

     $this->db->insert('ficha', $ficha);
  }

  public function findOne($ide){

    $query = $this->db->get_where('ficha',  array('id' => $ide));
    return $query->result();
  }




}



 ?>
