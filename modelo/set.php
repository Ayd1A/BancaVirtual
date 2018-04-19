<?php
class user
{
	private $usuarios;
	private $conexion;
private  $errors;
	public function __construct()
	{
		$this->usuarios = array();
		$this->conexion = new PDO('mysql:host=localhost;dbname=bancavirtual', "root", "root");
	}

	private function set_names()
	{
		return $this->conexion->query("SET NAMES 'utf8'");
	}
	public function editar($dpi,$nomb,$apell,$tel,$dir,$corr,$password,$usertype)
	{
		
	$query = "UPDATE cliente SET dpi='$dpi',nombres='$nomb', apellido='$apell', telefono='$tel',
	 direccion='$dir',correo='$corr',password= '$password',user_type='$usertype' 
					  where dpi='$dpi'";
			
			$this->conexion->query($query);

}
	public function insertar($dpi,$nomb,$apell,$tel,$dir,$corr,$password,$usertype)
	{
	
if (empty($dpi)) { 
		array_push($errors, "dpi es requerido"); 
	}		
		
if (empty($nomb)) { 
		array_push($errors, "Nombre es requerido"); 
	}

	if (empty($password)) { 
		array_push($errors, "Contraseña es requerido"); 
	}
	
	
	if (empty($correo)) { 
		array_push($errors, "correo es requerido");  
	}
if (count($errors) == 0) {	
			$query = "INSERT INTO cliente(dpi,nombres, apellido, telefono,direccion,correo,password,user_type) 
			  VALUES('$dpi','$nomb', '$apell', '$tel', '$dir', '$corr', '$password','$usertype')";
			
			$this->conexion->query($query);

		
			return 1;
	}
	return 0;
}
	
	}
?>




		

