
<?php
$a=$_POST["user"];
$b=$_POST["password"];
	require_once("../modelo/modelo.php");
	$menu = new user();
	$pd = $menu->lista_usuarios($a,$b);
	$pd2 = $menu->getuser($a,$b);
	require_once("../vista/vista.php");
?>

