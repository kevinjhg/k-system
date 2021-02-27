<?php
require_once"../conexionbd/conexion.php";

class prod extends conexion {

 /*en esta parte muestran datos de produtos de la base de datos*/


     public function mostrar($datos1){
          $c =new conexion();
          $conexion=$c->conecta();

          $result=mysqli_query($conexion,$datos1);
     return mysqli_fetch_all($result,MYSQLI_ASSOC);

}







 /*en esta parte se insertan datos a la base de datos*/

	public function insertar($datos){
	      $c =new conexion();
	      $conexion=$c->conecta();

	$sql="INSERT INTO productos (nombre,cantidad,precio,estado) values ('$datos[0]','$datos[1]','$datos[2]','1')";
	return $result=mysqli_query($conexion,$sql);


}
 /*en esta parte se inicia sesion*/

      public function iniciar ($nombre){
      	$sql = "SELECT *FROM productos where  nombre='$nombre'";
      	$result = $this->conecta()->query($sql);
		$numrows = $result->num_rows;
		$fila = $result->FETCH_ALL(MYSQLI_ASSOC);  
      	if ($numrows==1) {
      		return $fila;
      	}else{
      		return false;
      	}
      	
      }

	