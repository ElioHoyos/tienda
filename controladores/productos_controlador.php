<?php

class ControladorProductos{

	public function ctrMostrarCategorias(){

		$tabla = "categorias";

		$respuesta = ModeloProductos::mdlMostrarCategorias($tabla);

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

