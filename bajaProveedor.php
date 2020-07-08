<?php
require_once("conexion.php");
$id = $_POST['id_proveedor'];
$sql="SELECT * FROM proveedor WHERE id_proveedor=$id";
$rs=$cnx->query($sql) or $resp='error';
$reg=$rs->fetchObject();

$resp['nombre_pr']=$reg->nombre_pr;
$resp['motivo']=$reg->motivo;

echo json_encode($resp);
?>