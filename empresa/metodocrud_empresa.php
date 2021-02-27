<?php

session_start();

class Empresa{
public function insertarDatosempresa($datos){
	$c =new conexion();
	$conexion=$c->conecta();
	$sql="INSERT INTO empresa (nombre_empresa,sector_empresa,valor_empresa,ing_3meses,cedula_usuario,estado) values ('$datos[0]','$datos[1]','$datos[2]','$datos[3]','".$_SESSION['cedula']."','1')";
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

public function eliminar_empresa($cedula_usuario){

 $c =new conexion();
        $conexion=$c->conecta();
  $sql=" DELETE FROM empresa WHERE  cedula_usuario=$cedula_usuario";
  
 
  return $result=mysqli_query($conexion,$sql);
    
  
}


public function act_datos_empresa($datos){
	$c =new conexion();
        $conexion=$c->conecta();
        $sql="UPDATE empresa SET nombre_empresa='$datos[0]',sector_empresa='$datos[1]', valor_empresa='$datos[2]',ing_3meses='$datos[3]',estado='$datos[4]' WHERE cedula_usuario ='$datos[5]'"  ;
        
        return $result=mysqli_query($conexion,$sql);
       

}
}




?>