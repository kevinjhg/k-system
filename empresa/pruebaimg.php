<?php 

require_once"../conexionbd/conexion.php";
require_once"usuario.php";
 



$c= new conexion;

 $conexion=$c->conecta();
 $obj =new usuario();
$sql="SELECT * FROM tbimg ";

$datos = $obj->mostrar($sql);
?>


<!DOCTYPE html>
<html>
<head>

	 <!--materialize-->
    <link type="text/css" rel="stylesheet" href="../css/materialize/css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

	<meta charset="utf-8">
	<title>img</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	 
	<link rel="stylesheet" type="text/css" href="../css_icon/all.min.css">
	
	<script type="text/javascript"></script>
<?php require_once"buscar_articulos.php";
   
   if (empty($_GET["busqueda"])) {
  $busqueda="";
}else{
$busqueda=$_GET["busqueda"];
}          
  

if (isset($_GET["buscap"])) {
	$sql="SELECT * FROM tbimg where articulo like '".$busqueda."%'";

$datos = $obj->mostrar($sql);
}

?>
</head>

<body class="body_galeria">
	

	<form style="margin-top: 2%; margin:auto; width: 90%;" action="cargar.php" 
	method="post" enctype="multipart/form-data">
	<label>Nombre:</label>
		<input style="width: 200px;" type="text" name="articulo">
		<label>Stock:</label>
		<input style="width: 200px;" type="number" name="stock">
		<label>Precio:</label>
		<input style="width: 200px;" type="number" name="precio">

		<input class="" type="file" name="img">
		<button type="submit"  class="btn btn-success my-2 my-sm-0" >GUARDAR</button>
	</form>
	<hr>



<main class="container">
	<div class="row">
	     <div style="background: none;" class="col s12 center-aling">
	     <h2 class="titulo">Lightbox</h2>

	     </div>
 </div>

 <div class="row galeria">

 	<div class="col s12 m4 l3">

 		<div class="material-placeholder">
       <?php foreach ($datos as $key) { ?> 
<?php	$imagen='<img class=" materialboxed"  alt="" data-caption="'.$key['articulo'].'" src="'.$key['ruta'].'">';
	echo$imagen;
	$articulo=$key["articulo"];
	$precio=$key["precio"];
	$preciobs=$key["preciobs"];


	 echo "<label class='dataimg'>".$articulo."<br>";
	 echo $precio."$"."<br>";
	 echo $preciobs."Bs";"

     </label>
	 "


	 ?>
 			
 		</div>
 	</div>
 	<div class="col s12 m4 l3">
 			
 		<div class="material-placeholder">
        
<?php	$imagen='<img class="responsive-img materialboxed" src="'.$key['ruta'].'">';
	}?>
 			
 		</div>
 	</div>
 </div>
 </main>


<!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="../css/materialize/js/materialize.min.js"></script>
<script src="main.js"></script>


  </body>
</html>