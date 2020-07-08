<?php
$motor = "mysql";
$base = "bd_kmoda";
$usuario = "root";
$clave = "";
$servidor = "localhost";

$cadena="$motor:host=$servidor;dbname=$base";
$cnx = new pdo($cadena,$usuario,$clave);
?>