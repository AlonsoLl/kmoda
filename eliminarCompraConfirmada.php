<?php
require_once("conexion.php");
$id = $_POST['id_compra'];
$sql="SELECT * FROM compras WHERE id_compra=$id";
$rs=$cnx->query($sql) or $resp='error';
$reg=$rs->fetchObject();

$resp['nombre_producto']=$reg->nombre_producto;

echo json_encode($resp);
?>