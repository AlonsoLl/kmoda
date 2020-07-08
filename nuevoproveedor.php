<?php
require_once("conexion.php");
$nom=$_POST['txtnombre'];
$dir=$_POST['txtdireccion'];
$tel=$_POST['txttelefono'];
$con=$_POST['txtcontacto'];

$sql="INSERT INTO proveedor (nombre_pr, direccion, telefono, contacto)
		VALUES('$nom','$dir','$tel','$con')";
		$cnx->query($sql);
		header("location: proveedores.php");

?>