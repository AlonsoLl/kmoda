<?php
require_once("conexion.php");
$id = $_POST['id_cliente'];
$sql="SELECT * FROM cliente WHERE id_cliente=$id";
$rs=$cnx->query($sql) or $resp='error';
$reg=$rs->fetchObject();
$resp['nombres']=$reg->nombres;
$resp['dni']=$reg->dni;
$resp['direccion']=$reg->direccion;
$resp['correo']=$reg->correo;
$resp['telefono']=$reg->telefono;

echo json_encode($resp);
?>