<!--
http://www.desarrolloweb.com/articulos/carro-de-compras-en-php.html
-->
<?php
require './librerias.php';
session_start();
?>

<?php
if (!isset($_SESSION["oUsuario"])) {
    $carro = false;
    ?>
    <script>
        document.location.href = "<?= PATHURL ?>login.php";
    </script>
    <?php
} else {
    $usr = $_SESSION["oUsuario"];
    $carro = true;
}
?>

<?php
$cCarro = new CarritoCompras();

//$carroID = $carro2->getSidcarritocompra();
//$carroID===null?$carro=false:$carro=true;
?>
<html>
    <head>
        <title>Carro de Compras</title>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
        <link href="css/ie.css" rel="stylesheet" type="text/css">
    </head>
    <?php
    require './marcoSuperior.php';
    ?>
    <h1 align="center">Carrito</h1>
    <?php
    if ($carro) {
        ?>
        <table width="720" border="0" cellspacing="0" cellpadding="0" align="center">
            <tr bgcolor="#339333" class="tit"> 
                <td width="105">Producto</td>
                <td width="207">Precio</td>
                <td colspan="2" align="center">Cantidad de Unidades</td>
                <td width="100" align="center">Borrar</td>
                <td width="159" align="center">Actualizar</td>
            </tr>
            <?php
            $color = array("#ffffff", "#F0F0F0");
            $contador = 0;
            $suma = 0;
            while ($v = $cCarro->Selecciona()) {
                $subto = $v->getNcantidad() * $v->getNmontoapagar();
                $suma = $suma + $subto;
                $contador++;
                echo "HOLA";
                ?>
                <form name="a<?php echo $v->getSidcarritocompra() ?>" method="post" action="addCart.php?<?php echo SID ?>" id="a<?php echo $v->getSidcarritocompra() ?>">
                    <tr bgcolor="<?php echo $color[$contador % 2]; ?>" class='prod'> 
                        <td><?php echo $v->getSidproducto() ?></td>
                        <td><?php echo $v->getNmontoapagar() ?></td>
                        <td width="43" align="center"><?php echo $v->getNcantidad() ?></td>
                        <td width="136" align="center"> 
                            <input name="cantidad" type="text" id="cantidad" value="<?php echo $v->getNcantidad() ?>" size="8">
                            <input name="id" type="hidden" id="id" value="<?php echo $v['id'] ?>"> </td>
                        <td align="center"><a href="delCart.php?<?php echo SID ?>&id=<?php echo $v->getSidproducto() ?>"><img src="images/trash.gif" width="12" height="14" border="0"></a></td>
                        <td align="center"> 
                            <input name="imageField" type="image" src="images/actualizar.gif" width="20" height="20" border="0"></td>
                    </tr></form>
                <?php
            }
            ?>
        </table>
        <div align="center"><span class="prod">Total de Artículos: <?php
                echo count($cCarro);
                ?></span> 
        </div><br>
        <div align="center"><span class="prod">Total: $<?php
                echo number_format($suma, 2);
                ?></span> 
        </div><br>
        <div align="center"><span class="prod">Continuar la selección de productos</span> 
            <a href="catalogo.php?<?php echo SID; ?>">
                <img src="images/continuar.gif" width="13" height="13" border="0"></a> 
        </div>
        <div>
            <input type="button" onclick="parent.location = 'boleta.php'" value='Descargar Resumen'>
            <input type="button" onclick="parent.location = '#'" value='Pagar'>
        </div>
    <?php } else { ?>
        <p align="center"> <span class="prod">No hay productos seleccionados</span>
            <a href="catalogo.php?<?php echo SID; ?>">
                <img src="images/continuar.gif" width="13" height="13" border="0"></a> 
        <?php } ?>
    </p>
    <?php
    require './marcoInferior.php';
    ?>
</HTML>