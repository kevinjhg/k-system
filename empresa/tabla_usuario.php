<?php  

require_once "../conexionbd/conexion.php";
require_once "clases/clase_usuario.php";

 
if (empty($_POST["palabra"])) {
  $buscar="";
}else{
$buscar=$_POST["palabra"];
}          
  
?>
<!DOCTYPE html>
<html>
<head>
	<title>Usuarios</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
     <link rel="stylesheet" type="text/css" href="../bootstrap-4.0.0/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css_icon/all.min.css">
<?php require_once"sidebar.php";
require_once"header.php";?>
	<script type="text/javascript"></script>
	<meta charset="utf-8">
	<script type="text/javascript"></script>
     <!-- funcion para editar datos de tabla -->
	<script>
		
		function modificar (cedula){
			window.location="actualizar_usuario.php?parametro="+cedula;

		}

function confirmdelete(){
var respuesta = confirm("Estas seguro que deseas eliminar a este cliente?")
if(respuesta==true)
  {  return true;
}else{
    return false;
}
}	 </script>

</head>


<body><!-- inicio body -->

<div style=" "  id="mostrarocultar" class="caja" >
     <form class="form_agg"  action="post_datos_usuario.php" method="POST">
<h2 style="text-align:left; background: #353535;color: white; padding: 2%;" >Nuevo Usuario</h2><br>
<div id="cerrar"><a href="javascript:cerrar()"><img class="cerrar" src="../imagenes/eliminar.png" ></a></div>





	
<p>Nombre:</p>
<input autocomplete="off" required=""  type="text" required="" name="nombre" placeholder="Ingrese Nombre ">

<p>Cedula:</p>
<input autocomplete="off" required="" type="number" step="any" maxlength="8" required="" name="cedula" placeholder="Ingrese Cedula">
<p>Correo:</p>
<input type="email" required=""  required="" name="email" placeholder="Ingrese email">

<p>Clave:</p>
<input autocomplete="off" type="password" maxlength="10" required="" name="clave" placeholder="Ingrese Clave">


<p>Telefono:</p>
<input type="number" required="" maxlength="12" required="" name="telefono" placeholder="Ingrese Numero">
<input type="hidden" name="estado">


<input    type="submit"  value="GUARDAR">

</form>


</div>





<div   id="menutabla">
<div class="cajaventas"> 
    <form action="buscar_usuario.php" method="post" onSubmit="return validarForm(this)" class="form_search"><!-- buscador -->
            
            <input autocomplete="off" style="border-radius: 10px;" type="text" name="palabra" id="busqueda" placeholder="buscar..." value="<?php echo $buscar;?>">
             <button  name="buscar" type="submit" value="buscar" style="" class="btn_search"><img width="15" src="../imagenes/buscar.png"></button>
        </form>  <!-- fin buscador -->         


     
    <div  id="cajamenu"><!-- contenedor de menu2 -->
            <form  action="tabla_clientes.php" method="post">
    
                <h1 style="text-align: left;color: white  "><i style=" color: rgb(12,163,243);" class="fas fa-users"></i>Usuarios 

                </h1> 

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
	       
	          <th>Nombre</th>
	          <th>Cedula</th>
	          <th>Correo</th>
              <th>Clave</th>
	          <th>Telefono</th>
              <th>Estado</th>
              <th>Rango</th>
	          <th>Acciones</th>
	       </tr>
         </thead>

     
<?php
$obj= new usuario();
if (isset($_POST["alfa"])) {

 		
 		
 		$sql=" SELECT * FROM usuario ORDER BY nombre ASC ";
             }
             else{
        $sql=" SELECT * FROM usuario";
}
 		$datos = $obj->mostrar_usuario($sql);
 		
 		
 		foreach ($datos as $key ) {
 			
 			if ($key['estado'] == "1") {
 				$estado= "Activo" ;
 				
 			}else{
 				$estado= "Cancelado";
 			}


            if ($key['rango'] == "1") {
                $key["rango"]= "Admin" ;
                
            }else{
                $key["rango"]= "User";
            }
 	 
 	
     ?>



 
 <tr>

	<td><?php echo $key['nombre'];?></td>
	<td><?php echo $key['cedula'];?></td>
	<td><?php echo $key["email"];?></td>
    <td><?php echo $key["clave"];?></td>  
    <td><?php echo $key["telefono"];?></td> 
	
 
	<td ><?php  if($estado == 'Activo') {
  	echo '<span    style="color:green" >'.$estado.'</span>';
  	
  	
  	
} else {
  	echo '<span style="color:red">'.$estado.'</span>';
}    ?></td>

    <td><?php echo $key["rango"];?></td> 

	<td>
       
        <a id="btn_editar" onclick="modificar(<?php echo $key['cedula'];?>)"  href="#">Editar</a>
        
        <a id="btn_eliminar" onclick="return confirmdelete()" style="text-decoration: none;" href="eliminar_usuario.php?cedula=<?php echo $key['cedula'];?>">Eliminar</a> 

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