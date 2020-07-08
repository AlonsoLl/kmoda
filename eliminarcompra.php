<?php
require_once("conexion.php");
$id = $_POST['cod'];
$sql="DELETE FROM compras WHERE id_compra=$id";
$rs=$cnx->query($sql);
header("location: compras.php");
?>