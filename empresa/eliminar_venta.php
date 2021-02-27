<?php

require_once "../conexionbd/conexion.php";
require_once "clases/clase_venta.php";

$idventa=$_GET['idventa'];



$obj= new venta();
if ($obj->eliminar_venta($idventa)==1) {
	header("location:tabla_ventas.php");
}else{
	echo "fallo al eliminar";
}

?>