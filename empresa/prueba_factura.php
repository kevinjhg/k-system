<head><link rel="stylesheet" type="text/css" href="../css/style.css"></head>
<?php

require_once"header.php";
require_once"sidebar.php";

		
require_once "../conexionbd/conexion.php"; 

require_once"clases/clase_clientes.php"; 
require_once"../singup/usuario.php"; 
?>

<div style="margin: auto;margin-top: 5%;width: 60%;">


<table border="1" class="tabla_user" style="border-collapse: collapse;">
<thead>
		<tr>
		
			<th>cedula</th>
			<th>id_cliente</th>
			<th>Nombre</th>
			<th>Cedula</th>
			<th>Telefono</th>

	    </tr>
</thead>
	

	<tr>
    <form  action="" method="post">

	<td><input type="number" name="cedula"></td>
<?php



$c =new conexion();
$conexion=$c->conecta();

if(isset($_POST['btn'])){
	$cedula = $_POST['cedula'];
	

	if (empty($cedula)) {
		echo "esta vacio";
	}else{
		$usuario =new cliente;
		$resultado = $usuario->iniciar($cedula);
		if($resultado!=FALSE){
			$sql="SELECT * FROM clientes where cedula=$cedula";
			foreach($resultado as $valor){
			    echo"<td>".$valor['id_cliente']."</td>";
				echo "<td>".$valor["nombre"]."</td>";
				echo"<td>". $valor["cedula"]."</td>";
				echo"<td>". $valor["telefono"]."</td>";
			}
		
			
				
		}else{
			
			echo "<script>alert('No esta registrado')</script>";
		}
	}
}

?>
</tr>
			
</table>



<table border="1" class="tabla_user" style="border-collapse: collapse; margin-top: 5%;">

	


	<thead>
	<tr>
		
			<th>Producto</th>
			<th>Cantidad</th>
			<th>nombre</th>
			<th>Inventario</th>
			<th>precio</th>
			
			
	    </tr>
	  	</thead>
	<tr>
		
	<td><input type="text" name="nombre"></td>
   <td><input type="number" name="cantidad1"></td>
<?php



$c =new conexion();
$conexion=$c->conecta();

if(isset($_POST['btn'])){
	$nombre = $_POST['nombre'];
	

	if (empty($nombre)) {
		echo "esta vacio";
	}else{
		$usuario =new user;
		$resultado = $usuario->iniciard($nombre);
		if($resultado!=FALSE){
			$sql="SELECT * FROM productos where nombre=$nombre";
			foreach($resultado as $valor){
			    echo"<td>".$valor["nombre"]."</td>";
				echo "<td>".$valor["cantidad"]."</td>";
				echo"<td>". $valor["precio"]."</td>";

			
			}
		
				
		}else{
			
			echo "<script>alert('No esta registrado')</script>";
		}
	}
}

?>

</tr>
</table>
	


	<input type="submit" name="btn">
</form>

</div>


