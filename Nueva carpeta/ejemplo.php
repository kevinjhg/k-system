<?php 
	while($row=mysqli_fetch_array($query)){ 
?> 
   	<tr> 
	    <td>
	    	<?php echo $row['Nombre'] ?>
	    </td>
	    <td>
	    	<input type="text" name="producto[<?php echo $row['idproductos'];?>]['cantidad2']" 
	    	size="5" value="<?php echo $_SESSION['carrito'][$row['idproductos']]['cantidad2'] ?>" />
	        <input type="hidden" name="producto[<?php echo $row['idproductos'];?>]['cantidad3']" 
	        value="<?php echo $_SESSION['carrito'][$row['idproductos']]['cantidad2'] ?>" />
	    </td> 
	    <td>
	    	<?php echo number_format($row['precio'] ,2,",",".") ?>$
	    </td> 
        <td>
        	<?php echo number_format( $_SESSION['carrito'][$row['idproductos']]['cantidad2']*$row['precio'],2,",","." )?>$
        </td> 
        <td>
        	<?php echo number_format($preciopbs,2,",",".") ?>Bs 
        </td>
    </tr>
<?php 

?>