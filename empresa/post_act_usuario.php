<?php 
require_once '../conexionbd/conexion.php';
require_once 'clases/clase_usuario.php';


   
    
    $nombre =$_POST['nombre'];
    $cedula =$_POST['cedula'];
    $email=$_POST['email'];
    $clave=$_POST['clave'];
    $telefono=$_POST['telefono'];
    $estado=$_POST['estado'];
  

    

  $datos = array(
    
    $nombre,
    $cedula,
    $email,
    $clave,
    $telefono,
    $estado,
   
   
);

$obj=new usuario();

/*botones hidden de actualizar registro*/


/*REQUEST SIRVE PARA TRAER POR POST Y GET*/
$funcion=$_REQUEST['funcion'];
$cedula2=$_POST['cedula2'];

$estado=$_POST['estado'];

/*instancia*/
$c =new conexion();
  $conexion=$c->conecta();

 
  
if ($funcion=="modificar") {

   $sql=" UPDATE usuario set nombre='$nombre',cedula='$cedula',email='$email',clave='$clave',telefono='$telefono',estado='$estado' where cedula='$cedula2'";
  $sql=mysqli_query($conexion,$sql);
    header("location:tabla_usuario.php");    
}







 ?>