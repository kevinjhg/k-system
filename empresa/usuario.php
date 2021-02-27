<?php
require_once"../conexionbd/conexion.php";

class usuario extends conexion {

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

      public function iniciar ($email,$clave){
      	$sql = "SELECT *FROM usuario where  email='$email' AND estado!=0 AND clave = '$clave'";
      	$result = $this->conecta()->query($sql);
		$numrows = $result->num_rows;
		$fila = $result->FETCH_ALL(MYSQLI_ASSOC);  
      	if ($numrows==1) {
      		return $fila;
      	}else{
      		return false;
      	}
      	
      }

	


public function act_datos_productos($datos){
  $c =new conexion();
        $conexion=$c->conecta();
        $sql="UPDATE productos SET nombre='$datos[0]',cantidad='$datos[1]', estado='$datos[2]',precio='$datos[3]',preciobs='$datos[4]' WHERE idproductos='$datos[0]'"  ;
        
        return $result=mysqli_query($conexion,$sql);
       

}


public function eliminar($idproductos){

 $c =new conexion();
        $conexion=$c->conecta();
  $sql=" DELETE  FROM productos WHERE  idproductos=$idproductos";
  
 
  return $result=mysqli_query($conexion,$sql);
    
  
}
}