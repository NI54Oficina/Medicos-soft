<?php

class Evoluacion_model extends CI_Model{

  public $id;
  public $fecha;
  public $texto;
  public $consulta_id;

  public function save($evolucion){

     $this->db->insert('evolucion', $evolucion);
  }

  public function findOne($ide){

    $query = $this->db->get_where('evolucion',  array('id' => $ide));
    return $query->result();
  }




}



 ?>
