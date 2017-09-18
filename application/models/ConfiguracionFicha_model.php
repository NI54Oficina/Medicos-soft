<?php

class ConfiguracionFicha_model extends CI_Model{

  public $id;
  public $full_name;
  public $periodo_semanas;
  public $version;
  public $diagnostico;
  public $ficha;


  public function save($configuracion){

     $this->db->insert('configuracion_ficha', $configuracion);
  }

  public function findByFicha($ficha){

    $query = $this->db->get_where('configuracion_ficha',  array('id' => $ficha->$id));
    return $query->result();
  }

  public function delete($ide){
    $query = $this->db->delete('configuracion_ficha',  array('id' => $ide));
    return $query->result();
  }


  public function findByDiagnosticoIn($listDiagnostico){
    //ver que hace
  }



}



 ?>
