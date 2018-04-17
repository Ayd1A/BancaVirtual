<?php
class user
{
	private $usuarios;
		private $usuarios2;
	private $conexion;

	public function __construct()
	{
		$this->usuarios = array();
		$this->usuarios2 = array();
		$this->conexion = new PDO('mysql:host=localhost;dbname=bancavirtual', "root", "");
	}

	private function set_names()
	{
		return $this->conexion->query("SET NAMES 'utf8'");
	}

	public function lista_usuarios($usuario,$pass)
	{
		//$password_1 = md5($pass);//encrypt the password before saving in the database
		$sql="select  nombres,apellido, correo,user_type from clientes where correo = '$usuario' AND password = '$pass'";
		foreach ($this->conexion->query($sql) as $res)
		{
			$this->usuarios[]=$res;
		}
		return $this->usuarios;
	
	}
	public function getuser2($usuario,$pass)
	{
		//$password_1 = md5($pass);//encrypt the password before saving in the database
		$sql1="select  user_type from clientes where correo = '$usuario' AND password = '$pass'";
		$sql2=null;
		foreach ($this->conexion->query($sql1) as $res)
		{
			$this->usuarios2[]=$res;
		}
		return $this->usuarios2;
			$this->conexion=null;
	}
public function getuser($usuario,$pass)
	{
		//$password_1 = md5($pass);//encrypt the password before saving in the database
		$sql1="select  user_type from clientes where correo = '$usuario' AND password = '$pass'";
		$sql2=null;
		foreach ($this->conexion->query($sql1) as $res)
		{
			$sql2=$res;
		}
		return $sql2;
			$this->conexion=null;
	}
	
}
?>
