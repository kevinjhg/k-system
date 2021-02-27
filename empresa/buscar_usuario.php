<?php 

require_once"../conexionbd/conexion.php";    

if($_POST['buscar']) 
{   
   ?>
   <!DOCTYPE html>
<html>
<head>
  <title>Busqueda de producto</title>
  <link rel="stylesheet" type="text/css" href="../css/style.css">
   <link rel="stylesheet" type="text/css" href="../bootstrap-4.0.0/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css_icon/all.min.css">

  <script type="text/javascript"></script>
  <meta charset="utf-8">
  <script type="text/javascript"></script>
  <?php require_once"sidebar.php";
require_once"header.php";
    

?>
</head>
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
}  </script>
<body>

 <div style=" "  id="mostrarocultar" class="caja" >
     <form style="  "  action="post_datos_usuario.php" method="POST">
<h2 style="text-align:left; background: #353535;color: white; padding: 3%;" >Registrar</h2><br>
<div id="cerrar"><a href="javascript:cerrar()"><img class="cerrar" src="../imagenes/eliminar.png" ></a></div>





  
<p>Nombre:</p>
<input  type="text" required="" name="nombre" placeholder="Ingrese Nombre ">

<p>Cedula:</p>
<input type="number" step="any" maxlength="8" required="" name="cedula" placeholder="Ingrese Cedula">
<p>Correo:</p>
<input type="email"   required="" name="email" placeholder="Ingrese email">

<p>Clave:</p>
<input type="password" maxlength="10" required="" name="clave" placeholder="Ingrese Clave">


<p>Telefono:</p>
<input type="number" maxlength="12" required="" name="telefono" placeholder="Ingrese Numero">
<input type="hidden" name="estado">


<input style="margin-left: 42%;"   type="submit"  value="GUARDAR">

</form>


</div>

<div   id="menutabla">
<div class="cajaventas"> 

  <?php $buscar=$_POST["palabra"];?>
        <form action="buscar_usuario.php" method="post" onSubmit="return validarForm(this)" class="form_search">
          
          <input style="border-radius: 10px;" type="text" name="palabra" id="busqueda" placeholder="Buscar..." value="<?php echo $buscar;?>">
         <button  name="buscar" type="submit" value="buscar" style="" class="btn_search"><img width="15" src="../imagenes/buscar.png"></button>
        </form>           


     
    <div  id="cajamenu">
            <form  action="tabla_prod.php" method="post">
  
                <h1 style="text-align: left;  "><img width="50" src="../imagenes/logo.ico"> Stock   

                </h1> 

        <div id="caja_btn">
                

                <button id="btn_agg" name="alfa" type="submit"><img style="width: 20px; " src="../imagenes/aznegra2.ico"><span id="tittle6">Ordenar por nombre</span>
                </button>
                <button id="btn_agg" type="submit"><img style="width:20px; " src="../imagenes/19.ico"><span id="tittle7">Ordenar por ID </span>
                </button>

                 


          </div>
            
        </div>


     </div>
   <!-- el resultado de la búsqueda lo encapsularemos en un tabla -->


   <table class="tabla_user sticky"  width="95%" style="border-collapse: collapse;" border="0" align="center" cellpadding="1" cellspacing="1">
       <thead>
       <tr>
            <!--creamos los títulos de nuestras dos columnas de nuestra tabla -->
           
            <th width="100" align="center"><strong>Nombre</strong></th>
            
            <th width="100" align="center"><strong>Cedula</strong></th>
            <th width="100" align="center"><strong>Email</strong></th>
            <th width="100" align="center"><strong>Clave</strong></th>

            <th width="100" align="center"><strong>Telefono</strong></th>
            <th width="100" align="center"><strong>Estado</strong></th>
            <th width="100" align="center"><strong>Rango</strong></th>
            <th width="100" align="center"><strong>Acciones</strong></th>


       </tr> 
       </thead>
       <?php
       //obtenemos la información introducida anteriormente desde nuestro buscador PHP
       $buscar = $_POST["palabra"];
       /* ahora ejecutamos nuestra sentencia SQL, lo que hemos vamos a hacer es usar el 
       comando like para comprobar si existe alguna coincidencia de la cadena insertada 
       en nuestro campo del formulario con nuestros datos almacenados en nuestra base de 
       datos, la cadena insertada en el buscador se almacenará en la variable $buscar */
 
       /* hemos usado también la sentencia or para indicarle que queremos que nos encuentre
       las coincidencias en alguno de los campos de nuestra tabla (apellidos o nombre), 
       si hubiéramos puesto un and solo nos devolvería el resultado del filtro en el 
       caso de cumplirse las dos condiciones */
       
 $c =new conexion();
        $conexion=$c->conecta(); 
       $sql = ("SELECT * FROM usuario WHERE nombre like '$buscar%'  ");

       $query=mysqli_query($conexion,$sql);
       while($registro = mysqli_fetch_array($query)) 
       {
           ?> 
           <tr>
               <!--mostramos el nombre y apellido de las tuplas que han coincidido con la 
               cadena insertada en nuestro formulario-->
            
               <td class=”estilo-tabla” align="center"><?=$registro['nombre']?></td>
               <td class=”estilo-tabla” align="center"><?=$registro['cedula']?></td>
               <td class=”estilo-tabla” align="center"><?=$registro['email']?></td>
               <td class=”estilo-tabla” align="center"><?=$registro['clave']?></td>
               <td class=”estilo-tabla” align="center"><?=$registro['telefono']?></td>
               <td class=”estilo-tabla” align="center"><?=$registro['estado']?></td>
               <td class=”estilo-tabla” align="center"><?=$registro['rango']?></td>
               <td>
       
        <a id="btn_editar" onclick="modificar(<?php echo $registro['cedula'];?>)"  href="#">Editar</a>
        
        <a id="btn_eliminar" onclick="return confirmdelete()" style="text-decoration: none;" href="eliminar_usuario.php?cedula=<?php echo $registro['cedula'];?>">Eliminar</a> 

         <a id="btn_agregar" href="javascript:mostrar()">Agregar</a>
    </td>
           </tr> 
           <?php 
       } //fin blucle
    ?>
    </table>
    <?php
} // fin if 
?>
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

     