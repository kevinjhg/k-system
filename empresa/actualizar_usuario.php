
<!DOCTYPE html>
<html>
<head>
	<title>Actualizar Usuarios</title>

	<link rel="stylesheet" type="text/css" href="../css/style.css">
     <link rel="stylesheet" type="text/css" href="../bootstrap-4.0.0/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css_icon/all.min.css">
	<meta charset="utf-8">
	<script type="text/javascript"></script>

	
    <link rel="stylesheet" type="text/css" href="../bootstrap-4.0.0/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css_icon/all.min.css">
	<?php
require_once "../conexionbd/conexion.php";
require_once "clases/clase_usuario.php";
require_once"sidebar.php";
require_once"header.php";
		


		
?>
	</head>





<body>


<?php
$cedula=$_GET['parametro'];

$obj = new usuario();
$datos=$obj->mostrar_usuario("SELECT  * FROM usuario where cedula='$cedula'");


?>	
 <div>
 	
<form class="form" action="post_act_usuario.php" method="POST">
<h2 style="color: white; text-align:left; background: #353535; padding: 2%;">Editar Usuario</h2>

<?php
foreach ($datos as $key) {
 

?>
<p>Nombre:</p>
<input type="text" required="" name="nombre" value="<?php echo $key['nombre'];?>" placeholder="Ingrese Nombre">

<p>Cedula:</p>
<input type="number"  required="" name="cedula" value="<?php echo $key['cedula'];?>" placeholder="Ingrese Cedula">
<p>email:</p>
<input type="email"  required="" name="email" value="<?php echo $key['email'];?>" placeholder="Ingrese email">
<p>Clave:</p>
<input type="password" required="" name="clave" value="<?php echo $key['clave'];?>" placeholder="Ingrese Clave">
<p>Telefono:</p>
<input type="number"  required="" name="telefono" value="<?php echo $key['telefono'];?>" placeholder="Ingrese Estado">
<p>Estado:</p>
<select style="width: 95%; outline: none; border:none; border-bottom: 2px solid #eee;" name="estado" >
	<option id="option1" >1</option >
	<option id="option2" >0</option>
</select>
<div class="caja_btn_act">
<a id="btnvolver"  href="tabla_usuario.php">VOLVER</a>
<input type="submit"  value="GUARDAR">
</div>
<?php
}

?>

<input type="hidden" name="funcion" value="modificar">
<input type="hidden" name="cedula2" value="<?php echo $cedula;?>">


</form>
</div>
<?php require_once"footer.php";?>
</body>
</html>