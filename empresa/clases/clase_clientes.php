<?php
require_once"../conexionbd/conexion.php";
class cliente extends conexion{
public function insertarDatoscliente($datos){
	$c =new conexion();
	$conexion=$c->conecta();
	$sql="INSERT INTO clientes (cedula,nombre,telefono,estado) values ('$datos[0]','$datos[1]','$datos[2]','1')";

	$result=mysqli_query($conexion,$sql);
	if(mysqli_affected_rows($conexion)>0)
		return TRUE;
	else
		return FALSE;
	
}



public function mostrar($datos){
	$c =new conexion();
	$conexion=$c->conecta();

    $result=mysqli_query($conexion,$datos);
    return mysqli_fetch_all($result,MYSQLI_ASSOC);

}

public function eliminar_cliente($id_cliente){

 $c =new conexion();
        $conexion=$c->conecta();
  $sql=" DELETE FROM clientes WHERE  id_cliente=$id_cliente";
  
 
  return $result=mysqli_query($conexion,$sql);
    
  
}


public function act_datos_cliente($datos){
	$c =new conexion();
        $conexion=$c->conecta();
        $sql="UPDATE empresa SET nombre_empresa='$datos[0]',sector_empresa='$datos[1]', valor_empresa='$datos[2]',ing_3meses='$datos[3]',estado='$datos[4]' WHERE cedula_usuario ='$datos[5]'"  ;
        
        return $result=mysqli_query($conexion,$sql);
       

}

 /*en esta parte se inicia sesion*/

      public function iniciar ($cedula){
      	$sql = "SELECT * FROM clientes where  cedula='$cedula' AND estado!=0";
      	$result = $this->conecta()->query($sql);
		$numrows = $result->num_rows;
		$fila = $result->FETCH_ALL(MYSQLI_ASSOC);  
      	if ($numrows==1) {
      		return $fila;
      	}else{
      		return false;
      	}
      	
      }

}




?>