<?php
class user
{
	private $usuarios;
	private $conexion;

	public function __construct()
	{
		$this->usuarios = array();
		$this->conexion = new PDO('mysql:host=localhost;dbname=bancavirtual', "root", "root");
	}

	private function set_names()
	{
		return $this->conexion->query("SET NAMES 'utf8'");
	}

	public function lista_usuarios($usuario,$pass)
	{
		self::set_names();
		$sql="select  nombre, email  from usuario where usuario = '$usuario' AND password = '$pass'";
		foreach ($this->conexion->query($sql) as $res)
		{
			$this->usuarios[]=$res;
		}
		return $this->usuarios;
		$this->conexion=null;
	}
}
?>
