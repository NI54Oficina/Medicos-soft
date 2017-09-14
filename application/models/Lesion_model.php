<?php

class Lesion_model extends CI_Model{

  public $id;
  public $full_name;
  public $miembro;
  public $patologia;



  public function delete($id_lesion){

    $query = $this->db->delete('lesion',  array('id' => $id_lesion));
    return $query->result();
  }


  public function save($lesion){

    $query = $this->db->delete('lesion', $lesion);
    
  }

}



 ?>
