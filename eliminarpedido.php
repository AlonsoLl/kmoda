<?php
require_once("conexion.php");
$id = $_GET['id_pedido'];
$sql="DELETE FROM pedido WHERE id_pedido=$id";
$rs=$cnx->query($sql);
header("location: pedidos.php");
?>