<?php

class ScoreController extends CI_Controller {

	public function getQuickDash($id){


		$consulta = $consultaService->findOne($id);
		$michigan = $consulta->retrieveScore('Michigan');

		// uiModel.addAttribute(consulta);
		// uiModel.addAttribute("michigan", michigan == null ? new QuickDashForm() : michigan);



		$this->load->view('score/michigan');
	}

	public function getMichigan($id){

				$consulta = $consultaService->findOne($id);
				$quickDash = $consulta->retrieveScore('quickDash');

			// uiModel.addAttribute(consulta);
			// uiModel.addAttribute("quickDash", quickDash == null ? new QuickDashForm() : quickDash);
			//

			$this->load->view('score/quickDash');
	}

	public function getEscalaDeDolor(){
		$consulta = $consultaService->findOne($id);
		$escalaDeDolor = $consulta->retrieveScore('escalaDeDolor');

	// uiModel.addAttribute(consulta);
	// uiModel.addAttribute("quickDash", quickDash == null ? new QuickDashForm() : quickDash);
	//

		$this->load->view('score/escalaDeDolor');
	}

	public function getMovilidadDedos($id1, $id2){

		$consulta = $consultaService->findOne($id);

	// uiModel.addAttribute(consulta);
	// for (FichaMovilidadDedos fichaMovilidadDedos : consulta.getFichasMovilidadDedos()) {
	// 	if(fichaMovilidadDedos.getId().equals(id2)){
	// 		uiModel.addAttribute("fichaMovilidadDedos", fichaMovilidadDedos);
	// 	}
	// }

		// uiModel.addAttribute("fichasAnteriores", consulta.getFichasMovilidadDedos());

			$this->load->view('score/movilidadDedos');

	}


}
