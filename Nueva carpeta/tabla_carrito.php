<div id="container">

  
        <div id="main"> 

        	 
    
    

    <?php 
        if(isset($message)){ 
            echo "<h2>$message</h2>"; 
        } 
    ?> 
  
              
               <?php require($_page.".php"); ?>
        </div><!--end main-->
          
        <div  id="sidebar"> 
        	<h1>Carrito</h1> 
        	<table>
            	<tr>
            		<th>Producto</th>
            		<th></th>
            		<th>Cantidad</th>
            	</tr>
            </table>
<?php 
error_reporting(0);
$c =new conexion();
        $conexion=$c->conecta();
  
    if(isset($_SESSION['carrito'])){ 
           
       $sql="SELECT * FROM productos WHERE idproductos IN ("; 

        foreach($_SESSION['carrito'] as $idproductos => $value) { 
            $sql.=$idproductos.","; 
        } 
          
        $sql=substr($sql, 0, -1).") ORDER BY Nombre ASC"; 
        
         $query=mysqli_query($conexion,$sql); 

        while($row=mysqli_fetch_array($query)){ 
              
        ?> 

          
            <h3 id="h3car1"><?php echo $row['nombre'] ?>  <?php echo $_SESSION['carrito'][$row['idproductos']]['cantidad2'] ?>
            </h3>

        <?php 
              
        } 
   ?> 
        <hr /> 
          <a id="btn_car"  href="index.php?page=carrito"><img id="car" src="imagenes/carrito.png"><br>Ir al carrito </a> 
         
    <?php 
          
    }else{ 
          
        echo "<p><img src='imagenes/carrito_vacio.png'></p>"; 
          
    } 
  
?>
            
        </div><!--end sidebar-->
  
    </div><!--end container-->


    <div class="panel-footer">
  <div class="container">
    <p>Códigos <a href="https://www.baulphp.com/" target="_blank">BaulPHP</a></p>
   
</div>
  </div>