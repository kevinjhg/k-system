<?php 
require_once ("../conexionbd/conexion.php");


 ?>


<!DOCTYPE html>
<html>
<head>
	<title>Singup</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>

<header class="header">
	<div class="contenedor logo-nav-contenedor">
		
	<a href="#" class="logo"><img src="../imagenes/logo2.jpg" width="70"></a>
	<a href="../index.php"><h2>COMPANY <br> <br>CENTER® </h2></a>
	<nav class="navegacion">
		<ul class="nav">
		
		
		
	 </ul>
	</div>
 </header>

		
		


<form class="form" action="post.php" method="POST">
<h1 >  Registro</h1>
<span>o <a href="../login/Login.php">Inicia</a></span>
<br>
<p>Nombre:</p>
<input type="text" required="" name="nombre" placeholder="Ingrese su Nombre">
<p>Cedula:</p>
<input type="number" maxlength="8" required="" name="cedula" placeholder="Ingrese su C.I">
<p>Email:</p>
<input type="email" required="" name="email" placeholder="Ingrese su Mail">
<p>Contraseña:</p>
<input type="password" minlength="5" required="" name="clave" placeholder="Ingrese su contraseña">
<p>Confirmar contraseña:</p>
<input type="password" required="" name="confir_clave" placeholder="confirmar su contraseña">

<input type="submit"  value="Registrar">

</form>



</body>
</html>