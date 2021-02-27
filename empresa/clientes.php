
<html>
	<head>
		<title>Nuevo Cliente</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="../css/style.css">
		<link rel="stylesheet" type="text/css" href="../bootstrap-4.0.0/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../css_icon/all.min.css">
		<?php 
require_once"sidebar.php";
require_once"header.php";
		
require"../conexionbd/conexion.php";




?>
	</head>
	<body >
		

	

<form class="form" action="post_clientes.php" method="post">

	<h3 style="width: 100%;">Nuevo Cliente</h3>
	<a  href="home.php"><i style="margin-bottom: 4%;" class="fas fa-angle-double-left"></i></a>
	<p>Nombre:</p>
 <input autocomplete="off" required="" type="text" placeholder="Ingrese Nombre..." name="nombre">
 <p>Cedula:</p>
  <input autocomplete="off" required="" type="number" placeholder="Ingrese Cedula..." name="cedula">
  <p>Telefono</p>
   <input autocomplete="off" required="" type="number" placeholder="Ingrese Telefono..." name="telefono">
   <input type="hidden" name="estado">
   <div class="caja_btn_act">
	<a id="btnvolver" href="tabla_prod.php" ><i style="font-size: 20px;" class="fas fa-eye">clientes</i></a>
<input type="submit"  value="GUARDAR">

</div>
    
</form>

<?php require_once"footer.php";?>
</body>
</html>