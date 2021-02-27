<!DOCTYPE html>
<html>
<head>
	<title>filas</title>
	<script type="text/javascript"></script>
</head>
<body>
<form   action="index.php" method="POST"   >
			


<table border="1">
	
	<tr>
		<td id="num1"> <select required=""><option>1</option></select> <input required="" type="text" name=""></td>
		<td id="num2"><select required=""><option>2</option></select> <input required="" type="text" name=""></td>
	</tr>
</table>
<input  type="submit" name="">
</form>

 <a    href="javascript:mostrar()">Mostrar
<a    href="javascript:ocultar()">ocultar




<style type="text/css">
	#num1, #num2{
		margin: auto;
		display: none;


	}
a{     margin: auto;
	   padding: 4px 25px;
    background: rgb(19, 143, 247);
    border: 1px solid #1161B0;
    color: #fff;
    border-radius: 4px;
    text-decoration:none;
}
form{
    width: 50%;
	margin: auto;
	margin-top: 10%;
}

</style>

		 
	<script type="text/javascript">
				function mostrar(){

 document.getElementById('num1').style.display="block";



 

 document.getElementById('num2').style.display="block";

}
function ocultar(){

 document.getElementById('num2').style.display="none"
}
	</script>











			</form>
</body>
</html>