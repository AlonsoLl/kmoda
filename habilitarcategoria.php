<?php
require_once("conexion.php");
$id = $_GET['id_categoria'];
$sql="UPDATE categoria SET estado='1' WHERE estado='0' and id_categoria='$id'";
$rs=$cnx->query($sql);
header("location: categorias.php");
?>