<?php  

class metodos{
public function insertarDatosNombre($datos){
	$c =new conexion();
	$conexion=$c->conectarBD();

	$sql="INSERT INTO usuario (nombre,cedula,email,clave) values ('$nombre[0]','$cedula[1]','$email[2]','$clave[3]')";
	return $result=mysqli_query($conexion,$sql);
}
}
?>