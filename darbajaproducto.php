<?php
require_once("conexion.php");
$id = $_POST['id'];
$moti = $_POST['motiv'];
$sql="UPDATE PRODUCTO SET motivo='$moti' , estado='0' WHERE estado='1' and id_producto='$id'";
$rs=$cnx->query($sql);
header("location: productos.php");
?>