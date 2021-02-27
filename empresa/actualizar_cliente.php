
<!DOCTYPE html>
<html>
<head>
	<title>Actualizar clientes</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<meta charset="utf-8">
	<script type="text/javascript"></script>

	
    <link rel="stylesheet" type="text/css" href="../bootstrap-4.0.0/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css_icon/all.min.css">
	<?php

require_once"sidebar.php";
require_once"header.php";
		
	require_once "../conexionbd/conexion.php";
require_once "clases/clase_clientes.php";

?>
	</head>





<body>






 


<?php
$id_cliente=$_GET['parametro'];

$obj = new cliente();
$datos=$obj->mostrar("SELECT  * FROM clientes where id_cliente='$id_cliente'");


?>	
 <div>
 	
<form class="form" action="post_datos_clientes.php" method="POST">

<h3>Editar Cliente</h3>
<?php
foreach ($datos as $key) {
 

?>


<p>Nombre:</p>
<input autocomplete="off" type="text" required="" name="nombre" value="<?php echo $key['nombre'];?>" placeholder="Ingrese Nombre">
<p>ID:</p>
<input autocomplete="off" maxlength="8"  type="number"  value="<?php echo $id_cliente;?>"     name="id_cliente" placeholder="Ingrese ID"  >
<p>Cedula:</p>
<input autocomplete="off" type="number" step="any" required="" name="cedula" value="<?php echo $key['cedula'];?>" placeholder="Ingrese Cedula">
<p>Telefono:</p>
<input autocomplete="off" type="number" step="any" required="" name="telefono" value="<?php echo $key['telefono'];?>" placeholder="Ingrese Estado">
<p>Estado:</p>
<select style="width: 95%; outline: none; border:none; border-bottom: 2px solid #eee;" name="estado" >
	<option id="option1" >1</option >
	<option id="option2" >0</option>
</select>
<div class="caja_btn_act">
<a id="btnvolver"  href="tabla_clientes.php">VOLVER</a>
<input type="submit"  value="GUARDAR">
</div>
<?php
}

?>

<input type="hidden" name="funcion" value="modificar">
<input type="hidden" name="id_cliente2" value="<?php echo $id_cliente;?>">


</form>
<?php require_once"footer.php";?>
</div>
</body>
</html>