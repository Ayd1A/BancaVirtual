
<?php
session_start();
unset($_SESSION['user_name']);
unset($_SESSION['user1']);


 session_destroy();
 header('Location:../index.html');
?>

