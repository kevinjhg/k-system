<?php
  
session_start();



	require_once'../conexionbd/conexion.php';
	require_once '../singup/usuario.php';
	require_once '../login/usercontroller.php';

?>




<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<meta charset="utf-8">
</head>


<body>

<header class="header">
	<div class="contenedor logo-nav-contenedor">
		
	<a href="#" class="logo"><img src="../imagenes/logo2.jpg" width="70"></a>
	<a href="../index.php"><h2>COMPANY <br><br>CENTER® </h2></a>
	<nav class="navegacion">
		<ul class="nav">
		
		
		
	 </ul>
	</div>
 </header>


<?php

 		
 		$obj= new usuario();
 		$sql=" SELECT nombre,cedula,email,clave,estado FROM Usuario ";

 		$datos = $obj->mostrar($sql);
 		
 		
 		
 			
 			
            
            ?>
<form class="form" action="user_controller2.php" method="POST">
	<h1>Inicio</h1>
	
	<br>

<input type="text"  name="email" required="" placeholder="Ingrese su mail">
<input type="password" required="" name="clave" placeholder="Ingrese su contraseña">
<input type="submit"  name="btn" value="Inicio">
<?php foreach ($datos as $key ) {
	?>
<input type="hidden" name="estado" value="$key['estado']">
<?php
}
?>
<br>
<span>No tiene cuenta? <a href="../singup/SingUp.php">Registrate</a></span>

</form>
</div>
</body>
</html>