<?php

require_once "../conexionbd/conexion.php";
require_once "clases/clase_detalles.php";

$id_detalles=$_GET['id_detalles'];



$obj= new detalles();
if ($obj->eliminar_detalles($id_detalles)==1) {
	header("location:detalles.php");
}else{
	echo "fallo al eliminar";
}

?>