<?php
require_once "../conexionbd/conexion.php";
require_once "metodocrud_empresa.php";

$nombre_empresa =$_POST['nombre_empresa'];
$sector_empresa =$_POST['sector_empresa'];
$valor_empresa =$_POST['valor_empresa'];
$ing_3meses =$_POST['ing_3meses'];

$datos=array(

	$nombre_empresa,
	$sector_empresa,
	$valor_empresa,
	$ing_3meses,
	
);

$obj= new Empresa();
$resultado = $obj->insertarDatosempresa($datos);
if($resultado!=FALSE){

	echo "<script>alert('Su empresa se  ha resgistrado  con éxito');window.location='../home/home.php'</script>";

}

else{
	
	echo "<script>alert('Esta empresa ya esta registrada');window.history.go(-1);</script>";
}


