<?php
require_once("conexion.php");
$id = $_POST['txtid'];
$pro = $_POST['pro'];
$fech = $_POST['fech'];
$prod = $_POST['prod'];
$pre = $_POST['pre'];
$can = $_POST['can'];
$tot = $_POST['tot'];
$cue = $_POST['cuen'];
$sal = $_POST['sal'];
$ven = $_POST['ven'];
$fle = $_POST['fle'];
$pas = $_POST['pas'];


$sql="UPDATE compras SET id_proveedor='$pro', fecha_compra='$fech', nombre_producto='$prod',
precio_unidad='$pre', cantidad='$can', total='$tot', cuenta='$cue', saldo='$sal', precio_vender='$ven', flete='$fle', pasajes='$pas' WHERE id_compra=$id";
$cnx->query($sql) or $resp=1;
echo $resp;
header("location: comprasporconfirmar.php");
?>