<?php

require_once "../conexionbd/conexion.php";
require_once "clases/clase_usuario.php";

$cedula=$_GET['cedula'];



$obj= new usuario();
if ($obj->eliminar_usuario($cedula)==1) {
	header("location:tabla_usuario.php");
}else{
	echo "fallo al eliminar";
}

?>