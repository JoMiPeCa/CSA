<!--
LEER PAGINA E IMPLEMENTAR CARRO DE COMPRAS
EL ACTUAL CARRO ES MUY COMPLICADO

http://www.desarrolloweb.com/articulos/carro-de-compras-en-php.html

-->

<?php
session_start();
if (isset($_SESSION['carro']))
    $carro = $_SESSION['carro'];
else
    $carro = false;
?>
<html>
    <head>
        <title>Carro de Compras</title>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
        <link href="css/cc.css" rel="stylesheet" type="text/css">
    </head>
    <?php
    require './marcoSuperior.php';
    ?>
    <h1 align="center">Carrito</h1>
    <?php
    if ($carro) {
        ?>
        <table width="720" border="0" cellspacing="0" cellpadding="0" align="center">
            <tr bgcolor="#333333" class="tit"> 
                <td width="105">Producto</td>
                <td width="207">Precio</td>
                <td colspan="2" align="center">Cantidad de Unidades</td>
                <td width="100" align="center">Borrar</td>
                <td width="159" align="center">Actualizar</td>
            </tr>
            <?php
            $color = array("#ffffff", "#F0F0F0");
            $contador = 0;
//las 2 líneas anteriores
//sirven sólo para hacer
//una tabla con colores 
//alternos
            $suma = 0;
//antes de recorrer todos
//los valores de la matriz
//$carro, ponemos a cero la
//variable $suma, en la que
//iremos sumando los subtotales
//del costo de cada item por la
//cantidad de unidades que se
//especifiquen 
            foreach ($carro as $k => $v) {
//recorremos la matriz que tiene
//todos los valores del carro, 
//calculamos el subtotal y el
// total 
                $subto = $v['cantidad'] * $v['precio'];
                $suma = $suma + $subto;
                $contador++;
//este es el contador que usamos
//para los colores alternos 
                ?>
            <form name="a<?php echo $v['identificador'] ?>" method="post" action="./cesta/addCart.php?<?php echo SID ?>" id="a<?php echo $v['identificador'] ?>">
                    <tr bgcolor="<?php echo $color[$contador % 2]; ?>" class='prod'> 
                        <td><?php echo $v['producto'] ?></td>
                        <td><?php echo $v['precio'] ?></td>
                        <td width="43" align="center"><?php echo $v['cantidad'] ?></td>
                        <td width="136" align="center"> 
                            <input name="cantidad" type="text" id="cantidad" value="<?php echo $v['cantidad'] ?>" size="8">
                            <input name="id" type="hidden" id="id" value="<?php echo $v['id'] ?>"> </td>
                        <td align="center"><a href="./cesta/delCart.php?<?php echo SID ?>&id=<?php echo $v['id'] ?>"><img src="trash.gif" width="12" height="14" border="0"></a></td>
                        <td align="center"> 
                            <input name="imageField" type="image" src="actualizar.gif" width="20" height="20" border="0"></td>
                    </tr></form>
                <?php
//por cada item creamos un
//formulario que submite a
//agregar producto y un link
//que permite eliminarlos 
            }
            ?>
        </table>
        <div align="center"><span class="prod">Total de Artículos: <?php
                echo count($carro);
//el total de items va a ser igual
//a la cantidad de elementos que
//tenga la matriz $carro, valor
//que obtenemos con la función
//count o con sizeof 
                ?></span> 
        </div><br>
        <div align="center"><span class="prod">Total: $<?php
                echo number_format($suma, 2);
//mostramos el total de la variable
//$suma formateándola a 2 decimales 
                ?></span> 
        </div><br>
        <div align="center"><span class="prod">Continuar la selección de productos</span> 
            <a href="catalogo.php?<?php echo SID; ?>">
                <img src="continuar.gif" width="13" height="13" border="0"></a> 
        </div>
    <?php } else { ?>
        <p align="center"> <span class="prod">No hay productos seleccionados</span>
            <a href="catalogo.php?<?php echo SID; ?>">
                <img src="continuar.gif" width="13" height="13" border="0"></a> 
        <?php } ?>
    </p>
    <?php
    require './marcoInferior.php';
    ?>
</HTML>


