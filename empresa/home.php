<?php 

	include "../conexionbd/conexion.php";
require_once "usuario.php";
require_once "panel_ventatotal.php";


		
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Inicio</title>
	
	<link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" type="text/css" href="../bootstrap-4.0.0/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css_icon/all.min.css">
	<?php require_once"sidebar.php";
       require_once"header.php";?>
	<script type="text/javascript"></script>
	<meta charset="utf-8">
</head>
<input class="input1" type="checkbox" id="check" name="">
<label class="label1" for="check">
		<img id="boton" src="imagenes/lineas.png" width="1" >
		<img  id="cerrar2" src="imagenes/cerrar.png.png">
</label>
       <!-- contenedor de barra lateral left -->
     


<?php
error_reporting(0);
$newdolar=$_POST["preciodolar"];
$obj=new usuario();
$conexion=$obj->conecta(); 
///////////////////////////////////////update precio del dolar/////////////
if ($_POST["preciodolar"]) {
	$sql="UPDATE dolar set preciodolar=$newdolar where id='1'";
	$sql=mysqli_query($conexion,$sql);
    
}

/////////////////////////////traemos el valor del dolar de la bd precio del dolar/////////////

$sql="SELECT  * FROM dolar ";

$datos = $obj->mostrar($sql);


foreach ($datos as $key ) {
	
$preciodolarbs=$key['preciodolar'];}
	


	


   


///////////////////////////////////////llamada precio del dolar//////////////////////////////7
 $obj= new usuario();
      $c =new conexion();
        $conexion=$c->conecta(); 

$sql=" SELECT * FROM productos , dolar ";

 		
 	


  $query=mysqli_query($conexion,$sql); 

                 while($row = mysqli_fetch_array($query)) 
                 {
 	
   
$preciobsd=$row["preciodolar"] * $row["precio"];


  
/*actualizamos los precios de los productos en bs*/ 

   $sql2=" UPDATE productos set preciobs=$preciobsd  where idproductos=".$row['idproductos']."";
    $sql2=mysqli_query($conexion,$sql2);
      
 
 
     
	}
?>

<body><!-- inicio body -->




     

<div class="main-content">
	
<main class="main_dahsboard">

	<h2 class="dashboard-title"><i class="fas fa-eye"></i>Vista General</h2>
	<div class="dashboard-cards">
		<div class="card-single"></span>
		     <div class="card-body">
		     	<span><i class="fas fa-chart-line"></i></span>
		     	<div>
		     		<h5>Balance de ventas</h5>
		     		<h4><?php echo $TotalPrecios;?>$</h4>
		     	</div>	
		     	
		      </div>
		      <div class="card-footer">
		      	<a href="">ver</a>
		      </div>
	    </div>

	    <div style="background: #fff; " class="card-single"></span>
		     <div class="card-body">
		     	<span ><i class="fas fa-shopping-cart"></i></span>
		     	<div>
		    		<h5>Ventas Realizadas</h5>
		    		<?php date_default_timezone_set('America/Caracas');

if (date("H:i")=="02:22") {
 $totalventas=="0" ;
echo "hola";

 }echo date("H:i");?>


		     		<h4><?php echo $totalventas ?></h4>
		     	</div>	
		     	
		      </div>
		      <div class="card-footer">
		      	<a href="">ver</a>
		      </div>
	    </div>

	    <div style="background: #4BDC96;" class="card-single"></span>
		     <div class="card-body">
		     	<span ><i class="fas fa-dollar-sign"></i></span>
		     	<div>
		     		<h5>Precio del Dolar</h5>
		     		<h4><?php echo number_format($preciodolarbs,2,",",".") ;?>Bs</h4>
		     	</div>	
		     	
		      </div>
		      <div class="card-footer">
		      	<form action="" method="POST"><!--formulario de precio del dolar-->

                  <input style="border:0;
	outline: none;border-bottom: 1px solid #ccc; "  type="number" name="preciodolar" placeholder="Escribir precio...">

                </form>
		      </div>
	    </div>



	</div>



</main>
</div>


<?php date_default_timezone_set('America/Caracas');

$fecha_actual=date("Y/m/d H:i:s");
if (date("H:i")=="02:28") {
	

	

   echo'<div style=" margin: auto; background: blue; margin-top: 1%; width: 600px; height: 40px;">
    	<input type="search" name="">
    </div>';
    }
?>



	<script>
		
		function cerrar(){

 document.getElementById('mostrarocultar1').style.display="none";
}

 function mostrar(){

 document.getElementById('mostrarocultar1').style.display="block";

}


function cerrarmodal(){
	document.getElementById('modal').style.display="none";
}




	</script>
<?php require_once"footer.php";?>

</body>

</html>
