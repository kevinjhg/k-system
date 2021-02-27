<?php
error_reporting(0);
if (isset($_POST["submit"])) {
	foreach ($_POST["cantidad2"] as $key => $value) {
		if ($value==0) {
			unset($_SESSION["carrito"][$key]);
		}else{
			$_SESSION["carrito"][$key]["cantidad2"]=$value;
		}
	



	}
$cantidad3=$_POST["cantidad3"]; 


}

?>



<h1>Ver compra</h1>

<a href="index.php?page=productos">Volver a la pagina de productos</a> 
<form method="post" action="index.php?page=carrito"> 
      
    <table> 
          
        <tr> 
            <th>Nombre</th> 
            <th>Cantidad</th> 
            <th>Precio</th> 
            <th>Precio total de productos</th> 
            <th>Precio Total en Bs</th> 
        </tr> 
          
        <?php 
        
          $preciobs=$_POST["preciobs"];

            $sql="SELECT * FROM productos WHERE idproductos IN ("; 
                      
                    foreach($_SESSION['carrito'] as $idproductos => $value) { 
                        $sql.=$idproductos.","; 
                    } 
                       $c =new conexion();
        $conexion=$c->conecta();
                    $sql=substr($sql, 0, -1).") ORDER BY nombre ASC"; 
                    $query=mysqli_query($conexion,$sql); 
                    $totalprice=0; 
                    while($row=mysqli_fetch_array($query)){ 
                        $subtotal=$_SESSION['carrito'][$row['idproductos']]['cantidad2']*$row['precio']; 
                        $totalprice+=$subtotal;
                        $preciopbs=$preciobs*$totalprice;
                        $totalpricebs=$preciobs*$totalprice ;
                        $IVA=$subtotal*(16/100) ;
                        $IVAtotal=$IVA+$subtotal;
                        $IVAbs=$IVA*$preciobs;
                        $TOTAL=$totalprice+$IVA;
                        $TOTALbs=$totalpricebs+$IVAbs;
                    ?> 
                   <tr> 
                            <td><?php echo $row['nombre'] ?></td>
                            <td><input type="text" name="cantidad2[<?php echo $row['idproductos'] ?>]" size="5" value="<?php echo $_SESSION['carrito'][$row['idproductos']]['cantidad2'] ?>" />
                            	<input type="hidden" name="cantidad3" value="<?php echo $_SESSION['carrito'][$row['idproductos']]['cantidad2'] ?>">
                            	

                            </td> 

                            
                            <td><?php echo number_format($row['precio'] ,2,",",".") ?>$</td> 
                             <td><?php echo number_format( $_SESSION['carrito'][$row['idproductos']]['cantidad2']*$row['precio'],2,",","." )?>$</td> 
 

                            <td><?php echo number_format($preciopbs,2,",",".") ?>Bs </td>
                           
                                
                        </tr>
                        
                    <?php 
                    $datos1 = array(
                    	$cantidad3,
                    	
                    );
                    foreach ($datos1 as $key ) {
                    	
                
                    echo$sql=" UPDATE productos set cantidad= cantidad -".$key['cantidad3[1]']." where idproductos= ".$row['idproductos']."";
  $sql=mysqli_query($conexion,$sql);

                    } }
        ?>           


                    <tr> 
                    	<th colspan="2" rowspan="6">Pie de Factura</th>
                    	<th>Sub Total</th>
                        
                         
                         <td colspan="1"> <?php echo number_format($totalprice,2,",",".") ?>$</td> 
                         <td colspan="1"> <?php echo number_format($totalpricebs,2,",",".")?>Bs</td> 
                    </tr> 
                     <tr> 
                     	<th>IVA 16%</th>
                     	<td><?php echo number_format($IVA,2,",",".")   ?>$
                     	<td><?php echo number_format($IVAbs,2,",",".")   ?>Bs
                     	</td>

                       
                    </tr> 
                    <tr>
                    	<th>Total</th>
                    	<td><?php echo number_format($TOTAL,2,",",".")?>$</td>
                    	<td><?php echo number_format($TOTALbs,2,",",".")?>Bs</td>
                    </tr>
                    
          
    </table> 
    <br /> 
     <input placeholder="Escribir precio del Dolar" type="text" required="" name="preciobs">
    <button type="submit" name="submit">Actualizar</button>

    <br>
   
 

     
</form> 
<br /> 
<p>Para eliminar un artículo, establezca su cantidad en 0. </p>
<tr>
                     
 
</body>
</html>