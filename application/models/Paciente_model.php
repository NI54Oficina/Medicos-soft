<?php


class Paciente extends CI_Model{

  public $id;
  public $cobertura;
  public $dni;
  public $edad;
  public $nombre;
  public $numero_socio;
  public $obra_social;
  public $ocupacion;
  public $sexo;
  public $telefono;


  public function findByDni($doc){

    $query = $this->db->get_where('paciente',  array('dni' => $doc));
    return $query->result();

  }

  public function findPaciente($id_paciente){
    $query = $this->db->get_where('paciente',  array('id' => $id_paciente));
    return $query->result();
  }

  public function deletePaciente($paciente){
    $query = $this->db->delete('paciente',  array('id' => $paciente->$id));
    return $query->result();
  }

  public function savePaciente($paciente){
    $this->db->insert('paciente', $paciente);
  }



}


 ?>
