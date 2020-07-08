<?php
require_once("conexion.php");
$id = $_POST['id_producto'];
$sql="SELECT * FROM producto WHERE id_producto=$id";
$rs=$cnx->query($sql) or $resp='error';
$reg=$rs->fetchObject();

$resp['motivo']=$reg->motivo;

echo json_encode($resp);
?>