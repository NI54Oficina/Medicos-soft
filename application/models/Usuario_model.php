<?php


class Usuario_model extends CI_Model{

   public $id;
   public $email;
   public $enabled;
   public $nombre;
   public $password;
   public $username;
   public $usuario_google;

   public function findByUsername($usr)
    {
            $query = $this->db->get_where('usuario',  array('username' => $usr));
            return $query->result();
    }

    // public function getId()
    // {
          //Van en controller
    // }

    // public function setPassword($hash)
    // {
        //Van en controller
    // }

    // public function getPassword()
    // {
      //Van en controller
    // }

    // public function getUsername()
    // {
      //Van en controller
    // }

    public function save($elem)
    {
      //  $this->id    = $_POST['id'];
      //  $this->email = $_POST['email'];
      //  $this->enabled    = $_POST['enabled'];
      //  $this->nombre    = $_POST['nombre'];
      //  $this->password    = $_POST['password'];
      //  $this->username   = $_POST['username'];
      //  $this->usuario_google = $_POST['usuario_google'];
       $this->db->insert('usuario', $elem);

    }

    public function findOne($id)
    {
      $query = $this->db->get_where('usuario',  array('id' => $id));
      return $query->result();
    }


}




 ?>
