
<!DOCTYPE html>
<html>
<head>
	<title>Actualizar productos</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<meta charset="utf-8">
	<script type="text/javascript"></script>

	
    <link rel="stylesheet" type="text/css" href="../bootstrap-4.0.0/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css_icon/all.min.css">
	<?php

require_once"sidebar.php";
require_once"header.php";
		
require_once "../conexionbd/conexion.php";
require_once "usuario.php";
;
		
?>
	</head>





<body>






 


<?php
$idproductos=$_GET['parametro'];

$obj = new usuario();
$datos=$obj->mostrar("SELECT  * FROM productos where idproductos='$idproductos'");


?>	
 
 	
<form class="form"  action="post_datos_prod.php" method="POST">

<h2 style=" color: white; text-align:left; background: #353535; padding: 2%; margin-bottom: 1%;">Editar Producto</h2>
<?php
foreach ($datos as $key) {
 

?>


<p>Nombre:</p>
<input autocomplete="off" type="text" required="" name="nombre" value="<?php echo $key['nombre'];?>" placeholder="Ingrese  Nombre">
<p>ID:</p>
<input autocomplete="off" maxlength="8"  type="number"  value="<?php echo $idproductos;?>"     name="idproductos" placeholder="Ingrese  ID"  >
<p>Cantidad:</p>
<input autocomplete="off" type="number" step="any" required="" name="cantidad" value="<?php echo $key['cantidad'];?>" placeholder="Ingrese  cantidad">
<p>Precio:</p>
<input autocomplete="off" type="number" step="any" required="" name="precio" value="<?php echo $key['precio'];?>" placeholder="Ingrese  precio">
<p>Estado:</p>
<select  name="estado" >
	<option id="option1" >1</option >
	<option id="option2" >0</option>
</select>
<div class="caja_btn_act">
<a id="btnvolver"  href="tabla_prod.php">VOLVER</a>
<input type="submit"  value="GUARDAR">
</div>
<?php
}

?>

<input type="hidden" name="funcion" value="modificar">
<input type="hidden" name="idproductos2" value="<?php echo $idproductos;?>">
<input type="hidden" name="clave" value="<?php echo $key['clave'];?>">

</form>
<?php require_once"footer.php";?>
</body>
</html>