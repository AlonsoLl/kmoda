<?php
require_once("conexion.php");
$id = $_POST['codigo'];
$ing = $_POST['ing'];
$sql="UPDATE producto SET stock = stock + '$ing' where id_producto='$id'";

$rs=$cnx->query($sql);
header("location: productos.php");
?>

