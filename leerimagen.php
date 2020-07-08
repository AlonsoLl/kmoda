<?php
/* Se conecta con la base de datos elegida. */
session_start();
require_once("conexion.php");

 
	$consulta = "SELECT imagen FROM productos WHERE id_producto='1';";
	$hacerConsulta = $conexion->prepare($consulta); // Se crea un objeto PDOStatement.
	$hacerConsulta->execute(); // Se ejecuta la consulta.
	$datos = $hacerConsulta->fetch(PDO::FETCH_ASSOC)["imagen"]; // Se recuperan los resultados.
	$hacerConsulta->closeCursor(); // Se libera el recurso.
 
	$datos = base64_decode($datos);
	echo $datos;
?>