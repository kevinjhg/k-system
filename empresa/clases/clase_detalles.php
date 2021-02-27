

<?php
class detalles{
public function insertarDatosdetalles($datos){
	$c =new conexion();
	$conexion=$c->conecta();
	$sql="INSERT INTO `ventas_detalles`(`ventaid`,`productosid`,`cantidad_pedida`,`precio_totald`,`precio_totalbs`) values ('$datos[0]','$datos[1]','$datos[2]','$datos[3]','$datos[4]')";

	$result=mysqli_query($conexion,$sql);
	if(mysqli_affected_rows($conexion)>0)
		return TRUE;
	else
		return FALSE;
}

public function insertarDatosdetalles2($datos2){


	$sql2="INSERT INTO `ventas_detalles`(`ventaid`,`productosid`,`cantidad_pedida`,`precio_totald`,`precio_totalbs`) values ('$datos2[0]','$datos2[1]','$datos2[2]','$datos2[3]','$datos2[4]')";

	$result=mysqli_query($conexion,$sql2);
	if(mysqli_affected_rows($conexion)>0)
		return TRUE;
	else
		return FALSE;
	
}



public function mostrar_detalles($datos){
	$c =new conexion();
	$conexion=$c->conecta();

    $result=mysqli_query($conexion,$datos);
    return mysqli_fetch_all($result,MYSQLI_ASSOC);

}

public function eliminar_detalles($idventa){

 $c =new conexion();
        $conexion=$c->conecta();
  $sql=" DELETE FROM ventas WHERE  idventa=$idventa";
  
 
  return $result=mysqli_query($conexion,$sql);
    
  
}


public function act_datos_detalles($datos){
	$c =new conexion();
        $conexion=$c->conecta();
        $sql="UPDATE empresa SET nombre_empresa='$datos[0]',sector_empresa='$datos[1]', valor_empresa='$datos[2]',ing_3meses='$datos[3]',estado='$datos[4]' WHERE cedula_usuario ='$datos[5]'"  ;
        
        return $result=mysqli_query($conexion,$sql);
       

}
}




?>