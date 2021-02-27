<!DOCTYPE html>
<html>
	<head>
		<title>FACTURA</title>
		<meta charset="utf-8">
		
		<link rel="stylesheet" type="text/css" href="../css/style.css">
		
	</head>




	<style type="text/css">
	table, th, td{
		border:1px solid black;
		border-collapse: collapse;
		margin-left: 40px;
		

	}
	th, td{
		padding: 10px;
	}
	




</style>
	<body>
		<article>
		

  
  <table style="width:96% ; margin-top: 100px;">
				<tr style="background-color: silver;
		
">
					<th colspan="5">LPT-STORE</th>
				</tr>
				<tr style="background-color: rgba(0,0,0,0.2);
		
">
					<th>ID</th>
					<th>Nombre</th>
					<th>Cantidad</th>
					<th>Precio unitario</th>
					<th>Precio total</th>
				</tr>

  



<?php

require_once '../conexionbd/conexion.php';

 require_once"usuario.php"; 
 require_once"clases/clase_clientes.php"; 
error_reporting(0);
if (empty($_POST["Producto"])) {
	$Producto="";
}else{
$Producto=$_POST["Producto"];
}
if (empty($_POST["Producto2"])) {
	$Producto2="";
}else{
$Producto2=$_POST["Producto2"];
}
if (empty($_POST["Producto3"])) {
	$Producto3="";
}else{
$Producto3=$_POST["Producto3"];
}
if (empty($_POST["Producto4"])) {
	$Producto4="";
}else{
$Producto4=$_POST["Producto4"];
}
if (empty($_POST["Producto5"])) {
	$Producto5="";
}else{
$Producto5=$_POST["Producto5"];
}
if (empty($_POST["Producto6"])) {
	$Producto6="";
}else{
$Producto6=$_POST["Producto6"];
}
if (empty($_POST["Producto7"])) {
	$Producto7="";
}else{
$Producto7=$_POST["Producto7"];
}
if (empty($_POST["Producto8"])) {
	$Producto8="";
}else{
$Producto8=$_POST["Producto8"];
}
if (empty($_POST["Producto9"])) {
	$Producto9="";
}else{
$Producto9=$_POST["Producto9"];
}

if (empty($_POST["Producto10"])) {
	$Producto10="";
}else{
$Producto10=$_POST["Producto10"];
}

if (empty($_POST["Precio"])) {
	$Precio="";
}else{
$Precio=$_POST["Precio"];
}

if (empty($_POST["Precio2"])) {
	$Precio2="";
}else{
$Precio2=$_POST["Precio2"];
}
if (empty($_POST["Precio3"])) {
	$Precio3="";
}else{
$Precio3=$_POST["Precio3"];
}

if (empty($_POST["Precio4"])) {
	$Precio4="";
}else{
$Precio4=$_POST["Precio4"];
}

if (empty($_POST["Precio5"])) {
	$Precio5="";
}else{
$Precio5=$_POST["Precio5"];
}

if (empty($_POST["Precio6"])) {
	$Precio6="";
}else{
$Precio6=$_POST["Precio6"];
}

if (empty($_POST["Precio7"])) {
	$Precio7="";
}else{
$Precio7=$_POST["Precio7"];
}

if (empty($_POST["Precio8"])) {
	$Precio8="";
}else{
$Precio8=$_POST["Precio8"];
}

if (empty($_POST["Precio9"])) {
	$Precio9="";
}else{
$Precio9=$_POST["Precio9"];
}

if (empty($_POST["Precio10"])) {
	$Precio10="";
}else{
$Precio10=$_POST["Precio10"];
}


 $cedula=$_POST["cedula"];
 $obj= new cliente();
$sq1="SELECT * FROM clientes where cedula=$cedula";
$datos = $obj->mostrar($sq1);

			foreach($datos as $key){
				$id_cliente=$key['id_cliente'];

			}

				
$fecha=$_POST["fecha"];
$Producto=$_POST['codprod'];

$obj= new usuario();
$sq1=" SELECT * FROM productos WHERE idproductos=$Producto";
$datos = $obj->mostrar($sq1);

foreach ($datos as $key) {
	$Precio=$key['precio'];
    
}
$cantidad1=$_POST["cantidad1"];


$total=($cantidad1*$Precio);







$Producto2=$_POST['codprod2'];

$sq1=" SELECT * FROM productos WHERE idproductos=$Producto2";
$datos = $obj->mostrar($sq1);

foreach ($datos as $key) {
	$Precio2=$key['precio'];
    
}
	
    

$cantidad2=$_POST["cantidad2"];

$total2=($cantidad2*$Precio2);




$Producto3=$_POST['codprod3'];


$sq1=" SELECT * FROM productos WHERE idproductos=$Producto3";
$datos = $obj->mostrar($sq1);

foreach ($datos as $key) {
	$Precio3=$key['precio'];
    
}
$cantidad3=$_POST["cantidad3"];

$total3=($cantidad3*$Precio3);



$Producto4=$_POST['codprod4'];


$sq1=" SELECT * FROM productos WHERE idproductos=$Producto4";
$datos = $obj->mostrar($sq1);

foreach ($datos as $key) {
	$Precio4=$key['precio'];
    
}
    

$cantidad4=$_POST["cantidad4"];


$total4=($cantidad4*$Precio4);



$Producto5=$_POST['codprod5'];


$sq1=" SELECT * FROM productos WHERE idproductos=$Producto5";
$datos = $obj->mostrar($sq1);

foreach ($datos as $key) {
	$Precio5=$key['precio'];
    
}
    

$cantidad5=$_POST["cantidad5"];


$total5=($cantidad5*$Precio5);


$Producto6=$_POST['codprod6'];


$sq1=" SELECT * FROM productos WHERE idproductos=$Producto6";
$datos = $obj->mostrar($sq1);

foreach ($datos as $key) {
	$Precio6=$key['precio'];
    
}
    

$cantidad6=$_POST["cantidad6"];


$total6=($cantidad6*$Precio6);



$Producto7=$_POST['codprod7'];


$sq1=" SELECT * FROM productos WHERE idproductos=$Producto7";
$datos = $obj->mostrar($sq1);

foreach ($datos as $key) {
	$Precio7=$key['precio'];
    
}
    

$cantidad7=$_POST["cantidad7"];

$total7=($cantidad7*$Precio7);




$Producto8=$_POST['codprod8'];



$sq1=" SELECT * FROM productos WHERE idproductos=$Producto8";
$datos = $obj->mostrar($sq1);

foreach ($datos as $key) {
	$Precio8=$key['precio'];
    
}

$cantidad8=$_POST["cantidad8"];

$total8=($cantidad8*$Precio8);



$Producto9=$_POST['codprod9'];


$sq1=" SELECT * FROM productos WHERE idproductos=$Producto9";
$datos = $obj->mostrar($sq1);

foreach ($datos as $key) {
	$Precio9=$key['precio'];
    
}
    

$cantidad9=$_POST["cantidad9"];


$total9=($cantidad9*$Precio9);


$Producto10=$_POST['codprod10'];


$sq1=" SELECT * FROM productos WHERE idproductos=$Producto10";
$datos = $obj->mostrar($sq1);

foreach ($datos as $key) {
	$Precio10=$key['precio'];
    
}
    

$cantidad10=$_POST["cantidad10"];


$total10=($cantidad10*$Precio10);
?>

<?php 
$subtotal=$total+$total2+$total3+$total4+$total5+$total6+$total7+$total8+$total9+$total10;
$iva=$subtotal*(16/100) ;
$descuento = 0;
$fin=$subtotal+$iva;

$obj= new usuario();
$sql="SELECT * FROM dolar";
$datos = $obj->mostrar($sql);
  foreach ($datos as $key ) {

$preciobs=$total*$key["preciodolar"];
$preciobs2=$total2*$key["preciodolar"];
$preciobs3=$total3*$key["preciodolar"];
$preciobs4=$total4*$key["preciodolar"];
$preciobs5=$total5*$key["preciodolar"];
$preciobs6=$total6*$key["preciodolar"];
$preciobs7=$total7*$key["preciodolar"];
$preciobs8=$total8*$key["preciodolar"];
$preciobs9=$total9*$key["preciodolar"];
$preciobs10=$total10*$key["preciodolar"];
$preciobstotal=$subtotal*$key["preciodolar"];
$ivad=$iva*$key["preciodolar"];
$find=$fin*$key["preciodolar"];}
 $Pagar=$_POST["Pagar"];


             
                      
                     
/*instancia*/


$obj =new usuario();
/*instancia*/

$c =new conexion();
  $conexion=$c->conecta();



 


 
 $sql="UPDATE productos SET cantidad =cantidad-$cantidad1 where idproductos = $Producto";
  $sql=mysqli_query($conexion,$sql);
	 	 
  
  

 
 $sql="UPDATE productos SET cantidad= cantidad-$cantidad2 where idproductos = $Producto2";
  $sql=mysqli_query($conexion,$sql);
  
 $sql="UPDATE productos SET cantidad =cantidad-$cantidad3 where idproductos = $Producto3";
  $sql=mysqli_query($conexion,$sql);

  $sql="UPDATE productos SET cantidad =cantidad-$cantidad4 where idproductos = $Producto4";
  $sql=mysqli_query($conexion,$sql);

  $sql="UPDATE productos SET cantidad =cantidad-$cantidad5 where idproductos = $Producto5";
  $sql=mysqli_query($conexion,$sql);
  $sql="UPDATE productos SET cantidad =cantidad-$cantidad6 where idproductos = $Producto6";
  $sql=mysqli_query($conexion,$sql);
  $sql="UPDATE productos SET cantidad =cantidad-$cantidad7 where idproductos = $Producto7";
  $sql=mysqli_query($conexion,$sql);
  
  $sql="UPDATE productos SET cantidad =cantidad-$cantidad8 where idproductos = $Producto8";
  $sql=mysqli_query($conexion,$sql);
  
  $sql="UPDATE productos SET cantidad =cantidad-$cantidad9 where idproductos = $Producto9";
  $sql=mysqli_query($conexion,$sql);
  
  $sql="UPDATE productos SET cantidad =cantidad-$cantidad10 where idproductos = $Producto10";
  $sql=mysqli_query($conexion,$sql);
  

  









  $sql=" SELECT nombre FROM productos WHERE idproductos = '$Producto'";

  $datos = $obj->mostrar($sql);
 foreach ($datos as $key ) {
 
 

 
	$nombre=$key["nombre"];}
 
 ?>
 	

<td><?php echo "$Producto"; ?></td>
<td><?php echo $nombre; ?>   </td>
<td><?php echo "$cantidad1"; ?></td>
<td><?php echo number_format($Precio,2,",","."). ' $' ;?></td>
<td><?php echo number_format($total,2,",",".")  . ' $ | ';echo number_format($preciobs,2,",",".")."Bs";?>
	
</td>
</tr>
 <?php
 $sql=" SELECT nombre FROM productos WHERE idproductos = '$Producto2'";

  $datos = $obj->mostrar($sql);
 foreach ($datos as $key ) {
 $nombre2=$key["nombre"];

 ?>
<tr>

<td><?php echo "$Producto2";    ?></td>
<td><?php echo $nombre2; ?>   </td>
<td><?php echo "$cantidad2"; ?></td>
<td><?php echo number_format($Precio2,2,",",".").' $'; ?></td>
<td><?php echo number_format($total2,2,",",".")  . ' $ | ';echo number_format($preciobs2,2,",",".")."Bs";}?>
	
</td>
</tr>

 <?php
 $sql=" SELECT nombre FROM productos WHERE idproductos = '$Producto3'";

  $datos = $obj->mostrar($sql);
 foreach ($datos as $key ) {
 
$nombre3=$key["nombre"];
 ?>




<tr>

<td><?php echo "$Producto3";    ?></td>
<td><?php echo $nombre3; ?>   </td>
<td><?php echo "$cantidad3"; ?></td>
<td><?php echo number_format($Precio3,2,",",".").' $ '; ?></td>
<td><?php echo number_format($total3,2,",",".") . " $ |";echo number_format($preciobs3,2,",",".")."Bs";}?></td>
</tr>

 <?php
 $sql=" SELECT nombre FROM productos WHERE idproductos = '$Producto4'";

  $datos = $obj->mostrar($sql);
 foreach ($datos as $key ) {
 
$nombre4=$key["nombre"];
 ?>

<tr>

<td><?php echo $Producto4;    ?></td>
<td><?php echo $nombre4; ?>   </td>
<td><?php echo $cantidad4; ?></td>

<td><?php echo number_format($Precio4,2,",","."). ' $   '; ?></td>
<td><?php echo number_format($total4,2,",",".")  . ' $ |  ' ;echo number_format($preciobs4,2,",",".")."Bs";}?></td>
</tr>
 
 <?php
 $sql=" SELECT nombre FROM productos WHERE idproductos = '$Producto5'";

  $datos = $obj->mostrar($sql);
 foreach ($datos as $key ) {
 $nombre5=$key["nombre"];

 ?>
<tr>

<td><?php echo $Producto5;    ?></td>
<td><?php echo $nombre5; ?>   </td>
<td><?php echo "$cantidad5"; ?></td>
<td><?php echo number_format($Precio5,2,",","."). ' $   '; ?></td>
<td><?php echo number_format($total5,2,",",".")  . ' $ |  ' ;echo number_format($preciobs5,2,",",".")."Bs";}?></td>
</tr>
 <?php
 $sql=" SELECT nombre FROM productos WHERE idproductos = '$Producto6'";

  $datos = $obj->mostrar($sql);
 foreach ($datos as $key ) {
 $nombre6=$key["nombre"];
 ?>
<tr>

<td><?php echo $Producto6;    ?></td>
<td><?php echo $nombre6;?>   </td>
<td><?php echo "$cantidad6"; ?></td>
<td><?php echo number_format($Precio6,2,",","."). ' $  '; ?></td>
<td><?php echo number_format($total6,2,",",".")  . ' $|  ' ;echo number_format($preciobs6,2,",",".")."Bs";}?></td>
</tr>   
 <?php
 $sql=" SELECT nombre FROM productos WHERE idproductos = '$Producto7'";

  $datos = $obj->mostrar($sql);
 foreach ($datos as $key ) {
 $nombre7=$key["nombre"];
 ?>
<tr>

<td><?php echo $Producto7; ?></td>
<td><?php echo $nombre7; ?>   </td>
<td><?php echo "$cantidad7"; ?></td>
<td><?php echo number_format($Precio7,2,",","."). ' $   '; ?></td>
<td><?php echo number_format($total7,2,",",".")  . ' $ |  ' ;echo number_format($preciobs7,2,",",".")."Bs"; }?></td>
</tr>
 <?php
 $sql=" SELECT nombre FROM productos WHERE idproductos = '$Producto8'";

  $datos = $obj->mostrar($sql);
 foreach ($datos as $key ) {
 $nombre8=$key["nombre"];
 ?>
<tr>

<td><?php echo $Producto8;    ?></td>
<td><?php echo $nombre8; ?>   </td>
<td><?php echo "$cantidad8"; ?></td>
<td><?php echo number_format($Precio8,2,",","."). ' $   '; ?></td>
<td><?php echo number_format($total8,2,",",".")  . ' $ |  ' ;echo number_format($preciobs8,2,",",".")."Bs";}?></td>
</tr>
 <?php
 $sql=" SELECT nombre FROM productos WHERE idproductos = '$Producto9'";

  $datos = $obj->mostrar($sql);
 foreach ($datos as $key ) {
 $nombre9=$key["nombre"];

 ?>
<tr>

<td><?php echo $Producto9;?></td>
<td><?php echo $nombre9;?>   </td>
<td><?php echo "$cantidad9"; ?></td>
<td><?php echo number_format($Precio9,2,",","."). ' $   '; ?></td>
<td><?php echo number_format($total9,2,",",".")  . ' $ |  ' ;echo number_format($preciobs9,2,",",".")."Bs";}?></td>
</tr>
 <?php
 $sql=" SELECT nombre FROM productos WHERE idproductos = '$Producto10'";

  $datos = $obj->mostrar($sql);
 foreach ($datos as $key ) {
 $nombre10=$key["nombre"];
 ?>
<tr>

<td><?php echo $Producto10;    ?></td>
<td><?php echo $nombre10; ?>   </td>
<td><?php echo "$cantidad10"; ?></td>
<td><?php echo number_format($Precio10,2,",","."). ' $   '; ?></td>
<td><?php echo number_format($total10,2,",",".")  . ' $ |  ' ;echo number_format($preciobs10,2,",",".")."Bs";}?></td>
</tr>



<tr>   
<th colspan="3" rowspan="5">Pie de Factura<br><br> Fecha:<?php echo $fecha?>;</th>
</tr>

<tr>
	<th>Sub Total</th>
	<td><?php echo number_format($subtotal,2,",","."). ' $ |  ';echo number_format($preciobstotal,2,",",".")."Bs";?></td>
</tr>

<tr>
	<tH>IVA (16%)</tH>
	<td><?php echo number_format($iva,2,",",".") . ' $ | ';echo number_format($ivad,2,",",".") ."Bs";?></td>
	<tr>
		<th>Descuento(0%)</th>
		<td><?php echo number_format($descuento,2,",",".") . " $ |";echo number_format($descuento,2,",",".") ."Bs";?></td>
	</tr>
</tr>
<tr>
	<th>Total</th>
	<td><?php echo number_format($fin,2,",",".") . ' $ | ';echo number_format($find,2,",",".") . ' Bs  ';?></td>
</tr>

<a href="facturacion.php">VOLVER</a>

		
	</body>
</html>


<?php
/*insert de datos a factura general */
require"clases/clase_venta.php";
$cantidadtotal=$cantidad1+$cantidad2+$cantidad3+$cantidad4+$cantidad5+$cantidad6+$cantidad7+$cantidad8+$cantidad9+$cantidad10;

$datos=array(

	$cantidadtotal,$fecha,$id_cliente,$fin,$find

	
);

$obj= new venta();
$resultado = $obj->insertarDatosventa($datos);



if($resultado!=FALSE){

	echo "<div class='correcto'>".'venta realizada con éxito'."</div>";

}

else{
	
	echo ('No se pudo reaizar');
}








require"clases/clase_detalles.php";


/*llamada al id venta*/ 
$SQL="SELECT idventa FROM ventas where idventa=idventa ORDER BY idventa ASC";
$datos = $obj->mostrar($SQL);

 foreach ($datos as $key ) {
 $idventa=$key["idventa"];
}
echo $idventa;

$insertar="INSERT INTO `ventas_detalles`(`ventaid`,`productosid`,`cantidad_pedida`,`precio_totald`,`precio_totalbs`) VALUES ($idventa,$Producto,$cantidad1,$total,$preciobs)";

	$result=mysqli_query($conexion,$insertar);
	



$insertar2="INSERT INTO `ventas_detalles`(`ventaid`,`productosid`,`cantidad_pedida`,`precio_totald`,`precio_totalbs`) VALUES ($idventa,$Producto2,$cantidad2,$total2,$preciobs2)";

	$result=mysqli_query($conexion,$insertar2);



$insertar3="INSERT INTO `ventas_detalles`(`ventaid`,`productosid`,`cantidad_pedida`,`precio_totald`,`precio_totalbs`) VALUES ($idventa,$Producto3,$cantidad3,$total3,$preciobs3)";

	$result=mysqli_query($conexion,$insertar3);
	

	$insertar4="INSERT INTO `ventas_detalles`(`ventaid`,`productosid`,`cantidad_pedida`,`precio_totald`,`precio_totalbs`) VALUES ($idventa,$Producto4,$cantidad4,$total4,$preciobs4)";

	$result=mysqli_query($conexion,$insertar4);




	$insertar5="INSERT INTO `ventas_detalles`(`idventa`,`productosid`,`cantidad_pedida`,`precio_totald`,`precio_totalbs`) VALUES ($idventa,$Producto5,$cantidad5,$total5,$preciobs5)";

	$result=mysqli_query($conexion,$insertar5);

	$insertar6="INSERT INTO `ventas_detalles`(`ventaid`,`idproductos`,`cantidad_pedida`,`precio_totald`,`precio_totalbs`) VALUES ($idventa,$Producto6,$cantidad6,$total6,$preciobs6)";

	$result=mysqli_query($conexion,$insertar6);
	

	$insertar7="INSERT INTO `ventas_detalles`(`ventaid`,`productosid`,`cantidad_pedida`,`precio_totald`,`precio_totalbs`) VALUES ($idventa,$Producto7,$cantidad7,$total7,$preciobs7)";

	$result=mysqli_query($conexion,$insertar7);
	

	$insertar8="INSERT INTO `ventas_detalles`(`ventaid`,`productosid`,`cantidad_pedida`,`precio_totald`,`precio_totalbs`) VALUES ($idventa,$Producto8,$cantidad8,$total8,$preciobs8)";

	$result=mysqli_query($conexion,$insertar8);

	$insertar9="INSERT INTO `ventas_detalles`(`ventaid`,`productosid`,`cantidad_pedida`,`precio_totald`,`precio_totalbs`) VALUES ($idventa,$Producto9,$cantidad9,$total9,$preciobs9)";

	$result=mysqli_query($conexion,$insertar9);
	
	$insertar10="INSERT INTO `ventas_detalles`(`ventaid`,`productosid`,`cantidad_pedida`,`precio_totald`,`precio_totalbs`) VALUES ($idventa,$Producto10,$cantidad10,$total10,$preciobs10)";

	$result=mysqli_query($conexion,$insertar10);
	