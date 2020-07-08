<?php
require_once("../conexion.php");
$user = $_POST['txtemail'];
$contraseña = md5($_POST['txtclave']);

$sql="SELECT * FROM usuario WHERE user='$user' and contraseña='$contraseña'";
$rs=$cnx->query($sql);
$cont=$rs->rowCount();
if($cont==1) {
	session_start();
	$reg=$rs->fetchObject();
	$_SESSION['id_usuario']=$reg->id_usuario;
	$_SESSION['nombre']=$reg->nombre;
	$_SESSION['apellidos']=$reg->apellidos;
	$_SESSION['id_tip_usuario']=$reg->id_tip_usuario;

	header("location: ../inicio.php");
}
else header("location: principal.php");
?>