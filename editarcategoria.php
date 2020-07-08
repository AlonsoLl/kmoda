<?php
require_once("conexion.php");
$id = $_POST['txtid'];
$nom = $_POST['nomb'];
$des = $_POST['des'];
$sql="UPDATE categoria SET nombrecateg='$nom',descripcion='$des' WHERE id_categoria=$id";
$cnx->query($sql) or $resp=1;
echo $resp;
header("location: categorias.php");
?>