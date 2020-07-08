<?php
require_once("conexion.php");
$id = $_POST['id_pedido'];
$sql="SELECT * FROM pedido WHERE id_pedido=$id";
$rs=$cnx->query($sql) or $resp='error';
$reg=$rs->fetchObject();

$resp['fecha']=$reg->fecha;
$resp['id_producto']=$reg->id_producto;
$resp['id_producto']=$reg->id_producto;
$resp['id_producto']=$reg->id_producto;
$resp['cantidad']=$reg->cantidad;
$resp['total']=$reg->total;
$resp['id_estado_pago']=$reg->id_estado_pago;
$resp['id_estado_pedido']=$reg->id_estado_pedido;
$resp['motivo']=$reg->motivo;
$resp['id_usuario']=$reg->id_usuario;
$resp['id_cliente']=$reg->id_cliente;

echo json_encode($resp);
?>
