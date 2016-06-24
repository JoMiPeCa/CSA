<?php 
session_start();
extract($_REQUEST);

require './lib/db_funciones.php';

if(!isset($cantidad)){$cantidad=1;}
$qry=mysql_query("select * from carritocompra where 
producto='".$id."'");
$row=mysql_fetch_array($qry);
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
