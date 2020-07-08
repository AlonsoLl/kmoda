<?php
require_once("conexion.php");
$id = $_GET['id_categoria'];
$sql="DELETE FROM categoria WHERE id_categoria=$id";
$rs=$cnx->query($sql);
header("location: categorias.php");
?>