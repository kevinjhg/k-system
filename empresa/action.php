<?php



require_once"../conexionbd/conexion.php";

 $c =new conexion();
        $conexion=$c->conecta(); 

if (!empty($_POST['codprod'])) {
	$busqueda=explode(" ",$_POST["codprod"]);
	$cantidad1=$_POST["cantidad1"];
	$sql="SELECT * FROM productos where idproductos like '".$busqueda[0]."%'";
	for ($i=1;$i < count($busqueda);$i++) { 
		if (!empty($busqueda[$i])) {
			$sql .="AND idproductos LIKE '%".$busqueda[$i]."%'";
		}
	}error_reporting(0);
     $sql.="LIMIT 1";
	$result = mysqli_query($conexion,$sql);
	 ?>
	<table class="tabla_lista" style="width: 100%;padding:0px; text-align: left;">

	
   <tr>
	      
	      <th>Descripcion</th>
	      <th>Stock</th>
	      <th>Precio $</th>
	      <th>Precio Bs</th>
	      <th>total</th>
	       <th>totalBs</th>

	  </tr>

<?php
	  
	
       while($item = mysqli_fetch_array($result)){
$Producto=$item['idproductos'];
       	$precio=$item['precio'];
       	$preciobs=$item['preciobs'];
       	$stock=$item['cantidad'];
       	$total=$precio*$cantidad1;
       	$totalbs=$preciobs*$cantidad1;
       	$nombre=$item['nombre'];
		echo 
         ' <tr>
             
             
             <td>'.$nombre.'</td>
             <td>'.$stock.'</td>
            <td>';echo number_format($item['precio'],2,",",".").' $</td>
             <td>';echo number_format($item['preciobs'],2,",",".").' Bs</td>
             <td>';echo number_format($total,2,",",".").' $</td>
             <td>';echo number_format($totalbs,2,",",".").' $</td>
 </tr>';}};
?>

<!-- para validar boton de facturar disabled-->
<script type="text/javascript">
	function activar(){
		
		var campo = $('#cant').val();
		var stock = <?php echo $stock ?>;
		if ((campo !=null)&&(campo!='')){
			$('#btn_facturar').attr('disabled',false);
			
		}
		if (campo<=stock) {
			$('#btn_facturar').attr('disabled',false);
			

		}else{
			$('#btn_facturar').attr('disabled',true);
			alertify.alert('No hay suficiente','Quedan <?php echo $stock ?> unidades de <?php echo  $nombre?>');

		}
	}
</script>


<?php

if (!empty($_POST['codprod2'])) {
	$busqueda=explode(" ",$_POST["codprod2"]);
	$cantidad2=$_POST["cantidad2"];
	$sql="SELECT * FROM productos where idproductos like '".$busqueda[0]."%'";
	for ($i=1;$i < count($busqueda);$i++) { 
		if (!empty($busqueda[$i])) {
			$sql .="AND idproductos LIKE '%".$busqueda[$i]."%'";
		}
	}error_reporting(0);
     $sql.="LIMIT 1";
	$result = mysqli_query($conexion,$sql);
	
	
       while($item = mysqli_fetch_array($result)){
$idp=$item['idproductos'];
       	$precio=$item['precio'];
       	$stock2=$item['cantidad'];
       	$total2=$precio*$cantidad2;
       	$nombre2=$item['nombre'];
		echo 
         ' <tr>
           
             <td>'.$item['nombre'].'</td>
             <td>'.$item['cantidad'].'</td>
            <td>';echo number_format($item['precio'],2,",",".").' $</td>
             <td>';echo number_format($item['preciobs'],2,",",".").' Bs</td>
             <td>';echo number_format($total2,2,",",".").' $</td>
 </tr>';}};
?>
<!-- para validar boton de facturar disabled-->
<script type="text/javascript">
	function activar2(){
		
		var campo2 = $('#cant2').val();
		var stock2 = <?php echo $stock2 ?>;
		
		if (campo2>stock2) {
			$('#btn_facturar').attr('disabled',true);
			alert('No hay suficiente','Quedan <?php echo $stock2 ?> unidades de <?php echo  $nombre2?>');
			

		}else{
			$('#btn_facturar').attr('disabled',false);
			
		}
	}
</script>

<?php

if (!empty($_POST['codprod3'])) {
	$busqueda=explode(" ",$_POST["codprod3"]);
	$cantidad3=$_POST["cantidad3"];
	$sql="SELECT * FROM productos where idproductos like '".$busqueda[0]."%'";
	for ($i=1;$i < count($busqueda);$i++) { 
		if (!empty($busqueda[$i])) {
			$sql .="AND idproductos LIKE '%".$busqueda[$i]."%'";
		}
	}error_reporting(0);
     $sql.="LIMIT 1";
	$result = mysqli_query($conexion,$sql);

	
       while($item = mysqli_fetch_array($result)){
$idp=$item['idproductos'];
       	$precio3=$item['precio'];
       	$stock3=$item['cantidad'];
       	$total3=$precio3*$cantidad3;
       		$nombre3=$item['nombre'];
		echo 
         ' <tr>
           
             <td>'.$item['nombre'].'</td>
             <td>'.$stock3.'</td>
            <td>';echo number_format($item['precio'],2,",",".").' $</td>
             <td>';echo number_format($item['preciobs'],2,",",".").' Bs</td>
             <td>';echo number_format($total3,2,",",".").' $</td>
 </tr>';}};

 ?>
 <!-- para validar boton de facturar disabled-->
<script type="text/javascript">
	function activar3(){
		
		var campo3 = $('#cant3').val();
		var stock3 = <?php echo $stock3 ?>;
		if ((campo3 !=null)&&(campo3!='')){
			$('#btn_facturar').attr('disabled',false);
			
		}
		if (campo3<=stock3) {
			$('#btn_facturar').attr('disabled',false);
			

		}else{
			$('#btn_facturar').attr('disabled',true);
			alertify.alert('No hay suficiente','Quedan <?php echo $stock3 ?> unidades de <?php echo  $nombre3?>');

		}
	}
</script><?php

if (!empty($_POST['codprod4'])) {
	$busqueda=explode(" ",$_POST["codprod4"]);
	$cantidad4=$_POST["cantidad4"];
	$sql="SELECT * FROM productos where idproductos like '".$busqueda[0]."%'";
	for ($i=1;$i < count($busqueda);$i++) { 
		if (!empty($busqueda[$i])) {
			$sql .="AND idproductos LIKE '%".$busqueda[$i]."%'";
		}
	}error_reporting(0);
     $sql.="LIMIT 1";
	$result = mysqli_query($conexion,$sql);
	
       while($item = mysqli_fetch_array($result)){
$idp=$item['idproductos'];
       	$precio4=$item['precio'];
       	$stock4=$item['cantidad'];
       	$total4=$precio4*$cantidad4;
       		$nombre4=$item['nombre'];
		echo 
         ' <tr>
           
             <td>'.$item['nombre'].'</td>
             <td>'.$item['cantidad'].'</td>
            <td>';echo number_format($item['precio'],2,",",".").' $</td>
             <td>';echo number_format($item['preciobs'],2,",",".").' Bs</td>
             <td>';echo number_format($total4,2,",",".").' $</td>

 </tr>';}};
?>
<!-- para validar boton de facturar disabled-->
<script type="text/javascript">
	function activar4(){
		
		var campo4 = $('#cant4').val();
		var stock4 = <?php echo $stock4 ?>;
		if ((campo4 !=null)&&(campo4!='')){
			$('#btn_facturar').attr('disabled',false);
			
		}
		if (campo4<=stock4) {
			$('#btn_facturar').attr('disabled',false);
			

		}else{
			$('#btn_facturar').attr('disabled',true);
			alertify.alert('No hay suficiente','Quedan <?php echo $stock4 ?> unidades de <?php echo  $nombre4?>');

		}
	}
</script>
<?php
if (!empty($_POST['codprod5'])) {
	$busqueda=explode(" ",$_POST["codprod5"]);
	$cantidad5=$_POST["cantidad5"];
	$sql="SELECT * FROM productos where idproductos like '".$busqueda[0]."%'";
	for ($i=1;$i < count($busqueda);$i++) { 
		if (!empty($busqueda[$i])) {
			$sql .="AND idproductos LIKE '%".$busqueda[$i]."%'";
		}
	}error_reporting(0);
     $sql.="LIMIT 1";
	$result = mysqli_query($conexion,$sql);
	
	
       while($item = mysqli_fetch_array($result)){
$idp=$item['idproductos'];
       	$precio5=$item['precio'];
       	$stock5=$item['cantidad'];
       	$total5=$precio5*$cantidad5;
       		$nombre5=$item['nombre'];
		echo 
         ' <tr>
           
             <td>'.$item['nombre'].'</td>
             <td>'.$item['cantidad'].'</td>
            <td>';echo number_format($item['precio'],2,",",".").' $</td>
             <td>';echo number_format($item['preciobs'],2,",",".").' Bs</td>
             <td>';echo number_format($total5,2,",",".").' $</td>
 </tr>';}};

?>
<!-- para validar boton de facturar disabled-->
<script type="text/javascript">
	function activar5(){
		
		var campo5 = $('#cant5').val();
		var stock5 = <?php echo $stock5 ?>;
		if ((campo5 !=null)&&(campo5!='')){
			$('#btn_facturar').attr('disabled',false);
			
		}
		if (campo5<=stock5) {
			$('#btn_facturar').attr('disabled',false);
			

		}else{
			$('#btn_facturar').attr('disabled',true);
			alertify.alert('No hay suficiente','Quedan <?php echo $stock5 ?> unidades de <?php echo  $nombre5?>');
		}
	}
</script>
<?php

if (!empty($_POST['codprod6'])) {
	$busqueda=explode(" ",$_POST["codprod6"]);
	$cantidad6=$_POST["cantidad6"];
	$sql="SELECT * FROM productos where idproductos like '".$busqueda[0]."%'";
	for ($i=1;$i < count($busqueda);$i++) { 
		if (!empty($busqueda[$i])) {
			$sql .="AND idproductos LIKE '%".$busqueda[$i]."%'";
		}
	}error_reporting(0);
     $sql.="LIMIT 1";
	$result = mysqli_query($conexion,$sql);

	
       while($item = mysqli_fetch_array($result)){
$idp=$item['idproductos'];
       	$precio6=$item['precio'];
       	$stock6=$item['cantidad'];
       	$total6=$precio6*$cantidad6;
       	$nombre6=$item['nombre'];
		echo 
         ' <tr>
           
             <td>'.$item['nombre'].'</td>
             <td>'.$item['cantidad'].'</td>
            <td>';echo number_format($item['precio'],2,",",".").' $</td>
             <td>';echo number_format($item['preciobs'],2,",",".").' Bs</td>
             <td>';echo number_format($total6,2,",",".").' $</td>
 </tr>';}};

?>
<!-- para validar boton de facturar disabled-->
<script type="text/javascript">
	function activar6(){
		
		var campo6 = $('#cant6').val();
		var stock6 = <?php echo $stock6 ?>;
		if ((campo6 !=null)&&(campo6!='')){
			$('#btn_facturar').attr('disabled',false);
			
		}
		if (campo6<=stock6) {
			$('#btn_facturar').attr('disabled',false);
			

		}else{
			$('#btn_facturar').attr('disabled',true);
			alertify.alert('No hay suficiente','Quedan <?php echo $stock6 ?> unidades de <?php echo  $nombre6?>');
		}
	}
</script>
<?php
if (!empty($_POST['codprod7'])) {
	$busqueda=explode(" ",$_POST["codprod7"]);
	$cantidad7=$_POST["cantidad7"];
	$sql="SELECT * FROM productos where idproductos like '".$busqueda[0]."%'";
	for ($i=1;$i < count($busqueda);$i++) { 
		if (!empty($busqueda[$i])) {
			$sql .="AND idproductos LIKE '%".$busqueda[$i]."%'";
		}
	}error_reporting(0);
     $sql.="LIMIT 1";
	$result = mysqli_query($conexion,$sql);

	
       while($item = mysqli_fetch_array($result)){
$idp=$item['idproductos'];
       	$precio7=$item['precio'];
       	$stock7=$item['cantidad'];
       	$total7=$precio7*$cantidad7;
       	$nombre7=$item['nombre'];
		echo 
         ' <tr>
           
             <td>'.$item['nombre'].'</td>
             <td>'.$item['cantidad'].'</td>
            <td>';echo number_format($item['precio'],2,",",".").' $</td>
             <td>';echo number_format($item['preciobs'],2,",",".").' Bs</td>
             <td>';echo number_format($total7,2,",",".").' $</td>
 </tr>';}};


?>
<!-- para validar boton de facturar disabled-->
<script type="text/javascript">
	function activar7(){
		
		var campo7 = $('#cant7').val();
		var stock7 = <?php echo $stock7 ?>;
		if ((campo7 !=null)&&(campo7!='')){
			$('#btn_facturar').attr('disabled',false);
			
		}
		if (campo7<=stock7) {
			$('#btn_facturar').attr('disabled',false);
			

		}else{
			$('#btn_facturar').attr('disabled',true);
		alertify.alert('No hay suficiente','Quedan <?php echo $stock7 ?> unidades de <?php echo  $nombre7?>');
		}
	}
</script>
<?php





if (!empty($_POST['codprod8'])) {
	$busqueda=explode(" ",$_POST["codprod8"]);
	$cantidad8=$_POST["cantidad8"];
	$sql="SELECT * FROM productos where idproductos like '".$busqueda[0]."%'";
	for ($i=1;$i < count($busqueda);$i++) { 
		if (!empty($busqueda[$i])) {
			$sql .="AND idproductos LIKE '%".$busqueda[$i]."%'";
		}
	}error_reporting(0);
     $sql.="LIMIT 1";
	$result = mysqli_query($conexion,$sql);
	
       while($item = mysqli_fetch_array($result)){
$idp=$item['idproductos'];
       	$precio8=$item['precio'];
       	$stock8=$item['cantidad'];
       	$total8=$precio8*$cantidad8;
       	$nombre8=$item['nombre'];
		echo 
         ' <tr>
           
             <td>'.$item['nombre'].'</td>
             <td>'.$item['cantidad'].'</td>
            <td>';echo number_format($item['precio'],2,",",".").' $</td>
             <td>';echo number_format($item['preciobs'],2,",",".").' Bs</td>
             <td>';echo number_format($total8,2,",",".").' $</td>
 </tr>';}};

 ?>
<!-- para validar boton de facturar disabled-->
<script type="text/javascript">
	function activar8(){
		
		var campo8 = $('#cant8').val();
		var stock8 = <?php echo $stock8 ?>;
		if ((campo8 !=null)&&(campo8!='')){
			$('#btn_facturar').attr('disabled',false);
			
		}
		if (campo8<=stock8) {
			$('#btn_facturar').attr('disabled',false);
			

		}else{
			$('#btn_facturar').attr('disabled',true);
			alertify.alert('No hay suficiente','Quedan <?php echo $stock8 ?> unidades de <?php echo  $nombre8?>');
		}
	}
</script>
<?php
 if (!empty($_POST['codprod9'])) {
	$busqueda=explode(" ",$_POST["codprod9"]);
	$cantidad9=$_POST["cantidad9"];
	$sql="SELECT * FROM productos where idproductos like '".$busqueda[0]."%'";
	for ($i=1;$i < count($busqueda);$i++) { 
		if (!empty($busqueda[$i])) {
			$sql .="AND idproductos LIKE '%".$busqueda[$i]."%'";
		}
	}error_reporting(0);
     $sql.="LIMIT 1";
	$result = mysqli_query($conexion,$sql);
	
	
       while($item = mysqli_fetch_array($result)){
$idp=$item['idproductos'];
       	$precio9=$item['precio'];
       	$stock9=$item['cantidad'];
       	$total9=$precio9*$cantidad9;
       	$nombre9=$item['nombre'];
		echo 
         ' <tr>
           
             <td>'.$item['nombre'].'</td>
             <td>'.$item['cantidad'].'</td>
            <td>';echo number_format($item['precio'],2,",",".").' $</td>
             <td>';echo number_format($item['preciobs'],2,",",".").' Bs</td>
             <td>';echo number_format($total9,2,",",".").' $</td>
 </tr>';}};
 ?>
<!-- para validar boton de facturar disabled-->
<script type="text/javascript">
	function activar9(){
		
		var campo9 = $('#cant9').val();
		var stock9 = <?php echo $stock9 ?>;
		if ((campo9 !=null)&&(campo9!='')){
			$('#btn_facturar').attr('disabled',false);
			
		}
		if (campo9<=stock9) {
			$('#btn_facturar').attr('disabled',false);
			

		}else{
			$('#btn_facturar').attr('disabled',true);
		alertify.alert('No hay suficiente','Quedan <?php echo $stock9 ?> unidades de <?php echo  $nombre9?>');

		}
	}
</script>
<?php
 if (!empty($_POST['codprod10'])) {
	$busqueda=explode(" ",$_POST["codprod10"]);
	$cantidad10=$_POST["cantidad10"];
	$sql="SELECT * FROM productos where idproductos like '".$busqueda[0]."%'";
	for ($i=1;$i < count($busqueda);$i++) { 
		if (!empty($busqueda[$i])) {
			$sql .="AND idproductos LIKE '%".$busqueda[$i]."%'";
		}
	}error_reporting(0);
     $sql.="LIMIT 1";
	$result = mysqli_query($conexion,$sql);

	
       while($item = mysqli_fetch_array($result)){
$idp=$item['idproductos'];
       	$precio10=$item['precio'];
       	$stock10=$item['cantidad'];
       	$total10=$precio10*$cantidad10;
       	$nombre10=$item['nombre'];
		echo 
         ' <tr>
           
             <td>'.$item['nombre'].'</td>
             <td>'.$item['cantidad'].'</td>
            <td>';echo number_format($item['precio'],2,",",".").' $</td>
             <td>';echo number_format($item['preciobs'],2,",",".").' Bs</td>
             <td>';echo number_format($total10,2,",",".").' $</td>
 </tr>

</table>
 ';}};
 ?>

  
<!-- para validar boton de facturar disabled-->
<script type="text/javascript">
	function activar10(){
		
		var campo10 = $('#cant10').val();
		var stock10 = <?php echo $stock10 ?>;
		if ((campo10 !=null)&&(campo10!='')){
			$('#btn_facturar').attr('disabled',false);
			
		}
		if (campo10<=stock10) {
			$('#btn_facturar').attr('disabled',false);
			

		}else{
			$('#btn_facturar').attr('disabled',true);
		alertify.alert('No hay suficiente','Quedan <?php echo $stock10 ?> unidades de <?php echo  $nombre10?>');
		}
	}
</script>


		
	
	
