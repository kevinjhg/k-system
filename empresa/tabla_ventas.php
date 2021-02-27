<?php  

include "../conexionbd/conexion.php";
include "clases/clase_venta.php";


        
  
   
?>
<!DOCTYPE html>
<html>
<head>
  <title>Ventas</title>
  <link rel="stylesheet" type="text/css" href="../css/style.css">
   <link rel="stylesheet" type="text/css" href="../bootstrap-4.0.0/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../css_icon/all.min.css">
  
<?php require_once"sidebar.php";
require_once"header.php";?>
  <script type="text/javascript"></script>
  <meta charset="utf-8">
  
     <!-- funcion para editar datos de tabla -->
  <script>
    
 

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
          
          <input autocomplete="off" style="border-radius: 10px;" type="number" name="busqueda" id="busqueda" placeholder="No.Factura" value="<?php echo $buscar;?>">
           <button   type="submit"   class="btn_search"><img width="15" src="../imagenes/buscar.png"></button>
        </form>  <!-- fin buscador -->         


     
    <div  id="cajamenu"><!-- contenedor de menu2 -->
           
  
                <h1 style="color: white;"><i style="color:rgb(248,50,50); " class="fas fa-shopping-cart"></i>Ventas</h1> 
             
                 <form  action="tabla_ventas.php" method="post">
        <div id="caja_btn"><!-- caja de botones alfanumericos -->
            
               
                <button id="btn_agg" name="alfa" type="submit"><img style="width: 20px; " src="../imagenes/aznegra2.ico">
                </button>
                <button id="btn_agg" type="submit"><img style="width:20px; " src="../imagenes/19.ico">
                </button>

              


           

 
             
        </div>
  </form>
               
                <form class="form_fecha" action="buscar_venta.php" method="get" class="">
                  <label>Buscar por Fecha:</label>
                  <label>De:</label>
                  <input type="date" name="fecha_de" id="" required="">
                  <label>A:</label>
                  <input type="date" name="fecha_a" id="fecha_a" required="">
                  <button type="submit" class=""><img width="15" src="../imagenes/buscar.png"></button>
                </form>

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

    
    
    $sql=" SELECT * from clientes,ventas where cliente_id=id_cliente  ORDER BY nombre ASC ";
             }
             else{
        $sql=" SELECT * FROM clientes,ventas where cliente_id=id_cliente";
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
       

       
        
        <a id="btn_eliminar" onclick="return confirmdelete2()" style="text-decoration: none;" href="eliminar_venta.php?idventa=<?php echo $key['idventa'];?> ">Eliminar</a> 

        
    

      <td><a  href="detalles.php?idventa=<?php echo $key['idventa'];?>"><i style="font-size: 20px;color:rgb(248,50,50);" class="fas fa-eye"></i></a></td>
     
  
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


function alerta()
    {
    var mensaje;
    var opcion = confirm("Clicka en Aceptar o Cancelar");
    if (opcion == true) {
        mensaje = "Has clickado OK";
  } else {
      mensaje = "Has clickado Cancelar";
  }
  document.getElementById("ejemplo").innerHTML = mensaje;
}

  </script>

    <script type="text/javascript">
    function validarForm(formulario) 
    {
        if(formulario.busqueda.value.length==0) 
        { //¿Tiene 0 caracteres?
            formulario.busqueda.focus();  // Damos el foco al control
            alert('Debes rellenar este campo'); //Mostramos el mensaje
            return false; 
         } //devolvemos el foco  
         return true; //Si ha llegado hasta aquí, es que todo es correcto 
     }   
</script>



<?php require_once"footer.php";?>

  
   






</body>
</html>