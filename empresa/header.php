<?php session_start();
if (!isset($_SESSION["nombre"])) {
			header("location:../index.php");
		}?>
<header class="header"><!-- menu header -->
	      <div class="contenedor logo-nav-contenedor">
		
	         <a href="#" class="logo"><img id="imglogo" src="../imagenes/logo2.jpg"></a>
	         <p style="color :white;"><?php echo $_SESSION["nombre"];?></p>
	
	         <a href="home.php"><h2>LPT-STORE®</h2></a>

	             <nav class="navegacion">
		             <ul class="nav">

                         <li>
                         	<a href="home.php"><i class="fas fa-home"></i></a>
                         </li>
                        
			            
                         <li>
                         	<a href="facturacion.php"><i id="cart" class="fas fa-cart-plus"></i></a>
                         </li>
                         
                         
                           <li>
                         	<a href="cerrar_sesion.php"><img style="" src="../imagenes/salir.png"><br></a>
                         </li>


	

		
	                 </ul>
	             </nav>
	       </div>
</header>