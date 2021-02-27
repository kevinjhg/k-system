<SCRIPT LANGUAGE="JavaScript">
<!--
var mailcount = 0;
function cerrar(obj){
	email=document.getElementById("emailNode"); 
	email.parentNode.removeChild(email.parentNode.childNodes[mailcount+7]);
	mailcount --;
	if (mailcount==0){
		//retirar el código para borrar la última dirección de mail 
		document.getElementById("mailManagment").removeChild(document.getElementById("cerrarMail"));
	}
}
function newEntry(inputName,text){
	newInput = document.createElement("input");
	newInput.type="text";
	newInput.name=inputName;
	newNode = document.createElement("tr");
	newNode.appendChild(document.createElement("td"));
	newNode.appendChild(document.createElement("td"));
	newNode.firstChild.appendChild(document.createTextNode(text));
	newNode.lastChild.appendChild(newInput);
	
	return newNode;
}

function newMail(){
	mailcount ++;
	email=document.getElementById("emailNode");
	//Creo el nuevo campo
	newNode=newEntry("email"+mailcount,"Email alternativo "+mailcount+":");
	//Muestro el nuevo campo
	email.parentNode.insertBefore(newNode,email);

	//Agregar el código para borrar el último mail
	if (mailcount==1){
		newClose = document.createElement("a");
		newClose.id="cerrarMail";
		newClose.href="javascript:cerrar(this)";
		newClose.appendChild(document.createTextNode("Borrar último"));
		document.getElementById("mailManagment").appendChild(newClose);
	}
}
//-->
</SCRIPT>
</HEAD>
<BODY>
<FORM METHOD=POST ACTION="nuevo.php">
	 <?php           require_once"conexionbd/conexion.php";
                     require_once"singup/usuario.php";        

                      $obj= new usuario();
             
                      $sql=" SELECT * FROM productos where cantidad>0 ORDER BY nombre ASC";
                      $datos = $obj->mostrar($sql);?>
<table>
<tr>
<td>stock:</td>
<td> <INPUT TYPE="number" NAME="stock"></td>
</tr>
<tr>
<td>producto:</td>
<td><select>
	<option>
		
	</option>
</select></td>
</tr>
<tr>
<td>Contraseña:</td>
<td><INPUT TYPE="password" NAME="password"></td>
</tr>
<tr>
<td>Email principal:</td>
<td><INPUT TYPE="text" NAME="email0"></td>
</tr>
<tr id="emailNode">
<td colspan="2"><CENTER id="mailManagment"><A HREF="javascript:newMail();">Agregar otro mail</A>&nbsp;</CENTER></td></tr>
<tr><td><INPUT TYPE="submit"></td><td><INPUT TYPE="reset"></td></tr>
</table>
</form>


<!DOCTYPE html>
<html>

<head>
	<title>showhide</title>
	 <script src="jquery-3.5.1.js"></script>
	 <script type="text/javascript"></script>
</head>
<body>


 	<form class="myform">
 		<p>
 			user:<input type="text" name="">
 		</p>



 	</form>
<button id="mybutton" onclick="showhideelement()">show form</button>


 

 <script>
  

 
 $(".myform").hide();
  
  function showhideelement(){
  	let text = "";

  	if($("#mybutton").text() === "show form"){
  		$(".myform").show();
  		text= "hide form";

  	}else{
  		$(".myform").hide();
  		text="show form";
  	}
  	$("#mybutton").html(text);
  }

</script>










</body