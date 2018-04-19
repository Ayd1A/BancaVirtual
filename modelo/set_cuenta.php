<?php
class Cuenta
{
	private $usuarios;
	private $conexion;
private  $errors;
	public function __construct()
	{
		$this->usuarios = array();
		$this->conexion = new PDO('mysql:host=localhost;dbname=bancavirtual', "root", "root");
	}

	public function insertar($saldocuenta,$dpicliente,$tipocuenta)
	{		
		
if (empty($tipocuenta)) { 
		array_push($errors, "Tipo es requerido"); 
	}

	if (empty($dpicliente)) { 
		array_push($errors, "Dpi es requerido"); 
	}
	if (empty($saldocuenta)) { 
		array_push($errors, "Saldo es requerdio"); 
	}
	
	
if (count($errors) == 0) {
		
		
	$query = "INSERT INTO cuenta(saldo,cliente_dpi,tipo) VALUES('$saldocuenta','$dpicliente','$tipocuenta')";
			
			$this->conexion->query($query);
 
		
			return 1;
	}
	return 0;
}
	
	}
?>




		

