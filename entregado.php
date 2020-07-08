<?php
require_once("conexion.php");
$id = $_POST['ped'];
$sql="UPDATE pedido SET id_estado_pedido='2' WHERE id_estado_pedido='1' and id_pedido='$id'";
$rs=$cnx->query($sql);
header("location: inicio.php");
?>