<?php
ob_start("ob_gzhandler");

require './librerias.php';



if (isset($_SESSION['carro'])) {
    $carro = $_SESSION['carro'];
} else {
    $carro = false;
}
$oProducto = new Producto();
?>
<html>
    <head>
        <TITLE>Ferreteria Ortiz - Ferretería Ortiz</TITLE>
        <META charset="UTF-8">
        <META id="_TopLeft_metaTitle" NAME="Title" content="Ferreteria Ortiz. Tienda online con más de 20.000 productos - Ferretería Ortiz"></META>
        <META id="_TopLeft_metaSubject" NAME="Subject" content="Ferretería Ortiz. Tienda online con más de 20.000 productos."></META>
        <META id="_TopLeft_metaDescription" NAME="Description" content="Ferretería Ortiz. Tienda online con más de 20.000 productos. Herrajes para obra y decoración, metalistería, cerrajería, accesorios para baño, herramientas, ferretería en general."></META>
        <META id="_TopLeft_metaKeywords" NAME="Keywords" content="Abrazaderas, Accesorios ba&amp;ntilde;o, Aceites, Adhesivos, Adornos, Alambres, Alcayatas, Alcotanas, Aldaba, Aldabilla, Alicates, Alzapa&amp;ntilde;os, Amaestramiento, Amoladoras, Angulo, Anillas, Antipanicos, Antirrobos, Aplacadoras, Apliques, Apliques para luz, Aprieto, Arandelas, Archivadores, Arcos de segueta, Arcos de sierra, Armeros, Asas, Aspiradores, Avellanadores, Barandilla, Barras, Barrenas, Baterias, Berbiquis, Bisagras, Bloqueador, Bocallaves, Bombillos, botiquines, Brocas, Burletes, Buzones, Cadenas, Cajas fuertes, Calibres, Campanas, Candados, Cantoneras, capitel, Cariatides, Carretilla, Carriles, Cartelas, casquillos, Cazoletas, Cepillos, Cerraderos, Cerraduras, Cerraduras mueble, Cerrojillos, Cerrojo, Cestas, Chapas, Cierrapuertas, Cierre, Cinceles, Cinturoneros, Cizallas, Clavadoras, Clavos, Colgantes, Collarines, Compases, Compresores, Condena, Corbateros, Coronas, Correderas, Cortador, Cortafrios, Cortatubos, Cremonas, Cuadradillo, Cuchillos, Cuerda, Cutters, Decaparadores, Desbloqueo, Destornilladores, Dosificadores, Dremel, Electricidad, Electrodos, Engletadoras, Ensambles, Escaleras, Escobilleros, Escofinas, Escuadras, Eses, Espatulas, Espejos, Fallebas, Fieltros, Figuras, Filete, Flesadoras, Flexometros, Formones, Ganchos, Garras, Garrotas, Gramiles, Granetes, Grapadoras, Grapas, Griferias, Grisans, Guantes, Gubias, Guias, Guillamenes, Hachas, Hembrillas, Herramientas, Husillos, Imanes, Ingletadoras, Jaboneras, Lavabos, Letras, Letreros, Lija, Lijadoras, Limas, Limpieza, Linternas, Llamadores, Llanas, Llaveros, Llaves, Lubricantes, Macetas, Macollas, Mamparas, Mangos, Manilla, Manillon, Martillos, Mascaras, Mazas, Mecanismos, Metopas, Mirillas, Moldura, Muebles, Muelas, Muelles, Muletillas, Multiusos, niveles, Nudos, Numeros, Paletas, Pantaloneros, Papeleras, Pasacables, Pasadores, Pasamanos, Pasamonedas, Patas, Pegamentos, Perchas, Pernios, Picaporte, Piedras, Pinchos, Pinzas, pistola, Placa limpieza, Plataformas, Platos, Pletinas, Poleas, Pomos, Portacepillos, Portaestantes, Portallaves, Portarollos, Portavasos, Prensas, Producto para madera, Puntas, Punteros, Punzones, ba&amp;ntilde;os, cerrajer&amp;iacute;a, decoracion, decoraci&amp;oacute;n, ferreteria, herrajes, herramienta, interiorismo, manilla, metalisteria, pomos, productos ferreteria, zitro, zitroherrajes"></META>
        <META id="_TopLeft_metaLanguage" NAME="Language" content="español - spanish"></META>
        <META id="_TopLeft_metaRobots" NAME="Robots" content="All"></META>
        <link href="css/ie.css" rel="stylesheet" type="text/css">
    </head>
    <?php
    require './marcoSuperior.php';
    ?>


    <table width="100%" align="center" cellpadding="0" cellspacing="0" style="border: 1px solid #000000;">
        <tr valign="middle" bordercolor="#FFFFFF" bgcolor="#DFDFDF" class="catalogo"> 
            <td width="170"><strong>Codigo</strong></td>
            <td width="270"><strong>Nombre</strong></td>
            <td width="170"><strong>Categoria</strong></td>
            <td width="77"><strong>Precio</strong></td>
            <td width="457"><strong>Descripcion</strong></td>
            <td width="127"><strong>Ubicacion</strong></td>
            <td width="50"><strong>Cantidad</strong></td>
            <td width="50"><strong>Descuento</strong></td>
            <td width="80"><strong>Hasta (Descuento)</strong></td>
            <td width="25" align="right"><a href="carroCompra.php?<?php echo SID ?>" title="Ver el contenido del carrito">
                    <img src="./images/vercarrito.gif" width="25" height="21" border="0"></a></td>
        </tr>
        <?php
        while ($row = $oProducto->Selecciona()) {
            ?>
            <tr valign="middle" class="catalogo">
                <td><?= $row->getNidProducto() ?></td>
                <td><?= $row->getSnombreProducto() ?></td>
                <td><?= $row->getScategoria() ?></td>
                <td><?= $row->getNprecioUnitario() ?></td>
                <td><?= $row->getSdescripcionProducto() ?></td>
                <td><?= $row->getSubicacion() ?></td>
                <td><?= $row->getNcantidad() ?></td>
                <td><?= $row->getLdescuento() ?></td>
                <td><?= $row->getDfechaTerminoDsto() ?></td>
                <td align="center">
                    <?php
                    if (!$carro || !isset($carro[md5($row->getNidProducto())]['identificador']) || $carro[md5($row->getNidProducto())]['identificador'] != md5($row->getNidProducto())) {
                        ?>
                        <a href="./cesta/addCart.php?<?php echo SID ?>&id=<?php echo $row->getNidProducto(); ?>">
                            <img src="./images/productonoagregado.gif" border="0" title="Agregar al Carrito"></a><?php
                    } else {
                        ?><a href="./cesta/delCart.php?<?php echo SID ?>&id=<?php echo $row->getNidProducto(); ?>">
                            <img src="./images/productoagregado.gif" border="0" title="Quitar del Carrito"></a><?php } ?></td>
            </tr><?php } ?>
    </table>

    <?php
    require './marcoInferior.php';
    ?>

</html>

<?php
ob_end_flush();
?>