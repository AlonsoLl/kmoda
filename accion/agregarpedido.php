<?php
require_once("conexion.php");
$pro= $_POST['producto'];
$can= $_POST['cantidad'];
$usu= $_POST['usuario'];
$cli= $_POST['cliente'];
$fech= $_POST['fecha'];
$cuen= $_POST['cantidad_pago'];
$pa= $_POST['pago'];
$pe= $_POST['pedido'];

$sql="INSERT INTO pedido (id_producto, cantidad, id_usuario, id_cliente, fecha, cantidad_pago , id_estado_pago, id_estado_pedido)
		VALUES('$pro','$can','$usu','$cli','$fech','$cuen','$pa','$pe')";
		$cnx->query($sql);
		header("location: pedidos.php");
