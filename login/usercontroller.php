<?php
require_once "../singup/usuario.php";
require_once'../conexionbd/conexion.php';

$c =new conexion();
$conexion=$c->conecta();

if(isset($_POST['btn'])){
	$nombre = $_POST['nombre'];
	$clave = $_POST['clave'];

	if (empty($nombre) || empty($clave)) {
		echo "esta vacio";
	}else{
		$usuario =new user;
		$resultado = $usuario->iniciar($nombre,$clave);
		if($resultado!=FALSE){
			session_start();
			foreach($resultado as $valor){
				$_SESSION['email']=$valor['email'];
				$_SESSION['cedula']=$valor['cedula'];
				$_SESSION['nombre']=$valor['nombre'];
				$_SESSION['clave']=$valor['clave'];
				$_SESSION['rango']=$valor['rango'];
				
				$_SESSION['estado']=$valor['estado'];
				
			}
			echo "<script>alert('Bienvenido ".$_SESSION['nombre']."');</script>";
			
				echo "<script>location.href='../empresa/home.php'</script>";
;
		}else{
			
			echo "<script>alert('No tiene premiso o contraseña invalida ');window.history.go(-1)</script>";
		}
	}
}