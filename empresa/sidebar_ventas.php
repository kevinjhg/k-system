<head>
<script type="text/javascript"></script>
 <script src="../js/jquery-3.5.1.js"></script>
</head>





<nav class="sidebar_ventas"> 
		<div class="text">Menú</div>

			<ul class="ul">
			     <li><a href="home.php"><i class="fas fa-home"></i></a></li>
			     

			     <li>
			      	<a href="#" class="feat-btn"><i style="color: rgb(79,210,15);" class="fas fa-box"></i><span><i class="fas fa-sort-down firts"></i></span></a>
			     	
			     	  <ul class="feat-show">
			     	  	 <li><a href="tabla_prod.php"><i style="font-size: 20px;color: rgb(79,210,15);" class="fas fa-eye"></i></a></li>
			     	  	 <li><a href="reg_prod.php"><i style="font-size: 20px;color: rgb(79,210,15);" class="fas fa-plus-circle"></i></a></li>
			     	  </ul>
			     </li>
			       
			       <li>
                      <a href="#" class="clientes-btn"><i style="color: rgb(201,14,188);" class="far fa-id-card"></i><span><i class="fas fa-sort-down second"></i></span></a>
                       <ul class="clientes-show">
                      	  <li><a href="tabla_clientes.php"><i style="font-size: 20px;color: rgb(201,14,188);" class="fas fa-eye"></i></a></li>
                      	  <li><a href="clientes.php"><i style="font-size: 20px;color: rgb(201,14,188);" class="fas fa-user-plus"></i></a></li>
                        </ul>

                    </li>

			        <li>
                      <a href="#" class="ventas-btn"><i style="color:rgb(248,50,50);" class="fas fa-shopping-cart"></i><span><i class="fas fa-sort-down third"></i></span></a>
                       <ul class="ventas-show">
                       	 <li><a href="tabla_ventas.php"><i style="font-size: 20px;color:rgb(248,50,50);" class="fas fa-eye"></i></a></li>
                       	 <li><a href="facturacion.php"><i style="font-size: 20px;color:rgb(248,50,50);" class="fas fa-cart-plus"></i></a></li>
                       </ul>
                    </li>

			     <li>
			     	<a href="#" class="user-btn"><i style="color: rgb(12,163,243);" class="fas fa-users"></i><span><i class="fas fa-sort-down four"></i></span></a>

                      <ul class="user-show">
                       	 <li><a href="tabla_usuario.php"><i style="font-size: 20px;color: rgb(12,163,243);" class="fas fa-eye"></i></a></li>
                       	 <li><a href="reg_usuario.php"><i style="font-size: 20px;color: rgb(12,163,243);" class="fas fa-user-plus"></i></a></li>
                       </ul>
			      </li>

			
			     </ul>

	 </nav>

	 <script type="text/javascript">
	 	$('.feat-btn').click(function(){
	 		$('nav ul .feat-show').toggleClass("show");
	 		$('nav ul .firts').toggleClass("rotate");
	 	});


	 		$('.clientes-btn').click(function(){
	 		$('nav ul .clientes-show').toggleClass("show");
	 		$('nav ul .second').toggleClass("rotate");

	 		
	 	});

	 		$('.ventas-btn').click(function(){
	 		$('nav ul .ventas-show').toggleClass("show");
	 		$('nav ul .third').toggleClass("rotate");
	 		});

	 	    $('.user-btn').click(function(){
	 		$('nav ul .user-show').toggleClass("show");
	 		$('nav ul .four').toggleClass("rotate");
	 		});


	 		$('nav ul li').click(function(){
	 			$(this).addClass("active").siblings().removeClass("active");
	 		});
     </script>