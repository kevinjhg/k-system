

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
  <?php 
require_once"sidebar.php";
require_once"header.php";?>
    

</head>
<script>
    
    function modificar (idproductos){
      window.location="actualizar_prod.php?parametro="+idproductos;

    }

function confirmdelete(){
var respuesta = confirm("Estas seguro que deseas eliminar este producto?")
if(respuesta==true)
  {  return true;
}else{
    return false;
}
}  </script>

<body>



<div   id="menutabla">
<div class="cajaventas"> 

  <?php $buscar=$_POST["palabra"];?>
        <form action="buscar_producto.php" method="post" onSubmit="return validarForm(this)" class="form_search">
          
          <input style="border-radius: 10px;" type="text" name="palabra" id="busqueda" placeholder="Buscar..." value="<?php echo $buscar;?>">
         <button  name="buscar" type="submit" value="buscar" style="" class="btn_search"><img width="15" src="../imagenes/buscar.png"></button>
        </form>           


     
    <div  id="cajamenu">
            <form  action="tabla_prod.php" method="post">
  
                <h1 style="color: white;  "><i style="color: rgb(79,210,15);" class="fas fa-box"></i>Inventario

                </h1> 

    
            
        </div>


     </div>
   <!-- el resultado de la búsqueda lo encapsularemos en un tabla -->


   <table class="tabla_user sticky"  width="95%" style="border-collapse: collapse;" border="0" align="center" cellpadding="1" cellspacing="1">
       <thead>
       <tr>
            <!--creamos los títulos de nuestras dos columnas de nuestra tabla -->
            <th width="100" align="center"><strong>ID</strong></th>
            <th width="100" align="center"><strong>Nombre</strong></th>
         
            <th width="100" align="center"><strong>Inventario</strong></th>
            <th width="100" align="center"><strong>Precio</strong></th>
            <th width="100" align="center"><strong>Precio Bs</strong></th>
             <th width="100" align="center"><strong>Estado</strong></th>
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
       $sql = ("SELECT * FROM productos WHERE nombre like '$buscar%'  ");

       $query=mysqli_query($conexion,$sql);
       while($registro = mysqli_fetch_array($query)) 
       {

        if ($registro['estado'] == "1") {
        $estado= "Activo" ;
        
      }else{
        $estado= "Agotado";
      }
     if ($registro['cantidad']<= "0") {
    $estado = "Agotado";
  }
  
     



           ?> 
           <tr>
               <!--mostramos el nombre y apellido de las tuplas que han coincidido con la 
               cadena insertada en nuestro formulario-->
               <td class="estilo-tabla" align="center"><?=$registro['idproductos']?></td>
               <td class=”estilo-tabla” align="center"><?=$registro['nombre']?></td>
               <td class=”estilo-tabla” align="center"><?=$registro['cantidad']?></td>
               <td class=”estilo-tabla” align="center"><?=$registro['precio']?></td>
               <td class=”estilo-tabla” align="center"><?=$registro['preciobs']?></td>
               <td ><?php  if($estado == 'Activo') {
    echo '<span    style="color:green" >'. $estado . '</span>';
    
    
    
} else {
    echo '<span style="color:red">' . $estado . '</span>';
}    ?></td>


  <td>
       
        <a id="btn_editar" onclick="modificar(<?php echo $registro['idproductos'];?>)"  href="#">Editar</a>
        
        <a id="btn_eliminar" onclick="return confirmdelete()" style="text-decoration: none;" href="eliminar_prod.php?idproductos=<?php echo $registro['idproductos'];?>">Eliminar</a> 

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

<?php require_once"footer.php";?>
</body>
</html>

     