<?php

class NodoTratamiento_model extends CI_Model{

  public $id;
  public $label;
  public $parent;

  public function findOne($id)
  {
    $query = $this->db->get_where('nodo_tratamiento',  array('id' => $id));
    return $query->result();
  }



}



 ?>
