<?php
require_once("conexion.php");
$id = $_POST['txtid'];
$nom = $_POST['nomb'];
$dir = $_POST['dir'];
$tel = $_POST['tel'];
$con = $_POST['contac'];
$sql="UPDATE proveedor SET nombre_pr='$nom', direccion='$dir', telefono='$tel', contacto='$con' WHERE id_proveedor=$id";
$cnx->query($sql) or $resp=1;
echo $resp;
header("location: proveedores.php");
?>