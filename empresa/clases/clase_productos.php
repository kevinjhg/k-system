<?php
require_once"../conexionbd/conexion.php";

class productos extends conexion{

 /*en esta parte muestran datos de usuario de la base de datos*/


     public function mostrar($datos){
          $c =new conexion();
          $conexion=$c->conecta();

          $result=mysqli_query($conexion,$datos);
     return mysqli_fetch_all($result,MYSQLI_ASSOC);

}







 /*en esta parte se insertan datos a la base de datos*/

	public function insertar_producto($datos){
	      $c =new conexion();
	      $conexion=$c->conecta();

	$sql="INSERT INTO productos (nombre,cantidad,precio,estado) values ('$datos[0]','$datos[1]','$datos[2]','1')";
	return $result=mysqli_query($conexion,$sql);


}


	



 public function actualizar ($sql){




 }

public function eliminar_producto($idproductos){

 $c =new conexion();
        $conexion=$c->conecta();
  $sql=" DELETE FROM productos WHERE  idproductos=$idproductos";
  
 
  return $result=mysqli_query($conexion,$sql);
    
  
}


}
?>