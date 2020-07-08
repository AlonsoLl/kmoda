<?php
require_once("conexion.php");
$id = $_GET['id_producto'];
$sql="UPDATE PRODUCTO SET estado='1' WHERE estado='0' and id_producto='$id'";
$rs=$cnx->query($sql);
header("location: productos.php");
?>