<?php session_start();
if (!isset($_SESSION["nombre"])) {
			header("location:../index.php");
		}?>

<!DOCTYPE html>
<html>
<head>
	<title>ajax</title>
	 <script src="../js/jquery-3.5.1.js"></script>
	 <script type="text/javascript"></script>
	 <script src="../js/showselect.js" type="text/javascript"></script>
	 <link rel="stylesheet" type="text/css" href="../css/style.css">
	  <link rel="stylesheet" type="text/css" href="../css_icon/all.min.css">
<link rel="stylesheet" type="text/css" href="../bootstrap-4.0.0/bootstrap.min.css">
</head>
<body>


<nav style="width: 100%;" class="navbar navbar-expand-lg navbar-dark bg-dark">
	  <div class="contenedor logo-nav-contenedor">
		
	         <a href="#" class="logo"><img id="imglogo" src="../imagenes/logo2.jpg"></a>
	         <p style="color :white;"><?php echo $_SESSION["nombre"];?></p>
	
	         <a href="home.php"><h2>LPT-STORE®</h2></a>

	             <div class="navegacion">
		             <ul class="nav">

                         <li>
                         	<a href="home.php"><i style="color:#0B69EE" class="fas fa-home"></i></a>
                         </li>
                        
			            
                         <li>
                         	<a href="facturacion.php"><i id="cart" class="fas fa-cart-plus"></i></a>
                         </li>
                         
                         
                           <li>
                         	<a href="cerrar_sesion.php"><img style="" src="../imagenes/salir.png"><br></a>
                         </li>


	

		
	                 </ul>
	             </div>
	       </div>
	<a href="#" class="navbar-brand"></a>
	<ul class="navbar-nav ml-auto">
		<form   id="form" class="form-inline my-2 my-lg-0">
			<input style=" margin: 0;border-radius: .25rem; background: white; width:64% ;height: 2.4rem;" autocomplete="off" type="search" id="search" class="form-control mr-sm-2" placeholder="Buscar Producto..." name="busqueda1">
			<ul id="response1"></ul>
			<button type="submit" name="buscap" class="btn btn-success my-2 my-sm-0" >Buscar</button>
		</form>
	</ul>
</nav>

<div class="container">
	<div class="row">

		
	</div>
</div>

<script src="app.js"></script>

</body>
</html>