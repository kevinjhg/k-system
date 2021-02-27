<?php 

		
require_once "../conexionbd/conexion.php"; 
require_once"usuario.php";
require_once"clases/clase_clientes.php";  
 require_once"../singup/usuario.php";
 require_once"ajax.php"; 

error_reporting(0) ;
if (empty($_POST["cedula"])) {
	$cedula="";
}else{
$cedula=$_POST["cedula"];
}
if (empty($_POST["palabra"])) {
	$buscar="";
}else{
$buscar=$_POST["palabra"];
}          
     
?>
<!DOCTYPE html>
<html>
<head>
	<title>Nueva Venta</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	 <script src="../js/alertify.js"></script>
	<link rel="stylesheet" type="text/css" href="../css/alertify.css">
     <script src="../js/jquery-3.5.1.js"></script>
	 <script type="text/javascript"></script>
	 <script src="../js/showselect.js" type="text/javascript"></script>
	  <link rel="stylesheet" type="text/css" href="../bootstrap-4.0.0/bootstrap.min.css">
	  <link rel="stylesheet" type="text/css" href="../css_icon/all.min.css">
	  <script src="../js/alertify.js"></script>
<?php 

require_once"sidebar_ventas.php";
?>

</head>
<input class="input1" type="checkbox" id="check" name="">
<label class="label1" for="check">
		<img id="boton" src="../imagenes/lineas.png" width="1" >
		<img  id="cerrar2" src="../imagenes/cerrar.png.png">
</label>
       <!-- contenedor de barra lateral left -->


<body><!-- inicio body -->
<script type="text/javascript">
function confirmventa(){
var respuesta = confirm("Esta seguro que desea facturar?")
if(respuesta==true)
  {  return true;
  	alertify.success('ok');
}else{
    return false;
}
}


$(document).ready(function(){
	$("#search").keyup(function(){
		$.post("variable_ajax.php", function(datos){
			$("#resultado").html(datos);
		});
	});
});














</script>


<!-- caja del formulario de facturacion y lista de productos -->
    <div id="mostrarocultar1" class="caja1">
    	
        
 
	
<!-- contenedor de tabla del formulario de facturacion -->
	         <div id="main_tabla_factura">
	         	<h1 style="font-size: 18px;width: 100%; text-align: center; color: white; ">Nueva Venta</h1>
     
		         
		         <!-- tabla de formulario de facturacion -->
<table border="2" class="tabla_user" style="border-collapse: collapse; margin-bottom: 1%;">
<thead>
		<tr>
		
			<th>Cedula</th>
			<th>ID</th>
			<th>Nombre</th>
			
			<th>Telefono</th>

	   
<th>
<nav class="numeros">
<button class="btnnumber"  id="mybutton2" onclick="showhideelement2()">2</button>
<button class="btnnumber" id="mybutton3" onclick="showhideelement3()">3</button>
<button class="btnnumber" id="mybutton4" onclick="showhideelement4()">4</button>
<button class="btnnumber" id="mybutton5" onclick="showhideelement5()">5</button>
<button class="btnnumber"  id="mybutton6" onclick="showhideelement6()">6</button>
<button class="btnnumber" id="mybutton7" onclick="showhideelement7()">7</button>
<button class="btnnumber"  id="mybutton8" onclick="showhideelement8()">8</button>
<button class="btnnumber"  id="mybutton9" onclick="showhideelement9()">9</button>
<button class="btnnumber"  id="mybutton10" onclick="showhideelement10()">10</button>

</nav>
	</th>

					
	</tr>
	</thead>

<form id="form" class="formfactura form-inline my-2 my-lg-0" action="factura1.php" method="POST" onSubmit="return validarForm2(this)">
	<tr>
 

	<td><input required="" autocomplete="off" value="<?php echo $cedula ?>" style="width: 100pX;" type="number" name="cedula"></td>
<?php



$c =new conexion();
$conexion=$c->conecta();

if(isset($_POST['btn_facturar'])){
	$cedula = $_POST['cedula'];

	

	if (empty($cedula)) {
		echo "<di class='error'>esta vacio<di>";
	}else{
		$usuario =new cliente;
		$resultado = $usuario->iniciar($cedula);
		if($resultado!=FALSE){
			$sql="SELECT * FROM clientes where cedula=$cedula";
			foreach($resultado as $valor){

				$id_cliente=$valor['id_cliente'];
			    echo"<td>".$valor['id_cliente']."</td>";
				echo "<td>".$valor["nombre"]."</td>";
				
				echo"<td>". $valor["telefono"]."</td>";
			}
		
			
				
		}else{
			
			
			echo "<td colspan='3' style='background:rgba(100,0,0,0.5);color :white;border:1px solid red;'>No esta registrado</td>";
			echo "<td colspan='' ><a id='btn_agregar' href='javascript:mostrar()''>Agregar</a> </td>";
		}
	}
}

?>

</tr>
			
</table>



<table border="1"  class="tabla_user" style="border-collapse: collapse;width: 30%;margin:0;">

	


	<thead>
	<tr>
		
			<th>COD</th>
			<th>Cantidad</th>
			
			
			
	    </tr>
	  	</thead>
	<tr>
			
	<td><input 
			 style="" type="text" id="search" name="codprod"></td>
			  
			 
   <td><input onkeyup="activar()" style="" type="number" id="cant" name="cantidad1"></td>
  
    

</tr>

<tr>
	<td><input   style="" type="search" id="search2" name="codprod2"></td>
	<td><input onkeyup="activar2()" style="" type="number" id="cant2" name="cantidad2"></td>
	<input type="hidden" name="Precio2" value="<?php echo $Precio2?>"></td>


</tr>
<tr class="3" id="tr3">
	<td><input style="" type="text" id="search3" name="codprod3"></td>
	<td><input onkeyup="activar3()" style="" type="number" id="cant3" name="cantidad3">
		<input type="hidden" name="Precio3" value="<?php echo $Precio3?>"></td>



</tr>
<tr class="4" id="tr4">
	<td><input style="" type="number" id="search4" name="codprod4"></td>
	<td><input onkeyup="activar4()" style="" type="number" id="cant4" name="cantidad4">
		<input type="hidden" name="Precio4" value="<?php echo $Precio4?>"></td>


</tr>

<tr class="5" id="tr5">
	<td><input style="" type="text" id="search5" name="codprod5"></td>
	<td><input onkeyup="activar5()" style="" type="number" id="cant5" name="cantidad5">
		<input type="hidden" name="Precio5" value="<?php echo $Precio5?>"></td>


</tr>
<tr class="6" id="tr6">
	<td><input style="" type="text" id="search6" name="codprod6"></td>
	<td><input onkeyup="activar6()" style="" type="number" id="cant6" name="cantidad6"></td>
	<input type="hidden" name="Precio6" value="<?php echo $Precio6?>">



</tr>
<tr class="7" id="tr7">
	<td><input style="" type="text" id="search7" name="codprod7"></td>
	<td><input onkeyup="activar7()" style="" type="number" id="cant7" name="cantidad7"></td>
	<input type="hidden" name="Precio7" value="<?php echo $Precio7?>">



</tr>
<tr class="8" id="tr8">
	<td><input style="" type="text" id="search8" name="codprod8"></td>
	<td><input onkeyup="activar8()" style="" type="number" id="cant8" name="cantidad8"></td>
	<input type="hidden" name="Precio8" value="<?php echo $Precio8?>">



</tr>
<tr class="9" id="tr9">
	<td><input style="" type="text" id="search9" name="codprod9"></td>
	<td><input onkeyup="activar9()" style="" type="number" id="cant9" name="cantidad9"></td>
	<input type="hidden" name="Precio9" value="<?php echo $Precio9?>">


</tr>
<tr class="10" id="tr10">
	<td><input style="" type="text" id="search10" name="codprod10"></td>
	<td><input onkeyup="activar10()" style="" type="number" id="cant10" name="cantidad10"></td>
	<input type="hidden" name="Precio10" value="<?php echo $Precio10?>">



</tr>

</table>
	
	

<hr/>


<?php 
date_default_timezone_set('America/Caracas');

$fecha_actual=date("Y-m-d H:i:s");

?>

	
    <input type="hidden" name="fecha" value="<?php echo $fecha_actual ?>">
    <input type="hidden" name="id_cliente" value="<?php echo $id_cliente ?>">
<!--
        <button style="margin-bottom: 1%;" name="ver_total" id="btnvolver" value="ver_total" onClick='return validar()' type="submit"><i style="font-size: 20PX;" class="fas fa-eye">TOTAL</i></button>

-->

<!--onclick para confirmar facturacion-->
 <button onclick="return confirmventa()" id="btn_facturar" disabled  type="submit" name="Pagar" value="Pagar">FACTURAR</button>  <?php ?> 
</form><!-- fin del formulario de inputs hidden para enviar a factura-->
 
</form><!-- fin del formulario de factiracion -->

<script src="../js/showhide.js" type="text/javascript"></script><!--/////////////////////7//////ocultar y mostrat td  de tabla factura con script-->


<?php




require_once"action.php";
$total=$cantidad1*$precio;






$subtotal=$cantidad1*$precio+$cantidad2*$Precio2+$cantidad3*$Precio3+$cantidad4*$Precio4+$cantidad5*$Precio5+$cantidad6*$Precio6+$cantidad7*$Precio7+$cantidad8*$Precio8+$cantidad9*$Precio9+$cantidad10*$Precio10;
$iva=$subtotal*(16/100) ;

$total=$subtotal+$iva
?>





</div><!-- fin del contenedor de la tabla de facturacion -->

  



<div id="lista" ><!-- conetenedor de lista de productos -->
	<h1 style="font-size: 18px;width: 100%; text-align: center; color: white; ">Resultados</h1>
<nav  class="cajaresul">
<nav style=" width: 100%; margin-bottom: 4%; ">



<table style="width: 100%;" border="1" id="response1"></table>

 

   
</nav>















             


</nav><!--fin del contenedor caja result-->
   
</div><!-- fin conetenedor de lista de productos -->   

</div><!-- fin de conetenedor de todo class caja -->

<div  id="mostrarocultar" class="caja" >
     <form class="form_agg" action="post_new_cliente_fact.php" method="POST">
<h2 style="text-align:left; background: #353535;color: white; padding: 2%;" >Nuevo Cliente</h2><br>
<div id="cerrar"><a href="javascript:cerrar()"><img class="cerrar" src="../imagenes/eliminar.png" ></a></div>





	
<p>Nombre:</p>
<input autocomplete="off" type="text" required="" name="nombre" placeholder="Ingrese Nombre ">

<p>Cedula:</p>
<input autocomplete="off" type="number" step="any" maxlength="8" required="" name="cedula" placeholder="Ingrese Cedula">

<p>Telefono:</p>
<input autocomplete="off" type="number" step="any" maxlength="12" required="" name="telefono" placeholder="Ingrese Numero">
<input autocomplete="off" type="hidden" name="estado">


<input    type="submit"  value="GUARDAR">

</form>


</div>

<script>
		
		function cerrar(){

 document.getElementById('mostrarocultar').style.display="none";
}

 function mostrar(){

 document.getElementById('mostrarocultar').style.display="block";

}


function cerrarmodal(){
	document.getElementById('modal').style.display="none";
}




	</script>
<!--funcion de validacion de buscador/-->
 <script type="text/javascript">
    function validarForm(formulario) 
    {
        if(formulario.palabra.value.length==0) 
        { //¿Tiene 0 caracteres?
            formulario.palabra.focus();  // Damos el foco al control
            alert('Debes rellenar este campo'); //Mostramos el mensaje
            return false; 
         } //devolvemos el foco  
         return true; //Si ha llegado hasta aquí, es que todo es correcto 
     }   



     </script>
<!--
<script language="JavaScript">
 
/*
function validar(){

if (parseInt(document.getElementById('Cantidad1').value) > (parseInt(document.getElementById('stock').value))){
	alert("La Cantidad Excede El Stock");
	return false;
	}/*else{
	alert("Gracias Por Su Compra");
	return false;
}
*//*
}

</script> 
-->
<button id="ejecuta">eejcuta</button>
<script type="text/javascript">
	
	$(document).ready(function(){
		$('#ejecuta').click(function(){
              alertify.success("este");
		});

	});
</script>

<script src="app.js"></script>

 </body><!-- fin body -->
</html>
