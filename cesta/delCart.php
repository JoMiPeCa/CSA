<?php
session_start();
extract($_GET);
//Como antes, usamos
//extract() por comodidad,
//pero podemos no hacerlo
//tranquilamente
$carro=$_SESSION['carro'];
//Asignamos a la variable
//$carro los valores
//guardados en la sessión
unset($carro[md5($id)]);
//la función unset borra
//el elemento de un array 
//que le pasemos por
//parámetro. En este caso
//la usamos para borrar el
//elemento cuyo id le pasemos
//a la página por la url 
$_SESSION['carro']=$carro;
//Finalmente, actualizamos
//la sessión, como hicimos
//cuando agregamos un producto
//y volvemos al catálogo
header("Location:catalogo.php?".SID);
?>