<?php

class UsuarioController extends CI_Controller {



	public function create($id){

		$this->load->model('consulta');

		$consulta = $this->$consulta->findOne($id);
		//
		// Consulta consulta = consultaService.findOne(id);
		// uiModel.addAttribute(consulta);
		// uiModel.addAttribute(new Tratamiento());

		//return "tratamiento/create";

		$this->load->view('tratamiento/create');

	}

}
