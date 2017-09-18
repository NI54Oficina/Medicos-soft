<?php

class UsuarioController extends CI_Controller {



	public function create($usuario)
	{

    $this->load->model('Usuario');
    $usuarioDAO= $this->usuario;

    // VER COM MANEJAR LOS REQUEST HTTP

    setUserPassword($usuario);
	}

  public function setUserPassword($usuario){

    if($usuario.getUsuarioGoogle()){
        $usuario.setPassword(".");
      }
      else{
          if(!$usuario.getPassword().isEmpty()){

            $hash = passwordEncoder.encodePassword(usuario.getPassword(), usuario.getUsername());

            //contraseña hasheada

          $usuario.setPassword($hash);
          }
          else{
            $usuario.setPassword($usuarioDAO.findOne($usuario.getId()).getPassword());
          }
      }

  }

}
