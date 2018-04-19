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
	public function getitem($usuario,$pass)
		{
		//$password_1 = md5($pass);//encrypt the password before saving in the database
		$sql1="select  idcliente from clientes where correo = '$usuario' AND password = '$pass'";
		$sql2=null;
		foreach ($this->conexion->query($sql1) as $res)
		{
			$sql2=$res;
		}
		
			$this->conexion=null;
		return $sql2;
	}
	
		public function gettable($usuario,$pass)
		{
			
			$sql1="select  idcliente from clientes where correo = '$usuario' AND password = '$pass'";
		$sql2=null;
		foreach ($this->conexion->query($sql1) as $res)
		{
			$sql2=$res;
		}
			
			$sql3="select a.idclientcuenta as 'Numero de cuenta',b.nombre,a.monto
from cliente_cuenta a
INNER JOIN cuenta b 
 ON a.idclientcuenta = b.idcuenta INNER JOIN clientes c
 ON a.idcliente =c.idcliente
  where c.idcliente = $sql2[0]"; 
  
  
  
  
  $stmt =$this->conexion->prepare($sql3);
//$sth->execute();

/* Fetch all of the remaining rows in the result set */
//print("Fetch all of the remaining rows in the result set:\n");
//$result = $sth->fetchAll(\PDO::FETCH_ASSOC);
//$b=$result;


$stmt->execute(array("%$query%"));
// fetching rows into array
$data = $stmt->fetchAll();

$b= "<table border='1'>
<tr>
<th>Numero de  Cuenta</th>
<th>Tipo</th>
<th>Saldo Disponible</th>
</tr>";



foreach($data as $row){

$b = $b .  "<tr>";
$b = $b . "<td>" . $row['Numero de cuenta']  . "</td>";
$b = $b . "<td>" . $row['nombre']  . "</td>";
$b = $b . "<td>" . $row['monto']  . "</td>";
$b = $b .  "</tr>";

}

$b = $b .  "</table>";




		$this->conexion=null;
		return $b;
	}
		public function gettable0($usuario,$pass)
		{
		//$password_1 = md5($pass);//encrypt the password before saving in the database
		$sql1="select  idcliente from clientes where correo = '$usuario' AND password = '$pass'";
		$sql2=null;
		foreach ($this->conexion->query($sql1) as $res)
		{
			$sql2=$res;
		}
		
			$sql3="	select a.idcuenta as 'Numero de cuenta',b.nombre,a.monto
from cliente_cuenta a
INNER JOIN cuenta b 
 ON a.idcuenta = b.idcuenta INNER JOIN clientes c
 ON a.idcliente =c.idcliente
 where c.idcliente = $sql2[0]"; 
			
	

 
  	$sql2=null;
		foreach ($this->conexion->query($sql3) as $res)
		{
			$sql2=$res;
		}
		
		
		
		
		
		
	$b= "<table border='1'>
<tr>
<th>Numero de  Cuenta</th>
<th>Tipo</th>
<th>Saldo Disponible</th>
</tr>";
foreach ($sql2 as &$value) {
    $b = $b .  "<tr>";
$b = $b . "<td>" . $value  . "</td>";

$b = $b .  "</tr>";
}

$b = $b .  "</table>";

$this->conexion=null;
		return $b;
		//return $sql2;
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
			
	}
	
}
?>
