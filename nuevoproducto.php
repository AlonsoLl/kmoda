<?php
require_once("conexion.php");
$pr=$_POST['proveedor'];
$cat=$_POST['categoria'];
$nom=$_POST['txtnombre'];
$tal=$_POST['talla'];
$col=$_POST['color'];
$st=$_POST['txtstock'];
$pre=$_POST['txtprecio'];
$des=$_POST['txtdescripcion'];
$imag=$_POST['image'];

$sql="INSERT INTO producto (id_proveedor, id_categoria, nombre_producto, talla, color, stock, precio, descripcion_producto, imagen)
		VALUES('$pr','$cat','$nom', '$tal','$col','$st','$pre','$des','$imag')";
		$cnx->query($sql);
		header("location: productos.php");

?>
