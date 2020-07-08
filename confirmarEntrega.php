<?php
require_once("conexion.php");
$id = $_POST['id_pedido'];
$sql="SELECT * FROM pedido WHERE id_pedido=$id";
$rs=$cnx->query($sql) or $resp='error';
$reg=$rs->fetchObject();

$resp['id_producto']=$reg->id_producto;
$resp['cantidad']=$reg->cantidad;
$resp['total']=$reg->total;
$resp['id_cliente']=$reg->id_cliente;

echo json_encode($resp);
?>