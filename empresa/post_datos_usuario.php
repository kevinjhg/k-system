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
$c =new conexion();
        $conexion=$c->conecta();
// Realizamos la consulta para saber si coincide con uno de esos criterios
$sql = "select * from usuario where cedula=$cedula";
$result = mysqli_query($conexion, $sql);



 // Validamos si hay resultados
 if(mysqli_num_rows($result)>0)
 {
   // Si es mayor a cero imprimimos que ya existe el producto
     echo "<script>alert('Este Usuario ya existe');window.history.go(-1);</script>";
 }
 else
 {
// Si no hay resultados, ingresamos el registro a la base de datos
$sql2 = "INSERT INTO usuario(nombre,cedula,email,clave,telefono,estado)VALUES ('$nombre','$cedula','$email','clave','$telefono','1')";
if (mysqli_query($conexion, $sql2)) {
  // Imprimimos que se ingreso correctamente
   echo "<script>alert('se ha registrado el nuevo Usuario con exito');window.location='tabla_usuario.php'</script>";
} else {
  // Mostramos si hay algun error al insertar registro
   echo "<script>alert('se ha registrado el nuevo Usuario con exito');window.location='tabla_usuario.php'</script>";

}
}
// Cerramos la conexión
$conexion->close();