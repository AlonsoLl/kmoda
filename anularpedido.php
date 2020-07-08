<?php
require_once("conexion.php");
$id = $_POST['numped'];
$cod = $_POST['products'];
$cant = $_POST['numpre'];
$mot = $_POST['mot'];

$sql="UPDATE pedido
        INNER JOIN producto on pedido.id_producto = producto.id_producto
        SET pedido.motivo='$mot' , pedido.id_estado_venta='2', producto.stock = producto.stock + '$cant'
        WHERE pedido.id_pedido='$id' and producto.id_producto='$cod' 
        ";

$rs=$cnx->query($sql);
header("location: pedidos.php");
?>

