<?php
require_once("conexion.php");
$id = $_POST['id_producto'];
$sql="SELECT * FROM producto WHERE id_producto=$id";
$rs=$cnx->query($sql) or $resp='error';
$reg=$rs->fetchObject();

$resp['id_proveedor']=$reg->id_proveedor;
$resp['id_categoria']=$reg->id_categoria;
$resp['nombre_producto']=$reg->nombre_producto;
$resp['talla']=$reg->talla;
$resp['color']=$reg->color;
$resp['stock']=$reg->stock;
$resp['precio']=$reg->precio;
$resp['descripcion_producto']=$reg->descripcion_producto;

echo json_encode($resp);
