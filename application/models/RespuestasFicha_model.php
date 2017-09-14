<?php


class RespuestasFicha_model extends CI_Model{

  public $id;
  public $date;
  public $version;
  public $ficha;
  public $consulta_id;


  public function findOne($id)
  {
    $query = $this->db->get_where('respuestas_ficha',  array('id' => $id));
    return $query->result();
  }

  public function delete($id)
  {
    $query = $this->db->delete('respuestas_ficha',  array('id' => $id));
    return $query->result();
  }

  public function findAll()
  {
    $query = $this->db->get('respuestas_ficha');

    return $query->result_array();
  }

  public function save($elem)
  {

     $this->db->insert('usuario', $elem);

  }


}


 ?>
