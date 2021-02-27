<?php  
require_once"sidebar.php";
require_once"header.php";
    
require_once"../conexionbd/conexion.php";
require_once"clases/clase_venta.php";



$busqueda="";
$fecha_de="";
$fecha_a="";        

if (isset($_REQUEST["busqueda"]) && $_REQUEST["busqueda"]=="") {
  header("location:tabla_ventas.php");
}

if (isset($_REQUEST["fecha_de"]) || isset($_REQUEST["fecha_a"])) {
  if ($_REQUEST["fecha_de"]=="" || $_REQUEST["fecha_a"]=="") {
   header("location:tabla_ventas.php");
  }
}
if (!empty($_REQUEST["busqueda"])) {
    if (!is_numeric($_REQUEST["busqueda"])) {
      header("location:tabla_ventas.php");
    }
    $busqueda = strtolower($_REQUEST["busqueda"]);
    $where="idventa = $busqueda";
    $buscar="busqueda = $busqueda";
  }  


  if (!empty($_REQUEST["fecha_de"]) && !empty($_REQUEST["fecha_a"])) {
   $fecha_de=$_REQUEST["fecha_de"];
   $fecha_a=$_REQUEST["fecha_a"];

   $buscar="";

   if ($fecha_de > $fecha_a) {
     header("location:tabla_ventas.php");
   }else if ($fecha_de == $fecha_a){
    $where="fecha LIKE '$fecha_de%'";
    $buscar="fecha_de=$fecha_de&fecha_a=$fecha_a";
   }else{
    $f_de = $fecha_de.' 00:00:00';
    $f_a = $fecha_a.' 23:59:59';
    $where = "fecha BETWEEN '$f_de' AND '$f_a'";
    $buscar="fecha_de=$fecha_de&fecha_a=$fecha_a";
   }
  }
   
?>
<!DOCTYPE html>
<html>
<head>
  <title>Ventas</title>
  <link rel="stylesheet" type="text/css" href="../css/style.css">
   <link rel="stylesheet" type="text/css" href="../bootstrap-4.0.0/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../css_icon/all.min.css">
  

  <script type="text/javascript"></script>
  <meta charset="utf-8">
  
     <!-- funcion para editar datos de tabla -->
  <script>
    
    function modificar (idventa){
      window.location="actualizar_venta.php?parametro="+idventa;

    }

function confirmdelete2(){
var respuesta = confirm("Estas seguro que deseas eliminar esta venta?")
if(respuesta==true)
  {  return true;
}else{
    return false;
}
}  </script>

</head>


<body><!-- inicio body -->




<div   id="menutabla">
 <div class="cajaventas">
        <form action="buscar_venta.php" method="get" onSubmit="return validarForm(this)" class="form_search"><!-- buscador -->
          
          <input style="border-radius: 10px;" type="number" name="busqueda" id="busqueda" placeholder="No.Factura" value="<?php echo $busqueda;?>">
           <button   type="submit"   class="btn_search"><img width="15" src="../imagenes/buscar.png"></button>
        </form>  <!-- fin buscador -->         


     
    <div  id="cajamenu"><!-- contenedor de menu2 -->
       <h1 style="color:white;text-align: left;  "><i style="color:rgb(248,50,50); " class="fas fa-shopping-cart"></i>Ventas</h1> 
      <h5>Buscar por Fecha</h5>
                <form action="buscar_venta.php" method="get" class="">
                  <label>De</label>
                  <input type="date" name="fecha_de" id="" value="<?php echo$fecha_de;?>" required="" >
                  <label>A</label>
                  <input type="date" name="fecha_a" id="fecha_a" value="<?php echo $fecha_a;?>" required="">
                  <button type="submit" class=""><img width="15" src="../imagenes/buscar.png"></button>
                </form>
            <form  action="tabla_ventas.php" method="post">
  
              

        <div id="caja_btn"><!-- caja de botones alfanumericos -->
                

                <button id="btn_agg" name="alfa" type="submit"><img style="width: 20px; " src="../imagenes/aznegra2.ico"><span id="tittle6">Ordenar por nombre</span>
                </button>
                <button id="btn_agg" type="submit"><img style="width:20px; " src="../imagenes/19.ico"><span id="tittle7">Ordenar por ID </span>
                </button>

                 



             </form>
 
             
        </div>


     </div>

</div>

 <table class="tabla_user sticky" style="border-collapse: collapse; " border="0"> 



         <thead>
           <tr>
            <th>ID</th>
            <th>#Produtos</th>
            <th>Fecha</th>
            <th>ID_cliente</th>
            <th>Total_$</th>
            <th>Total Bs</th>
            <th>Estado</th>
            <th>Acciones</th>
            <th>Detalles</th>

         </tr>
         </thead>

     
<?php
$obj= new venta();
if (isset($_POST["alfa"])) {

  
    
    $sql=" SELECT * from clientes,ventas where cliente_id=id_cliente and $where ORDER BY nombre ASC ";
             }
             else{
        $sql=" SELECT * FROM clientes,ventas where cliente_id=id_cliente and $where";
}
    $datos = $obj->mostrar($sql);
    
    
    foreach ($datos as $key ) {
      
      if ($key['estado'] == "1") {
        $estado= "Correcta" ;
        
      }else{
        $estado= "error";
      }
   
  
     ?>



 
 <tr>
  <td><?php echo $key['idventa'];?></td>
  <td><?php echo $key['productos'];?></td>
  <td><?php echo $key['fecha'];?></td>
  <td><?php echo $key['nombre'];?></td>
  <td><span><?php echo number_format($key['total_d'],2,",",".");  ?></span>$</td>
  <td><span><?php echo number_format($key['total_bs'],2,",",".");  ?></span>BS</td>
    
  <td ><?php  if($estado == 'Correcta') {
    echo '<span    style="color:green" >'.$estado.'</span>';
    
    
    
} else {
    echo '<span style="color:red">'.$estado.'</span>';
}    ?></td>


  <td>
       

        <a id="btn_editar" onclick="modificar(<?php echo $key['idventa'];?>)"  href="#">Editar</a>
        
        <a id="btn_eliminar" onclick="return confirmdelete2()" style="text-decoration: none;" href="eliminar_venta.php?idventa=<?php echo $key['idventa'];?> ">Eliminar</a> 

         <a id="btn_agregar" href="javascript:mostrar()">Agregar</a>
    </td>

      <td><a href="detalles.php?idventa=<?php echo $key['idventa'];?>">Ver detalles</a></td>
  
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