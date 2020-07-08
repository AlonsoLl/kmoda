<?php
require_once("conexion.php");
$id = $_POST['id_compra'];
$sql="SELECT * FROM compras WHERE id_compra=$id";
$rs=$cnx->query($sql) or $resp='error';
$reg=$rs->fetchObject();

$resp['id_proveedor']=$reg->id_proveedor;
$resp['fecha_compra']=$reg->fecha_compra;
$resp['nombre_producto']=$reg->nombre_producto;
$resp['precio_unidad']=$reg->precio_unidad;
$resp['cantidad']=$reg->cantidad;
$resp['total']=$reg->total;
$resp['cuenta']=$reg->cuenta;
$resp['saldo']=$reg->saldo;
$resp['precio_vender']=$reg->precio_vender;
$resp['flete']=$reg->flete;
$resp['pasajes']=$reg->pasajes;


echo json_encode($resp);
