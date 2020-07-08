<?php
require_once("conexion.php");
$pr=$_POST['proveedor'];
$fec=$_POST['fecha'];
$pro=$_POST['producto'];
$pre=$_POST['precio'];
$cant=$_POST['cantidad'];
$tot=$_POST['total'];
$cue=$_POST['cuen'];
$sal=$_POST['saldos'];
$fle=$_POST['flete'];
$pas=$_POST['pasaje'];
$ven=$_POST['venta'];

$sql="INSERT INTO compras (id_proveedor, fecha_compra, nombre_producto, precio_unidad, cantidad, total, cuenta, saldo, flete, pasajes, precio_vender)
		VALUES('$pr','$fec','$pro', '$pre','$cant','$tot','$cue','$sal','$fle','$pas','$ven')";
		$cnx->query($sql);	
		header("location: compras.php");

?>
