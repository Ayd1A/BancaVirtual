
<?php
$tpcuenta=$_POST["tipo"];
$dpicliente=$_POST["dpi"];
$saldo=$_POST["saldo"];

if(isset($_POST['user_type'])){
    $usertype = $_POST['user_type'];
}
	require_once("../modelo/set_cuenta.php");
	$menu1 = new Cuenta();
	$pd = $menu1->insertar($tpcuenta,$dpicliente,$saldo);
	header('location:../menuAdmin.php');
?>
