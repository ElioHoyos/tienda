<?php

require_once "controladores/plantilla_controlador.php";
require_once "controladores/productos_controlador.php";

require_once "modelos/plantilla_modelo.php";
require_once "modelos/productos_modelo.php";

$plantilla = new ControladorPlantilla();
$plantilla -> plantilla();