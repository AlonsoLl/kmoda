<?php
require_once("conexion.php");
$id = $_POST['txtid'];
$prov = $_POST['prov'];
$cate = $_POST['cate'];
$nomb = $_POST['nomb'];
$tal = $_POST['tall'];
$col = $_POST['colo'];
$can = $_POST['can'];
$pre = $_POST['pre'];
$des = $_POST['des'];

$sql="UPDATE producto SET id_proveedor='$prov', id_categoria='$cate', nombre_producto='$nomb',
talla='$tal', color='$col', stock='$can', precio='$pre', descripcion_producto='$des' WHERE id_producto=$id";
$cnx->query($sql) or $resp=1;
echo $resp;
header("location: productos.php");
?>