<?php

class Cirugia_model extends CI_Model{

  public $id;
  public $descripcion;
  public $estado;
  public $fecha_cirugia;
  public $full_name;
  public $ficha;
  public $google_calendar_id;
  public $google_event_id;
  public $lugar;
  public $tratamiento;
  public $consulta_id;


  public function save($cirugia){

     $this->db->insert('cirugia', $configuracion);
  }

  public function findOne($ide){

    $query = $this->db->get_where('cirugia',  array('id' =>$id));
    return $query->result();
  }

  public function delete($ide){
    $query = $this->db->delete('cirugia',  array('id' => $ide));
    return $query->result();
  }


  public function findByDiagnosticoIn($listDiagnostico){
    //ver que hace
  }



}



 ?>
