


<?php 
   
require_once "conexionbd/conexion.php"; 


require_once"singup/usuario.php";        

$Producto=$_POST["Producto"];?>





<form class="formfactura" action=""method="POST" onSubmit="return validarForm2(this)">
	                 
<?php  
                         

$obj= new usuario();
$sql=" SELECT * FROM productos where cantidad>0 ORDER BY nombre ASC";
 $datos = $obj->mostrar($sql);?>
<td>
<select required="" name="Producto" >
 <?php foreach ($datos as $key ) {?>	
	
	<option hidden=""></option>
	<option value="<?php echo $key['idproductos']?>"><?php echo $key['nombre'];}?></option>
					
</select>

</td>
					         	
					        
<td>
<input required=""  placeholder="Escribir Cantidad"type="text" id="Cantidad1" name="Cantidad1">
<?php $sql1="SELECT cantidad FROM productos where idproductos=$Producto";
$datos1 = $obj->mostrar($sql1);
foreach ($datos1 as $key ) { ?>
					    
 <input type='hidden' id='stock' name='stock' value='<?php echo $key["cantidad"];?>'></td>
					 		
<?php }?>
					  
<td><input placeholder="Escribir Precio"type="text" name="Precio"></td>
<button style="margin-bottom: 1%;" name="ver_total" id="btnvolver" value="ver_total" onClick='return validar()'type="submit">VER TOTAL</button>

</form>
<?php

 
 if ($_POST["ver_total"]) {
$cantidad1=$_POST["Cantidad1"];
$precio=$_POST["Precio"];
$total=$cantidad1*$precio;
	echo  $total ;
}
 ?>   
<script language="JavaScript">
 

function validar(){

if (parseInt(document.getElementById('Cantidad1').value) > (parseInt(document.getElementById('stock').value))){
	alert("La Cantidad Excede El Stock");
	return false;
	}/*else{
	alert("Gracias Por Su Compra");
	return false;
}
*/
}

</script> 

<?php
/*
if (isset($_POST["Cantidad1"]) ||($_POST["Cantidad2"])) {
$Cantidad1=$_POST["Cantidad1"];
$Cantidad2=$_POST["Cantidad2"];
$campos=array();

$sqlv=" SELECT * FROM productos where idproductos=$Producto";
$datos2 = $obj->mostrar($sqlv);
foreach ($datos2 as $key) {


if ($Cantidad1>$key["cantidad"]) {
	array_push($campos, "Solo quedan ".$key['cantidad']." Unidades de ".$key['nombre']."");
}
}
 
if (count($campos)>0) {
echo "<div class='error'>"; 
for ($i=0; $i <count($campos) ; $i++) { 
echo "<li>".$campos[$i]."</div>";
}               	
}else{
echo "<nav class='correcto'>
datos correctos";
} 
echo "</nav>";
 }                      
 ?> */