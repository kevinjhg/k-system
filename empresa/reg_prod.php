

<html>
	<head>
		<title>Nuevo Producto</title>
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
<form  class="form" action="post.php" method="POST">
<h3 style=" color: white; text-align:left; background: #353535; padding: 2%; margin-bottom: 1%;">Nuevo Producto</h3>
<a  href="home.php"><i style="margin-bottom: 4%;" class="fas fa-angle-double-left"></i></a>





<p>Nombre:</p>
<input autocomplete="off" type="text" required="" name="nombre" placeholder="Ingrese nombre...">
<p>Cantidad:</p>
<input autocomplete="off" type="number" step="any" maxlength="10" required="" name="cantidad" placeholder="Ingrese Cantidad...">
<p>Precio:</p>
<input autocomplete="off" type="number" step="any" maxlength="10" required="" name="precio" placeholder="Ingrese Precio...">
<input  type="hidden" name="estado">

<div class="caja_btn_act">
	<a id="btnvolver" href="tabla_prod.php" ><i style="font-size: 20px;" class="fas fa-eye">Stock</i></a>
<input type="submit"  value="GUARDAR">

</div>
</form>
</div>




	

		 
		

		 </div>
		 <?php require_once"footer.php";?>
	</body>
</html>