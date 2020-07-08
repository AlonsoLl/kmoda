<?php
require_once("conexion.php");
$id = $_POST['idped'];
$cue = $_POST['cantidpagos'];
$pag= $_POST['modpag'];
$ped = $_POST['estped'];
$sql="UPDATE pedido set cantidad_pago='$cue', id_estado_pago='$pag', id_estado_pedido='$ped' where  id_pedido='$id'";

$rs=$cnx->query($sql);
header("location: pedidos.php");
?>