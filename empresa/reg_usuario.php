

<html>
	<head>
		<title>Nuevo Usuario</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="../css/style.css">
		<link rel="stylesheet" type="text/css" href="../bootstrap-4.0.0/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="../css_icon/all.min.css">
		<?php 


require_once"header.php";
require_once"sidebar.php";



?>
	</head>
	<body >
		


<div>
<form  class="form" action="post_datos_usuario.php" method="POST">
<h3 style=" color: white; text-align:left; background: #353535; padding: 2%; margin-bottom: 1%;">Nuevo Usuario</h3>
<a  href="home.php"><i style="margin-bottom: 4%;" class="fas fa-angle-double-left"></i></a>





<p>Nombre:</p>
<input type="text" autocomplete="off" required="" name="nombre" placeholder="Ingrese Nombre...">
<p>Cedula:</p>
<input type="number" autocomplete="off" maxlength="8" required="" name="cedula" placeholder="Ingrese Cedula...">
<p>Email:</p>
<input type="email" autocomplete="off"  required="" name="email" placeholder="Ingrese Email...">

<p>Contraseña:</p>
<input type="password"autocomplete="off" required="" name="clave" placeholder="Ingrese Contraseña...">
<p>Telefono:</p>
<input type="number" autocomplete="off"  required="" name="telefono" placeholder="Ingrese Telefono...">
<input type="hidden" name="estado">


<div class="caja_btn_act">
	<a id="btnvolver" href="tabla_prod.php" ><i style="font-size: 20px;" class="fas fa-eye">Users</i></a>
<input type="submit"  value="GUARDAR">

</div>
</form>
</div>




	

		 
		

		 </div>
		 <?php require_once"footer.php";?>
	</body>
</html>