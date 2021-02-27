<?php
  
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="bootstrap-4.0.0/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css_icon/all.min.css">
	
	<meta charset="utf-8">
</head>


<body style="background-image: url('imagenes/img10.jpg');">

<header class="header">
	<div class="contenedor logo-nav-contenedor">
		
	<a href="#" class="logo"><img src="imagenes/logo2.jpg" width="40"></a>
	<a href="index.php"><h2>LPT-STORE® </h2></a>
	<nav class="navegacion">
		<ul class="nav">
		
		
		
	 </ul>
	</div>
 </header>




<form style="background: rgba(200,200,200,0.9);" class="form_login" action="login/usercontroller.php" method="POST">
	<h1 style="width: 100%; text-align: center;">Inicio</h1>
	
	<br>

<input type="text" value=""  name="nombre" required="" placeholder="Ingrese usuario">
<input type="password" value="" required="" name="clave" placeholder="*******">
<input class="btn-login" type="submit"  name="btn" value="Inicio">

<br>

</form>
</div>
</body>
</html>