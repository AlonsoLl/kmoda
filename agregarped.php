<?php
require_once("conexion.php");
$pro= $_POST['producto'];
$can= $_POST['cantidad'];
$usu= $_POST['use'];
$cli= $_POST['cliente'];
$fec= $_POST['fecha'];
$tot= $_POST['totpaga'];
$sal= $_POST['desc'];
$cuen= $_POST['cuenta'];
$pa= $_POST['pago'];
$pe= $_POST['pedido'];
$com= $_POST['comentario'];

$sql="INSERT INTO pedido (id_producto, cantidad, id_usuario, id_cliente, fecha, total, descuento, cantidad_pago , id_estado_pago, id_estado_pedido, comentario)
		VALUES('$pro','$can','$usu','$cli','$fec','$tot','$sal','$cuen','$pa','$pe','$com');
		UPDATE producto set stock = stock - '$can' where id_producto= '$pro'
		";
		$cnx->query($sql);
		header("location: pedidos.php");

?>

