<?php
		session_start();
		if (!isset($_SESSION["email"])) {
			header("location:../login/login.php");
		}


 	
 	
		?>

<html>
	<head>
		<title>Registrar empresa</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="../css/style.css">
	</head>
	<body>
		

		<header class="header">
	<div class="contenedor logo-nav-contenedor">
		
	<a href="#" class="logo"><img src="../imagenes/logo2.jpg" width="70"></a>
	<p>Bienvenido:<br> <?php echo $_SESSION['nombre']?></p>
	 <a href="index.php"><h2>COMPANY<br> <br>CENTER® </h2></a>
	<nav class="navegacion">
		<ul class="nav">
		
		<li><a  href="cerrar_sesion.php"><img id="btn_cerrar" src="../imagenes/cerrar.jpg"><br>cerrar cesión</a></li>
		
	 </ul>
	</div>
 </header>
			

		<div class="cont_form">
			
			<div class="info_empresa">
				<img class="img_cont" src="../imagenes/empresa.jpg">
				<div class="fondo"><img class="imgcontacto" src="../imagenes/Empresa2.png"><h2 style="color: lightgreen;">Registo de empresa</h2>
				</div>

				
				
			</div>





		 
		 <form class="formempresa" method="POST" action="insert_empresa.php" >
		 	
		 	<p>Nombre de la Empresa</p>
		 	<input type="text" required="" name="nombre_empresa" placeholder="Ingrese nombre de la empresa">

		 	

		 	<p>Sector de la empresa</p>
		 	<select id="selectempresa" name="sector_empresa">
		 		<option>Sector agropecuario</option>

		 		<option>Sector industrial</option>
		 		<option>Sector servicios</option>
		 		<option>Sector informacion</option>
		 		<option>Sector quinario</option>

		 	</select>
		 	<br>
		 	<p>Valor de la empresa</p>
		 	<input type="number" required="" name="valor_empresa" placeholder="Ingrese Valor de la empresa">
		 	
		    <p>Ingresos en los ultimos tres meses</p>
		 	<input type="number" required="" name="ing_3meses" placeholder="Ingrese sus ingresos en los ultimos tres meses">
		

		 	<input type="submit" name="btnempresa" value="Enviar"></input>
		 		<input type="hidden" name="btn" value="Enviar">


		 	




		 </form>
		 

		 </div>
		 <?php require_once"footer.php";?>
	</body>
</html>