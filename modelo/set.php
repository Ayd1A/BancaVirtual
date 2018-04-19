<?php
class user
{
	private $usuarios;
	private $conexion;
private  $errors;
	public function __construct()
	{
		$this->usuarios = array();
		$this->conexion = new PDO('mysql:host=localhost;dbname=ingeniod_myapp', "ingeniod_user", "deseret1234");
	}

	private function set_names()
	{
		return $this->conexion->query("SET NAMES 'utf8'");
	}
	public function editar($nomb,$apell,$tel,$dpi,$dir,$corr,$password,$usertype)
	{
	

		
	$query = "UPDATE clientes SET nombres='$nomb', apellido='$apell', telefono='$tel',
	 dpi='$dpi',direccion='$dir',correo='$corr',password= '$password',user_type='$usertype' 
					  where dpi='$dpi'";
			
			$this->conexion->query($query);

}
	public function insertar($nomb,$apell,$tel,$dpi,$dir,$corr,$password,$usertype)
	{
	
		
		
if (empty($nomb)) { 
		array_push($errors, "Nombre es requerido"); 
	}

	if (empty($password)) { 
		array_push($errors, "Contraseña es requerido"); 
	}
	if (empty($dpi)) { 
		array_push($errors, "dpi es requerido"); 
	}
	
	if (empty($correo)) { 
		array_push($errors, "correo es requerido");  
	}
if (count($errors) == 0) {
		//$password_1 = md5($password);//encrypt the password before saving in the database

		
	$query = "INSERT INTO clientes (nombres, apellido, telefono, dpi,direccion,correo,password,user_type) 
					  VALUES('$nomb', '$apell', '$tel', '$dpi', '$dir', '$corr', '$password','$usertype')";
			
			$this->conexion->query($query);

		
			return 1;
	}
	return 0;
}




	public function insertarTransTer($nomb,$apell,$tel)
	{
	
		 
		
if (empty($nomb)) { 
		array_push($errors, "Nombre es requerido"); 
	}

	if (empty($apell)) { 
		array_push($errors, "Contraseña es requerido"); 
	}
	if (empty($tel)) { 
		array_push($errors, "dpi es requerido"); 
	}
	
	
if (count($errors) == 0) {
		//$password_1 = md5($password);//encrypt the password before saving in the database  idcliente 	idcuenta 	monto 	tipo 

		
	$query = "INSERT INTO movimientos (idcliente, idcuenta , monto, tipo ) 
					  VALUES('$nomb', '$apell', '$tel', 'debito')";
			
			$this->conexion->query($query);

		
			return 1;
	}
	return 0;
}




	
	}
?>




		

