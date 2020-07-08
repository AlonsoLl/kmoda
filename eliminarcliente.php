<?php
require_once("conexion.php");
$id = $_GET['id_cliente'];
$sql="DELETE FROM cliente WHERE id_cliente=$id";
$rs=$cnx->query($sql);
header("location: clientes.php");
?>