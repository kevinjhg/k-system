<?php


require_once"../conexionbd/conexion.php";

 $c =new conexion();
        $conexion=$c->conecta(); 

if (!empty($_POST['busqueda2'])) {
	$busqueda=explode(" ",$_POST["busqueda2"]);
	
	$sql="SELECT * FROM productos where nombre like '".$busqueda[0]."%'";
	for ($i=1;$i < count($busqueda);$i++) { 
		if (!empty($busqueda[$i])) {
			$sql .="AND nombre LIKE '%".$busqueda[$i]."%'";
		}
	}error_reporting(0);
     $sql.="LIMIT 3";
	$result = mysqli_query($conexion,$sql);
	echo'  
	<table  class="tabla_search_productos">
	<thead>
	    
	      <th>ID</th>
	      <th>Descripcion</th>
	      <th>Stock</th>
	      <th>Precio $</th>
	      <th>Precio Bs</th>
	      <th>Estado</th>
	    
	     
	      </thead>';
	
       while($item = mysqli_fetch_array($result)){
$idp=$item['idproductos'];
       	$precio=$item['precio'];
       	$preciobs=$item['preciobs'];
       	$stock=$item['cantidad'];
       	$total=$precio*$cantidad1;
       	$estado=$item['estado'];
		echo 
         ' <tr>
         <td>'.$idp.'</td>
           
             <td>'.$item['nombre'].'</td>
             <td>'.$stock.'</td>
            <td>';echo number_format($item['precio'],2,",",".").' $</td>
             <td>';echo number_format($item['preciobs'],2,",",".").' Bs</td>
             
             <td>'.$estado.'</td>;

 </tr>';}};