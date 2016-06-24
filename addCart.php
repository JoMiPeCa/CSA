<?php 
session_start();
extract($_REQUEST);

require './lib/db_funciones.php';

$db = dbconnect();

if(!isset($cantidad)){$cantidad=1;}
$qry="select * from carritocompra where 
idProducto='".$id."'";
$exe = $db->prepare($qry);
$exe->execute();
$row=$exe->fetch();
if(isset($_SESSION['carro']))
$carro=$_SESSION['carro'];
$carro[md5($id)]=array('idProducto'=>md5($id),
'nombreProducto'=>$row['nombre'], 'categoria'=>$categoria,
'precioUnitario'=>$row['precioUnit'],'descripcionProducto'=>$descripcionProducto,
'ubicacion'=>$ubicacion,'cantidad'=>$$cantidad,
'dsto'=>$dsto,'fechaTerminoDsto'=>$fechaTerminoDsto);
$_SESSION['carro']=$carro;
header("Location:catalogo.php?".SID);
?>
