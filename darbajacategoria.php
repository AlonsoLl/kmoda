<?php
require_once("conexion.php");
$id = $_GET['id_categoria'];
$sql="UPDATE categoria SET estado='0' WHERE estado='1' and id_categoria='$id'";
$rs=$cnx->query($sql);
header("location: categoriasbaja.php");
?>