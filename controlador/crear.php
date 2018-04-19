
<?php
$dpi=$_POST["dpi"];
$nomb=$_POST["nombres"];
$apell=$_POST["apellido"];
$tel=$_POST["telefono"];
$dir=$_POST["direccion"];
$corr=$_POST["correo"];
$password=$_POST["password"];
$usertype=$_POST["user_type"];

if(isset($_POST['user_type'])){
    $usertype = $_POST['user_type'];
}
	require_once("../modelo/set.php");
	$menu = new user();
	$pd = $menu->insertar($dpi,$nomb,$apell,$tel,$dir,$corr,$password,$usertype);
	require_once("../vista/view.php");
?>
