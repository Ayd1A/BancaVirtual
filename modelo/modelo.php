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
		$this->conexion = new PDO('mysql:host=localhost;dbname=ingeniod_myapp', "ingeniod_user", "deseret1234");
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
			
			$sql3="select a.idcuenta as 'Numero de cuenta',b.nombre,a.monto
from cliente_cuenta a
INNER JOIN cuenta b 
 ON a.idcuenta = b.idcuenta INNER JOIN clientes c
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
<th>Numero de Cuenta</th>
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




		
		return $b;
	}
		public function getmov($usuario,$pass)
		{
			
			$sql1="select  idcliente from clientes where correo = '$usuario' AND password = '$pass'";
		$sql2=null;
		foreach ($this->conexion->query($sql1) as $res)
		{
			$sql2=$res;
		}
			
			$sql3="select b.nombre as 'Tipo de cuenta',a.tipo as 'Tipo de Movimiento',a.monto,a.fecha
from movimientos a
INNER JOIN cuenta b 
 ON a.idcuenta = b.idcuenta INNER JOIN clientes c
 ON a.idcliente =c.idcliente
 where c.idcliente =$sql2[0]"; 
  
  
  
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
<th>Tipo de cuenta</th>
<th>Tipo de Movimiento</th>
<th>monto</th>
<th>fecha</th>
</tr>";



foreach($data as $row){

$b = $b .  "<tr>";
$b = $b . "<td>" . $row['Tipo de cuenta']  . "</td>";
$b = $b . "<td>" . $row['Tipo de Movimiento']  . "</td>";
$b = $b . "<td>" . $row['monto']  . "</td>";
$b = $b . "<td>" . $row['fecha']  . "</td>";
$b = $b .  "</tr>";

}

$b = $b .  "</table>";




		$this->conexion=null;
		return $b;
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
