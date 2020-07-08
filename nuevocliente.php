<?php
require_once("conexion.php");
$nom=$_POST['txtnombre'];
$dni=$_POST['txtdni'];
$dir=$_POST['txtdireccion'];
$cor=$_POST['txtcorreo'];
$tel=$_POST['txttelefono'];

$sql="INSERT INTO cliente (nombres, dni, direccion, correo, telefono)
		VALUES('$nom','$dni','$dir','$cor','$tel')";
		$cnx->query($sql);
		header("location: clientes.php");

?>