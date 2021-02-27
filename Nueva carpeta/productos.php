<!DOCTYPE html>
<html>
<head>
    <title>Productos</title>
    <script type="text/javascript"></script>
    <script>
        
    

        


     

        
    </script>
</head>
<body>

</body>
</html>

<?php 

  require_once"conexionbd/conexion.php";
    if(isset($_GET['action']) && $_GET['action']=="add"){ 
          
        $idproductos=intval($_GET['idproductos']); 
          
        if(isset($_SESSION['carrito'][$idproductos])){ 
              
            $_SESSION['carrito'][$idproductos]['cantidad2']++; 
             
        }else{ 
            $c =new conexion();
          $conexion=$c->conecta();
              
              $sql = "SELECT *FROM productos where  idproductos={$idproductos}";

        
            
            $query_s=mysqli_query($conexion,$sql); 
           


            if(mysqli_num_rows($query_s)!=0){ 
                
                  
               $row_s=mysqli_fetch_array($query_s);
                  
                  $_SESSION["carrito"] [$row_s["idproductos"]]=array("cantidad2"=>1,"precio"=>$row_s["precio"]);
                  
            }else{ 
                  
                $message="This product id it's invalid!"; 
                  
            } 
            }
              
        } 
          
    
  

?> 

      <h1>lista de productos</h1> 
    
    

    <?php 
        if(isset($message)){ 
            echo "<h2>$message</h2>"; 
        } 
        
    ?> 
    <table border="0"> 
        <tr> 
            <th>ID</th> 
            <th>Nombre</th> 
            <th>Inventario</th> 
            <th>Precio</th>
            <th>Agregar</th> 
        </tr> 
          
        <?php 
           $c =new conexion();
        $conexion=$c->conecta();
           $result = mysqli_query($conexion, "SELECT * FROM productos") or die('Query failed');

while($row = mysqli_fetch_array($result))
  {


   if ($row['cantidad']<= "0") {
        $row["cantidad"]=  "Agotado";
    }

    
                  
        ?> 
            <tr> 
                <td><?php echo $row['idproductos'] ?></td> 
                <td><?php echo $row['nombre'] ?></td> 
                <td><?php if($row["cantidad"] == "Agotado") {
    echo '<span style="color:red">' . $row["cantidad"] . '</span>';
} 
else {
    echo '<span style="color:green">' . $row["cantidad"] . '</span>';
}     ?></td>
                <td><?php echo $row['precio'] ?>$</td> 
                 
                <td>
                    <?php
                    if ($row["cantidad"]=="Agotado") {
                         echo "no hay";
                     } else{ ?>
                    <a href="index.php?page=productos&action=add&idproductos=<?php echo $row['idproductos'] ?>"><img width="40px" src="imagenes/aggcar.png"></a>

                    </td> 

            </tr> 
           
        <?php 
                
            } 
          }
        ?> 
          
    </table>

</body>
</html>