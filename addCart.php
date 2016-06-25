<?php 
session_start();
extract($_REQUEST);

require './lib/db_funciones.php';

$db = dbconnect();

if(!isset($cantidad)){$cantidad=1;}
$qry="select * from carritocompra where 
idProducto='".$idProducto."'";
$exe = $db->prepare($qry);
$exe->execute();
$row=$exe->fetch();
if(isset($_SESSION['carro']))
$carro=$_SESSION['carro'];
$query = "INSERT INTO carritoCompra VALUES ('.SID','$idProducto','$dsto','$precioUnit','1','$montoPagar','$descripcionProducto')";
$carro[md5($idProducto)]=array('idProducto'=>md5($idProducto),
'nombreProducto'=>$row['nombre'], 'categoria'=>$categoria,
'precioUnitario'=>$row['precioUnit'],'descripcionProducto'=>$descripcionProducto,
'ubicacion'=>$ubicacion,'cantidad'=>$$cantidad,
'dsto'=>$dsto,'fechaTerminoDsto'=>$fechaTerminoDsto);
$exec = $db->prepare($query);
$exec->execute();
$_SESSION['carro']=$carro;
header("Location:catalogo.php?".SID);
?>
