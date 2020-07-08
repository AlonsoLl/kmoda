<?php
require_once("conexion.php");
$id = $_POST['codigocompra'];
$sql="UPDATE compras set estado='1' where estado='0' and id_compra='$id'";

$rs=$cnx->query($sql);
header("location: compras.php");
?>