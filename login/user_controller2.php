<?php
require_once "../singup/usuario.php";
require_once'../conexionbd/conexion.php';

$c =new conexion();
$conexion=$c->conecta();

if(isset($_POST['btn'])){
	$email = $_POST['email'];
	$clave = $_POST['clave'];
	$estado= $_POST['estado'];


	if (empty($email) || empty($clave)) {
		echo "esta vacio";
	}else{
		$usuario =new usuario;
		$resultado = $usuario->iniciar($email,$clave,$estado);
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
			$sql = "SELECT * FROM empresa  WHERE cedula_usuario='{$_SESSION['cedula']}'";;
			$query = mysqli_query($conexion,$sql);
			$cont = $query->num_rows;
			if($cont<1)
				echo "<script>location.href='../empresa/reg_empresa.php'</script>";
			else
				echo "<script>location.href='../home/home.php'</script>";
;
		}else{
			
			echo "<script>alert('Usuario no registrado o esta inhabilitado');window.history.go(-1)</script>";
		}
	}
}