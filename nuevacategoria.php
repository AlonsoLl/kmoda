<?php
require_once("conexion.php");
$nom=$_POST['txtnombre'];
$des=$_POST['txtdescripcion'];

$sql="INSERT INTO categoria (nombrecateg,descripcion)
		VALUES('$nom','$des')";
		$cnx->query($sql);
		header("location: categorias.php");

?>