<?php
require_once"../conexionbd/conexion.php";
$c= new conexion;
 $conexion=$c->conecta();
if (isset($_FILES["img"])) {
	$nombreimg=$_FILES["img"]['name'];
	$articulo=$_POST["articulo"];
	$stock=$_POST["stock"];
	$precio=$_POST["precio"];

	$ruta=$_FILES['img']['tmp_name'];
	$destino="../imagenes/".$nombreimg;
	if (copy($ruta,$destino)) {
		$sql="INSERT INTO `tbimg`(`nombreimg`,`articulo`,`stock`,`precio`,`estado`,`ruta`) VALUES ('$nombreimg','$articulo','$stock','$precio','1','$destino')";
		$res=mysqli_query($conexion,$sql);
		if ($res) {
			echo'<script type="text/javascript">alert("correcto");window.location="pruebaimg.php"</script>';
		}else{
			die("error".mysqli_error($conexion));
		}
	}

}

?>
