<?php


class Blog_model extends CI_Model{

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

    public function getId()
    {
            // $this->title    = $_POST['title'];
            // $this->content  = $_POST['content'];
            // $this->date     = time();
            //
            // $this->db->update('usuario', $this, array('id' => $_POST['id']));
    }

    public function setPassword($hash)
    {

    }

    public function getPassword()
    {

    }

    public function getUsername()
    {

    }

    public function save()
    {
       $this->id    = $_POST['id'];
       $this->email = $_POST['email'];
       $this->enabled    = $_POST['enabled'];
       $this->nombre    = $_POST['nombre'];
       $this->password    = $_POST['password'];
       $this->username   = $_POST['username'];
       $this->usuario_google = $_POST['usuario_google'];
       $this->db->insert('usuario', $this);

    }

    public function findOne()
    {

    }


}




 ?>
