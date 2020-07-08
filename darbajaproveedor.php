<?php
require_once("conexion.php");
$id = $_POST['id'];
$moti = $_POST['motiv'];
$sql="UPDATE proveedor SET motivo='$moti' , estado='0' WHERE estado='1' and id_proveedor='$id'";
$rs=$cnx->query($sql);
header("location: proveedoresbaja.php");
?>