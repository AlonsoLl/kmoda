<?php
require_once("conexion.php");
$id = $_POST['txtid'];
$nom = $_POST['nomb'];
$dni = $_POST['dni'];
$dir = $_POST['dir'];
$cor = $_POST['cor'];
$tel = $_POST['tel'];

$sql="UPDATE cliente SET nombres='$nom', dni='$dni', direccion='$dir', correo='$cor', telefono='$tel' WHERE id_cliente=$id";
$cnx->query($sql) or $resp=1;
echo $resp;
header("location: clientes.php");
?>