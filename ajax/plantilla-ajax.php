<?php

require_once "../controladores/plantilla_controlador.php";

require_once "../modelos/plantilla_modelo.php";

class AjaxPlantilla{

	public function ajaxEstiloPlantilla(){

		$respuesta = ControladorPlantilla::ctrEstiloPlantilla();

		echo json_encode($respuesta);

	}

}


$objeto = new AjaxPlantilla();
$objeto -> ajaxEstiloPlantilla();