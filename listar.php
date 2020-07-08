<?php

	include ("conexion.php");

	$query = "SELECT * FROM cliente";
	$resultado = mysqli_query($conexion, $query);

	