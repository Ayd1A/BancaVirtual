<?php
$nomb='2';
$apell='1';
$tel=$_POST["montorec"];

if(isset($_POST['user_type'])){
    $usertype = $_POST['user_type'];
}
	require_once("../modelo/set.php");
	$menu = new user();
	$pd = $menu->insertarTransTer($nomb,$apell,$tel);
	require_once("../vista/view.php");
?>
