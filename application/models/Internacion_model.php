<?php

class Internacion_model extends CI_Model{

  public $id;
  public $estado;
  public $fecha_entrada;
  public $fecha_salida;
  public $motivo;



  public function findOne($id)
  {
    $query = $this->db->get_where('internacion',  array('id' => $id));
    return $query->result();
  }


  
}



 ?>
