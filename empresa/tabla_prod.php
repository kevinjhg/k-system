<?php  
require_once "../conexionbd/conexion.php";
require_once "../empresa/usuario.php";

 
if (empty($_POST["palabra"])) {
  $buscar="";
}else{
$buscar=$_POST["palabra"];
}          
  
?>
<!DOCTYPE html>
<html>
<head>
	<title>Stock</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
     <link rel="stylesheet" type="text/css" href="../bootstrap-4.0.0/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css_icon/all.min.css">
<?php require_once"sidebar.php";
require_once"header.php";?>
	<script type="text/javascript"></script>
	<meta charset="utf-8">
	
   <script src="../js/alertify.js"></script>
  <link rel="stylesheet" type="text/css" href="../css/alertify.css">
     <script src="../js/jquery-3.5.1.js"></script>
     <!-- funcion para editar datos de tabla -->
	<script>
		
		function modificar (idproductos){
			window.location="actualizar_prod.php?parametro="+idproductos;

		}

function confirmdelete(){
var respuesta =confirm("Estas seguro que deseas eliminar este producto?");
if(respuesta==true)
  {  return true;
}else{
    return false;
}
}	 </script>

</head>



<body><!-- inicio body -->

 
<div id="mostrarocultar" class="caja">
     <form class="form_agg"   action="post2.php" method="POST">
<h2 style="text-align:left; background: #353535;color: white; padding: 2%;">Nuevo Producto</h2><br>
<div id="cerrar"><a href="javascript:cerrar()"><img class="cerrar" src="../imagenes/eliminar.png" ></a></div>





	
<p>Nombre:</p>
<input autocomplete="off" type="text" required="" name="nombre" placeholder="Ingrese Nombre ">

<p>Cantidad:</p>
<input autocomplete="off" type="number" step="any" maxlength="10" required="" name="cantidad" placeholder="Ingrese cantidad">

<p>Precio:</p>
<input autocomplete="off" type="number" step="any" maxlength="10" required="" name="precio" placeholder="Ingrese Precio">
<input type="hidden" name="estado">


<input    type="submit"  value="GUARDAR">

</form>

</div>






<div   id="menutabla">
<div class="cajaventas"> 
    <form action="buscar_producto.php" method="post" onSubmit="return validarForm(this)" class="form_search"><!-- buscador -->
            
            <input autocomplete="off" style="border-radius: 10px;" type="text" name="palabra" id="busqueda" placeholder="buscar..." value="<?php echo $buscar;?>">
             <button  name="buscar" type="submit" value="buscar" style="" class="btn_search"><img width="15" src="../imagenes/buscar.png"></button>
        </form>  <!-- fin buscador -->         


     
    <div  id="cajamenu"><!-- contenedor de menu2 -->
            <form  action="tabla_prod.php" method="post">
    
                <h1 style="color: white;"><i style="color: rgb(79,210,15);" class="fas fa-box"></i>Inventario</h1> 

        <div id="caja_btn"><!-- caja de botones alfanumericos -->
                

                <button id="btn_agg" name="alfa" type="submit"><img style="width: 20px; " src="../imagenes/aznegra2.ico">
                </button>
                <button id="btn_agg" type="submit"><img style="width:20px; " src="../imagenes/19.ico">
                </button>

                 
  </div>


             </form>
 
             
        


     </div>
</div>
 <table class="tabla_user sticky" style="border-collapse: collapse;" border="0"> 

 

         <thead>
           <tr>
	          <th>ID</th>
	          <th>Nombre</th>
	          <th>Cantidad</th>
	          <th>Precio $</th>
              <th>Precio Bs</th>
	          <th>Estado</th>
	          <th>Acciones</th>
	       </tr>
         </thead>

     
<?php
$obj= new usuario();
if (isset($_POST["alfa"])) {

 		
 		
 		$sql=" SELECT idproductos,nombre,cantidad,estado,precio,preciobs FROM productos ORDER BY nombre ASC ";
             }
             else{
        $sql=" SELECT idproductos,nombre,cantidad,estado,precio,preciobs FROM productos";
}
 		$datos = $obj->mostrar($sql);
 		
 		
 		foreach ($datos as $key ) {
 			
 			if ($key['estado'] == "1") {
 				$estado= "Activo" ;
 				
 			}else{
 				$estado= "Agotado";
 			}
 	   if ($key['cantidad']<= "0") {
 		$estado = "Agotado";
 	}
 	
     ?>



 
 <tr>

	<td><?php echo $key['idproductos'];?></td>
	<td><?php echo $key['nombre'];?></td>
	<td><?php if($key["cantidad"] <= "0") {
    echo '<span style="color:red">'.$key["cantidad"].'</span>';
}else {
    echo '<span style="color:green">'.$key["cantidad"].'</span>';
}?></td> 
	<td><?php echo $key['precio'];?>$</td> 
    <td><span><?php echo number_format($key['preciobs'],2,",",".");?></span>Bs</td>
	<td><?php  if($estado == 'Activo') {
  	echo '<span    style="color:green" >'.$estado.'</span>';
  	
  	
  	
}else{
  	echo'<span style="color:red">'.$estado .'</span>';
}    ?></td>


	<td>
       
        <a id="btn_editar" onclick="modificar(<?php echo $key['idproductos'];?>)"  href="#">Editar</a>
        
        <a id="btn_eliminar" onclick="return confirmdelete()" style="text-decoration: none;" href="eliminar_prod.php?idproductos=<?php echo $key['idproductos'];?>">Eliminar</a> 

         <a id="btn_agregar" href="javascript:mostrar()">Agregar</a>
    </td>

	
	
</tr>
<?php 
}


?>

</table>



</div >


 

 



</div >

  	
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





	
   <?php require_once"footer.php";?>






</body>
</html>