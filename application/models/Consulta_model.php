<?php

class Consulta_model extends CI_Model{

  public $id;
  public $fecha_accidente;
  public $internaciones_previas;
  public $interrogatorio;
  public $lugar_accidente;
  public $mecanismo;
  public $miembro;
  public $traumatico;
  public $con_cirugia_pendiente;
  public $con_internacion;
  public $dado_de_alta;
  public $incompleta;
  public $segunda_vez;
  public $sin_diagnostico;
  public $fecha_primer_consulta;
  public $alta;
  public $diagnostico;
  public $paciente;
  public $usuario_creador;
  public $ficha_artritis;

  public function save($consulta){

     $this->db->insert('consulta', $consulta);
  }

  public function findOne($ide){

    $query = $this->db->get_where('consulta',  array('id' => $ide));
    return $query->result();
  }

  public function find_all($specifications){
    //ver que hace.
  }




}



 ?>
