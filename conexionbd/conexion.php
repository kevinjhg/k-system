<?php 

class conexion {
	public $bd_host;
	 public $bd_user;
	 public $bd_pass;
	 public $bd_name;



  public function __construct(){
  	$this->bd_host='localhost';
  	$this->bd_user='root';
  	$this->bd_pass='';
  	$this->bd_name='sistemadeventas';
	
}



	 public function conecta(){
	 	$conn = new mysqli($this->bd_host,$this->bd_user,$this->bd_pass,$this->bd_name);
	 	return $conn;
	 }
	
 

 	}


	



/*class conexion {
	function ConectarBD(){
	 $bd_host='localhost';
	 $bd_user='root';
	 $bd_pass='';
	 $bd_name='php_database';

	 $conecta =mysqli_connect(
	 	 $bd_host,
	 	 $bd_user,
	 	 $bd_pass,
	 	 $bd_name)
	 or die('error');
	 if ($conecta) {
	 	return$conecta;
	 }
	 }*/



/*class conexion extends mysqli{
	private $bd_host='localhost';
	private $bd_user='root';
	private $bd_pass='';
	private $bd_name='php_database';



  public function __construct(){
	parent:: __construct($this->bd_host,$this->bd_user,$this->bd_pass,$this->bd_name);
	
$this->connect_errno ? die('error'.mysqli_connect_errno())
:$m = 'conectado';
//echo $m;

}
}
*/