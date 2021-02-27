<?php 
require_once '../conexionbd/conexion.php';
require_once 'usuario.php';




  	
  	$idproductos =$_POST['codigo'];
    $nombre =$_POST['nombre'];
    

  $datos = array(
    $idproductos,
    $nombre,
   
);

$obj=new usuario();

if ($clave!=$confir) {
    echo "<script>alert('las contraseñas no coinciden');window.history.go(-1);</script>";;
}


elseif ($obj->insertar($datos)==1) {
  echo "<script>alert('se ha registrado el nuevo ususario con exito');window.location='../index.php'</script>";

}else{
  echo "<script>alert('Este ususario ya existe');window.history.go(-1);</script>";
}









 ?>