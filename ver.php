<?php
require_once("conexion.php");
$id = $_POST['id_categoria'];
$sql="SELECT * FROM categoria WHERE id_categoria=$id";
$rs=$cnx->query($sql) or $resp='error';
$reg=$rs->fetchObject();
$resp['nombrecateg']=$reg->nombrecateg;
$resp['descripcion']=$reg->descripcion;
echo json_encode($resp);
