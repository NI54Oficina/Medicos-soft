<?php

class Tratamiento_model extends CI_Model{

  public $id;
  public $fecha_inicio_tratamiento;
  public $full_name;
  public $miembro;
  public $tratamiento;
  public $consulta_id;


  public function findOne($id)
  {
    $query = $this->db->get_where('tratamiento',  array('id' => $id));
    return $query->result();
  }

  public function save($this)
  {

    // $this->id    = $_POST['id'];
    // $this->email = $_POST['fecha_inicio_tratamiento'];
    // $this->enabled    = $_POST['full_name'];
    // $this->nombre    = $_POST['miembro'];
    // $this->password    = $_POST['tratamiento'];
    // $this->username   = $_POST['consulta_id'];
    $this->db->insert('tratamiento', $this);

  }

  public function delete($id)
  {
    $query = $this->db->delete('tratamiento',  array('id' => $id));
    return $query->result();
  }



}




?>
