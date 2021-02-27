<?php 

require_once"../conexionbd/conexion.php";

if($_POST['buscar']) 
{   
   ?>
   <!DOCTYPE html>
<html>
<head>
  <title>Busqueda de Cliente</title>
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

<body>


 
   <!-- el resultado de la búsqueda lo encapsularemos en un tabla -->
<div   id="menutabla">
<div class="cajaventas"> 
<?php $buscar=$_POST["palabra"];?>
        <form action="buscar_cliente.php" method="post" onSubmit="return validarForm(this)" class="form_search">
          
          <input style="border-radius: 10px;" type="text" name="palabra" id="busqueda" placeholder="Buscar..." value="<?php echo $buscar;?>">
         <button  name="buscar" type="submit" value="buscar" style="" class="btn_search"><img width="15" src="../imagenes/buscar.png"></button>
        </form>           


     
    <div  id="cajamenu">
            <form  action="tabla_clientes.php" method="post">
  
                <h1 style="text-align: left;"><i class="fas fa-users"></i>Clientes

                </h1> 

        </div>


     </div>
   <table class="tabla_user sticky"  width="95%" style="border-collapse: collapse;" border="0" align="center" cellpadding="1" cellspacing="1">
       <thead>
       <tr>

            <!--creamos los títulos de nuestras dos columnas de nuestra tabla -->
            <th width="100" align="center"><strong>ID</strong></th>
            <th width="100" align="center"><strong>Nombre</strong></th>
          
            <th width="100" align="center"><strong>Cedula</strong></th>
            <th width="100" align="center"><strong>Telefono</strong></th>
            <th width="100" align="center"><strong>Estado</strong></th>

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
       $sql = ("SELECT * FROM clientes WHERE nombre like '$buscar%'  ");

       $query=mysqli_query($conexion,$sql);
       while($registro = mysqli_fetch_array($query)) 
       {
           ?> 
           
           <tr>
               <!--mostramos el nombre y apellido de las tuplas que han coincidido con la 
               cadena insertada en nuestro formulario-->
               <td class="estilo-tabla" align="center"><?=$registro['id_cliente']?></td>
               <td class=”estilo-tabla” align="center"><?=$registro['nombre']?></td>
               <td class=”estilo-tabla” align="center"><?=$registro['cedula']?></td>
               <td class=”estilo-tabla” align="center"><?=$registro['telefono']?></td>
               <td class=”estilo-tabla” align="center"><?=$registro['estado']?></td>
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

     