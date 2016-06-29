<?php
session_start();
extract($_REQUEST);

require './lib/db_funciones.php';

function producto_esta_en_carro($db, $carro_id, $producto_id) {
    $qry="select 1 from carritoCompra where idCarritoCompra=".$carro_id." and idProducto=".$producto_id;
    $exe = $db->prepare($qry);
    return $exe->execute();
//    $row=$exe->fetch();
//    if ($row) {
//		return true;
//    } else {
//		return false;
//    }
}

function incrementar_cantidad_producto_en_carro($db, $carro_id, $producto_id) {
	$qry="UPDATE carritoCompra SET cantidad = cantidad + 1, montoPagar = cantidad * total ".
	     "where idCarritoCompra=".$carro_id." and idProducto=".$producto_id;
	$exe = $db->prepare($qry);
    $exe->execute();
}

function buscar_producto($db, $producto_id) {
	$qry="select idProducto, precioUnitario, nombreProducto, dsto from producto ".
	     "where idProducto=".$producto_id;
    $exe = $db->prepare($qry);
    $exe->execute();
    return $exe->fetch();
}

function agregar_producto_a_carro($db, $carro_id, $producto) {
	$qry="INSERT INTO carritoCompra VALUES (".
			 $carro_id.", ".
			 $producto['idProducto'].", ".
			 $producto['dsto'].", ".
			 $producto['precioUnitario'].", ".
			 "1, ".
			 "cantidad * total, '".
			 $producto['nombreProducto'].
		 "')";
	$exe = $db->prepare($qry);
    $exe->execute();
}

if(!isset($_SESSION['carro_id'])) {
	$_SESSION['carro_id'] = rand(0, 1000000000);
}
$db = dbconnect();
$carro_id = $_SESSION['carro_id'];
$producto_id = $id;
if (producto_esta_en_carro($db, $carro_id, $producto_id)) {
	incrementar_cantidad_producto_en_carro($db, $carro_id, $producto_id);
} else {
	$producto = buscar_producto($db, $producto_id);
	agregar_producto_a_carro($db, $carro_id, $producto);
}

header("Location:catalogo.php?".SID);
?>
