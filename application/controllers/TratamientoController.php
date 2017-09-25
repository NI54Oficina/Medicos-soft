<?php

class TratamientoController extends CI_Controller {



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

	public function save($idConsulta){

		$this->load->model('consulta');

		$consulta = $this->$consulta->findOne($idConsulta);

		// Consulta consulta = consultaService.findOne(idConsulta);

		//$consulta.addTratamiento(tratamientoService.createTratamiento(tratamiento.getTratamiento().getId(), tratamiento.getMiembro()));

		$consultaService->save($consulta);

	}

	public function delete($idConsulta, $idTratamiento){
		$tratamientoService->delete($idTratamiento);
	}

	public function list($id){
		// Consulta consulta = consultaService.findOne(id);
		// uiModel.addAttribute(consulta);

			$this->load->view('tratamiento/list');
	}

	public function  tree(){
		return json_encode($nodoTratamientoService->getTreeRoot()->getChildren());
	}

}
