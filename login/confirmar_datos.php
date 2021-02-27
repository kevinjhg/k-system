
<?php




try{
	$base=new PDO("mysql:host=localhost; dbname=php_database","root","");

	$base->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	$sql="SELECT *FROM usuarios WHERE  email=:email and clave =:clave";
	$resultado=$base->prepare($sql);
	$email=htmlentities(addslashes($_POST["email"]));
	$clave=htmlentities(addslashes($_POST["clave"]));
	$resultado->bindvalue(":email",$email);
    $resultado->bindvalue(":clave",$clave);
    $resultado->execute();
    $numero_registro=$resultado->rowcount();
    if ($numero_registro!=0) {
        session_start();
        $_SESSION["email"]=$_POST["email"];
        
    	
        echo "<script>alert('Bienvenido $email');window.location='../empresa/reg_empresa.php'</script>";

          
    }else{
    	
    	echo "<script>alert('Usuario no registrado');window.history.go(-1)</script>";
      
    }
   

}catch(Exception $e){
	die("error:" .$e->getmessage());

}


  



?>

