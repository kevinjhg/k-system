<?php 
require_once '../conexionbd/conexion.php';
require_once 'usuario.php';




  	
  	
    $nombre =$_POST['nombre'];
    $cantidad =$_POST['cantidad'];
    $precio=$_POST['precio'];
    $estado=$_POST['estado'];
  

  	

  $datos = array(
    
    $nombre,
    $cantidad,
    $precio,
    $estado,
   
   
);

$obj=new usuario();
$c =new conexion();
	      $conexion=$c->conecta();
// Realizamos la consulta para saber si coincide con uno de esos criterios
$sql = "select * from productos where nombre='$nombre'";
$result = mysqli_query($conexion, $sql);



 // Validamos si hay resultados
 if(mysqli_num_rows($result)>0)
 {
	 // Si es mayor a cero imprimimos que ya existe el usuario
  	 echo "<script>alert('Este Producto ya existe');window.history.go(-1);</script>";
 }
 else
 {
// Si no hay resultados, ingresamos el registro a la base de datos
$sql2 = "INSERT INTO productos(nombre, cantidad, precio,estado)VALUES ('$nombre', '$cantidad', '$precio','1')";
if (mysqli_query($conexion, $sql2)) {
	// Imprimimos que se ingreso correctamente
	 echo "<script>alert('se ha registrado el nuevo Producto con exito');window.location='tabla_prod.php'</script>";
} else {
	// Mostramos si hay algun error al insertar registro
	 echo "<script>alert('Este Producto ya existe');window.history.go(-1);</script>";
}

}
// Cerramos la conexión
$conexion->close();