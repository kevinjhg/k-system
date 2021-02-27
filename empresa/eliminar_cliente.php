<?php

require_once "../conexionbd/conexion.php";
require_once "clases/clase_clientes.php";

$id_cliente=$_GET['id_cliente'];



$obj= new cliente();
if ($obj->eliminar_cliente($id_cliente)==1) {
	header("location:tabla_clientes.php");
}else{
	echo "fallo al eliminar";
}

?>