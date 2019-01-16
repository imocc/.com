<?php 

session_start();

$_SESSION['usuarionombre'] = $_POST['nombre'];
$_SESSION['usuarioapellido'] = $_POST['apellido'];
$_SESSION['usuariocorreo'] = $_POST['correo'];
$_SESSION['usuariocontra'] = $_POST['contra'];

header("Location:user.php");


 ?>