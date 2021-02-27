<?php
require_once "../conexionbd/conexion.php";
require_once "../empresa/usuario.php";



if (empty($_POST["codprod"])) {
  $busqueda="";
}else{
$busqueda=$_POST["codprod"];
}
 $c =new conexion();
        $conexion=$c->conecta(); 

if (!empty($_POST['codprod'])) {
	$busqueda=explode(" ",$_POST["codprod"]);
	$cantidad1=$_POST["cantidad1"];
	$sql="SELECT * FROM productos where idproductos like '".$busqueda[0]."%'";
	for ($i=1;$i < count($busqueda);$i++) { 
		if (!empty($busqueda[$i])) {
			$sql .="AND idproductos LIKE '%".$busqueda[$i]."%'";
		}
	}error_reporting(0);
     $sql.="LIMIT 1";
	$result = mysqli_query($conexion,$sql);
	echo'  
	<table>
	      <tr>
	      
	      <th>Descripcion</th>
	      <th>Stock</th>
	      <th>Precio $</th>
	      <th>Precio Bs</th>
	      <th>total</th>
	    
	      </tr>';
	
       while($item = mysqli_fetch_array($result)){
$idp=$item['idproductos'];
       
       	$stock=$item['cantidad'];
       	
		echo 	$stock;
}};




echo$busqueda;



$obj= new usuario();


 		
 		
 	    $sql=" SELECT * FROM productos where idproductos=idproductos ";
             
             
 		$datos = $obj->mostrar($sql);
 		
 		
 		foreach ($datos as $key ) {
 			$stock=$key['cantidad'];
}
echo$stock;

?> <div id="resultado"></div>