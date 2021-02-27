<?php 
require_once '../conexionbd/conexion.php';
require_once 'clases/clase_clientes.php';



    $id_cliente =$_POST['id_cliente'];
  	$nombre =$_POST['nombre'];
    $cedula =$_POST['cedula'];
    $telefono=$_POST["telefono"];
  
  
  $datos = array(
    $id_cliente,
    $nombre,
    $cedula,
    $telefono

   
);

$obj=new cliente();

/*botones hidden de actualizar registro*/


/*REQUEST SIRVE PARA TRAER POR POST Y GET*/
$funcion=$_REQUEST['funcion'];
$id_cliente2=$_POST['id_cliente2'];
$p=$_GET['p'];
$estado=$_POST['estado'];

/*instancia*/
$c =new conexion();
  $conexion=$c->conecta();

 
  
if ($funcion=="modificar") {

   $sql=" UPDATE clientes set id_cliente='$id_cliente', nombre='$nombre',cedula='$cedula',telefono='$telefono',estado='$estado' where id_cliente='$id_cliente2'";
  $sql=mysqli_query($conexion,$sql);
    header("location:tabla_clientes.php");    
}

 






 ?>