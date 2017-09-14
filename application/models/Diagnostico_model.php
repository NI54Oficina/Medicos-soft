<?php

class Diagnostico_model extends CI_Model{

  public $id;
  public $fecha_diagnostico;
  public $resumen;
  public $consulta_id;

  public function save($diagnostico){

     $this->db->insert('diagnostico', $diagnostico);
  }

  public function findOne($ide){

    $query = $this->db->get_where('diagnostico',  array('id' => $ide));
    return $query->result();
  }




}



 ?>
