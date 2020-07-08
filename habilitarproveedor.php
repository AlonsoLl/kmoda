<?php
require_once("conexion.php");
$id = $_GET['id_proveedor'];
$sql="UPDATE proveedor SET estado='1' WHERE estado='0' and id_proveedor='$id'";
$rs=$cnx->query($sql);
header("location: proveedores.php");
?>