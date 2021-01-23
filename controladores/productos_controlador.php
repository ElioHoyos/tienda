<?php

class ControladorProductos{

	static public function ctrMostrarCategorias($item, $valor){

		$tabla = "categorias";

		$respuesta = ModeloProductos::mdlMostrarCategorias($tabla, $item, $valor);

		return $respuesta;

	}


    public function ctrMostrarNCategorias(){

        $tabla = "categorias";

        $respuesta = ModeloProductos::mdlMostrarNCategorias();

        return $respuesta;

    }

	public function ctrMostrarSubCategorias($id){

		$tabla = "subcategorias";

		$respuesta = ModeloProductos::mdlMostrarSubCategorias($tabla, $id);

		return $respuesta;

	}

}

