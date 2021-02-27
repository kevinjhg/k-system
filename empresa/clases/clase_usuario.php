<?php
class usuario{
public function insertarDatosusuario($datos){
	$c =new conexion();
	$conexion=$c->conecta();
	$sql="INSERT INTO `usuario`(`nombre`,`cedula`,`email`,`clave`,`telefono`,'estado','rango') values ('$datos[0]','$datos[1]','$datos[2]','$datos[3]','$datos[4]','$datos[5]','$datos[6]')";

	$result=mysqli_query($conexion,$sql);
	if(mysqli_affected_rows($conexion)>0)
		return TRUE;
	else
		return FALSE;
}




	



public function mostrar_usuario($datos){
	$c =new conexion();
	$conexion=$c->conecta();

    $result=mysqli_query($conexion,$datos);
    return mysqli_fetch_all($result,MYSQLI_ASSOC);

}

public function eliminar_usuario($cedula){

 $c =new conexion();
        $conexion=$c->conecta();
  $sql=" DELETE FROM usuario WHERE  cedula=$cedula";
  
 
  return $result=mysqli_query($conexion,$sql);
    
  
}


public function act_datos_usuario($datos){
	$c =new conexion();
        $conexion=$c->conecta();
        $sql="UPDATE usuario SET nombre='$datos[0]',cedula='$datos[1]', email='$datos[2]',clave='$datos[3]',telefono='$datos[4]' WHERE cedula='$datos[5]'"  ;
        
        return $result=mysqli_query($conexion,$sql);
       

}
}




?>