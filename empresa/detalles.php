<?php 

    
include"../conexionbd/conexion.php";
include"clases/clase_detalles.php";

$idventa=$_GET["idventa"];



if (empty($_POST["palabra"])) {
  $buscar="";
}else{
$buscar=$_POST["palabra"];
}          
  
   
?>
<!DOCTYPE html>
<html>
<head>
  <title>Detalles de venta</title>
  <link rel="stylesheet" type="text/css" href="../css/style.css">
   <link rel="stylesheet" type="text/css" href="../bootstrap-4.0.0/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../css_icon/all.min.css">
 <?php require_once"sidebar.php";
require_once"header.php";?>

  <script type="text/javascript"></script>
  <meta charset="utf-8">
  <</head>
     <!-- funcion para editar datos de tabla -->
  <script>
    
    function modificar (id_detalles){
      window.location="actualizar_venta.php?parametro="+id_detalles;

    }

function confirmdelete(){
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
        <form action="buscar_venta.php" method="post" onSubmit="return validarForm(this)" class="form_search"><!-- buscador -->
          
          <input autocomplete="off" style="border-radius: 10px;" type="text" name="palabra" id="busqueda" placeholder="buscar..." value="<?php echo $buscar;?>">
           <button  name="buscar" type="submit" value="buscar" style="" class="btn_search"><img width="15" src="../imagenes/buscar.png"></button>
        </form>  <!-- fin buscador -->         


     
    <div  id="cajamenu"><!-- contenedor de menu2 -->
            
                <h1 style="color: white;"><i style="color:white" id="ventas" class="fas fa-file-invoice-dollar"></i>Detalles</h1> 

       
             
        </div>

</div>
 


 <table class="tabla_user sticky" border="0" style="border-collapse: collapse;">
	<thead>
	<tr>
	<th>ID</th>
	<th>COD.Factura</th>
	<th>Productos</th>
	<th>Cantidad</th>
	<th>Precio Total $</th>
	<th>Precio Total Bs</th>
	<th>Acciones</th>
	</tr>
	</thead>
<?php	


$obj= new detalles();

    
    $sql=" SELECT * FROM ventas_detalles,productos where productosid=idproductos and ventaid=$idventa";
      

    $datos = $obj->mostrar_detalles($sql);
    foreach ($datos as $key) {
    	
    
    ?>

	<tr>
		<td><?php echo $key["id_detalles"];?></td>
		<td><?php echo $key["ventaid"];?></td>
		<td><?php echo $key["nombre"];?></td>
		<td><?php echo $key["cantidad_pedida"];?></td>
		<td><span><?php echo number_format($key['precio_totald'],2,",",".");  ?></span>$</td>
        <td><span><?php echo number_format($key['precio_totalbs'],2,",",".");  ?></span>BS</td>
        <td>
       

        <a id="btn_editar" onclick="modificar(<?php echo $key['id_detalles'];?>)"  href="#">Editar</a>
        
        <a id="btn_eliminar" onclick="return confirmdelete()" style="text-decoration: none;" href="eliminar_detalle.php?id_detalles=<?php echo $key['id_detalles'];?>">Eliminar</a> 

         
        </td>
		

	</tr>
	<?php } ?>
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
