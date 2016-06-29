<!DOCTYPE html>
<?php
require './librerias.php';
$cCarro = new CarritoCompras();
$carro2 = $cCarro->Selecciona();
$carroID = $carro2->getSidcarritocompra();
$carroID===null?$carro=false:$carro=true;
?>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>BOLETA</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
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
            foreach ($carro2 as $k => $v) {
                $subto = $v->getNcantidad() * $v->getNmontoapagar();
                $suma = $suma + $subto;
                $contador++;
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
    </body>
</html>
