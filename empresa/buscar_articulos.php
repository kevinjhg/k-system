<?php



require_once"search2.php";
 $c =new conexion();
        $conexion=$c->conecta(); 

if (!empty($_GET['busqueda'])) {
	$busqueda=$_GET["busqueda"];
	$sql="SELECT * FROM tbimg where articulo like '".$busqueda."%'";

	$result = mysqli_query($conexion,$sql);
	echo'<div id="tabla_search">
	<table class="tabla_user">
	      <tr>
	      <th>Cod_Producto</th>
	      <th>Nombre</th>
	      <th>Inventario</th>
	      <th>Precio $</th>
	      <th>Precio Bs</th>
	      </tr>';
	
       while($item = mysqli_fetch_array($result)){
		echo 
         ' <tr>
                 
             <td>'.$item['id'].'</td>
             <td>'.$item['articulo'].'</td>
             <td>'.$item['stock'].'</td>
            <td>';echo number_format($item['precio'],2,",",".").' $</td>
             <td>';echo number_format($item['preciobs'],2,",",".").' Bs</td>

          </tr>';

		
	}
	
}
?></table>
</div>