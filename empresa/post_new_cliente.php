<?php 
require_once '../conexionbd/conexion.php';
require_once 'clases/clase_clientes.php';




    
    
    $nombre =$_POST['nombre'];
    $cedula =$_POST['cedula'];
    
   
    $telefono=$_POST['telefono'];
    $estado=$_POST['estado'];
  

    

  $datos = array(
    
    $nombre,
    $cedula,
   
   
    $telefono,
    $estado,
   
   
);

$obj=new cliente();
$c =new conexion();
        $conexion=$c->conecta();
// Realizamos la consulta para saber si coincide con uno de esos criterios
$sql = "select * from clientes where cedula=$cedula";
$result = mysqli_query($conexion, $sql);



 // Validamos si hay resultados
 if(mysqli_num_rows($result)>0)
 {
   // Si es mayor a cero imprimimos que ya existe el producto
     echo "<script>alert('Este Cliente ya existe');window.history.go(-1);</script>";
 }
 else
 {
// Si no hay resultados, ingresamos el registro a la base de datos
$sql2 = "INSERT INTO clientes(nombre,cedula,telefono,estado)VALUES ('$nombre','$cedula','$telefono','1')";
if (mysqli_query($conexion, $sql2)) {
  // Imprimimos que se ingreso correctamente
   echo "<script>alert('se ha registrado el nuevo Cliente con exito');window.location='tabla_clientes.php'</script>";
} else {
  // Mostramos si hay algun error al insertar registro
   echo "<script>alert('error');window.location='tabla_cliente.php'</script>";

}
}
// Cerramos la conexión
$conexion->close();