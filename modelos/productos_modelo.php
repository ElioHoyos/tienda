<?php

require_once "conexion.php";

class ModeloProductos{

	static public function mdlMostrarCategorias($tabla, $item, $valor){

    if($item !=null)
    {
    
    $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item =:$item");

    $stmt -> bindParam(":".$item, $valor, PDO::PARAM_INT);

    $stmt -> execute();

    return $stmt -> fetch();

    }else{

    $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");

    $stmt -> execute();

    return $stmt -> fetchAll();
    

    }

    $stmt -> close();

    $stmt = null; 

}

    static public function mdlMostrarNCategorias(){

        $stmt = Conexion::conectar()->prepare("SELECT count(*) FROM categorias");

        $stmt -> execute();

        return $stmt -> fetchColumn();

        $stmt -> close();

        $stmt = null;

    }

	static public function mdlMostrarSubCategorias($tabla,$id){

		$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE id_categoria = :id_categoria");

		$stmt -> bindParam(":id_categoria", $id, PDO::PARAM_INT);

		$stmt -> execute();

		return $stmt -> fetchAll();

		$stmt -> close();

		$stmt = null;

	}

}
