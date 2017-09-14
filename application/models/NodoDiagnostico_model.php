<?php

class NodoDiagnostico_model extends CI_Model{

  public $id;
  public $display_in_sumamry;
  public $label;
  public $parent;

  public function findByLabel($nombre)
  {
    $query = $this->db->get_where('nodo_diagnostico',  array('label' => $nombre));
    return $query->result();
  }



}



 ?>
