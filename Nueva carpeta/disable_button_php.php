<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        Cantidad: <input type="text" name="cantidad" id="" required> <input type="submit" name="boton" value="Enviar" >
        <br><b>Nota:</b> La cantidad no puede ser mayor a 5
    </form>
    <?php
        $disabled="";
        if(isset($_POST['boton'])){
            if($_POST['cantidad']>5){
                echo '<script>alert("'.$_POST['cantidad'].' no puede ser mayor a 2")</script>';
                $disabled = "disabled";
            }
            else{
                echo '<script>alert("Digito correcto")</script>';
                $disabled = "";
            }
        }
    
    ?>
    <input type="button" value="Ejemplo" <?=$disabled?>>
</body>
</html>