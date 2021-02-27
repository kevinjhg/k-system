<?php

require_once "../conexionbd/conexion.php";
require_once "usuario.php";

$idproductos=$_GET['idproductos'];



$obj= new usuario();
if ($obj->eliminar($idproductos)==1) {
	header("location:tabla_prod.php");
}else{
	echo "fallo al eliminar";
}

?>