<?php
require_once"../conexionbd/conexion.php";

class user extends conexion{

 /*en esta parte muestran datos de usuario de la base de datos*/


     public function mostrar($datos){
          $c =new conexion();
          $conexion=$c->conecta();

          $result=mysqli_query($conexion,$datos);
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

      public function iniciar ($nombre,$clave){
      	$sql = "SELECT * FROM usuario where  nombre='$nombre' AND estado!=0 AND clave = '$clave'";
      	$result = $this->conecta()->query($sql);
		$numrows = $result->num_rows;
		$fila = $result->FETCH_ALL(MYSQLI_ASSOC);  
      	if ($numrows==1) {
      		return $fila;
      	}else{
      		return false;
      	}
      	
      }

	public function iniciard ($idproductos){
        $sql = "SELECT * FROM productos where  idproductos='$idproductos'";
        $result = $this->conecta()->query($sql);
    $numrows = $result->num_rows;
    $fila = $result->FETCH_ALL(MYSQLI_ASSOC);  
        if ($numrows==1) {
          return $fila;
        }else{
          return false;
        }
        
      }



 public function actualizar ($sql){




 }

public function eliminar($cedula){

 $c =new conexion();
        $conexion=$c->conecta();
  $sql=" DELETE FROM usuario WHERE  cedula=$cedula";
  
 
  return $result=mysqli_query($conexion,$sql);
    
  
}


    public function getproducto(){
      $c =new conexion();
        $conexion=$c->conecta();
  $result = mysqli_query($conexion, "SELECT * FROM productos") or die('Query failed');

while($row = mysqli_fetch_array($result))
  {
   $row['idproductos'];
   $row['nombre'];
   $row['cantidad'];

   
  }

}
}
?>