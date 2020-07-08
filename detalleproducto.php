<?php
require_once("conexion.php");
$id = $_POST['id_producto'];
$sql="SELECT * FROM producto WHERE id_producto=$id";
$rs=$cnx->query($sql) or $resp='error';
$reg=$rs->fetchObject();

$resp['nombre_producto']=$reg->nombre_producto;
$resp['fecha_ingreso']=$reg->fecha_ingreso;
$resp['descripcion_producto']=$reg->descripcion_producto;

echo json_encode($resp);
