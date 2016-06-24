<?php 
ob_start("ob_gzhandler"); ?>
<html>
    <head>
        <TITLE>Ferreteria Ortiz - Ferretería Ortiz</TITLE>
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

<?php
//Las funciones ob_start y
//ob_end_flush te permiten
//escojer en qué momento
//enviar el resultado de un
//script al navegador. Si
//no las utilizamos estamos
//obligados a que nuestra 
//primera línea de código
//sea session_start() u
//obtendremos un error
//session_start();
//conectamos a la base de
//datos
    require './librerias.php';
//rescatamos los valores
//guardados en la variable de
//sesión (si es que hay alguno,
// cosa que comprobamos con isset)
//y los asignamos a $carro.
//Si no existen valores, ponemos a false
//el valor de $carro
if(isset($_SESSION['carro']))
$carro=$_SESSION['carro'];else $carro=false;
//y hacemos la consulta
$qry=mysql_query("select * from producto order by idProducto asc");
?>
<table width="272" align="center" cellpadding="0" cellspacing="0" style="border: 1px solid #000000;">
<tr valign="middle" bordercolor="#FFFFFF" bgcolor="#DFDFDF" class="catalogo"> 
<td width="170"><strong>Producto</strong></td>
<td width="77"><strong>Precio</strong></td>
<td width="25" align="right"><a href="carroCompra.php?<?php echo SID ?>" title="Ver el contenido del carrito">
<img src="vercarrito.gif" width="25" height="21" border="0"></a></td>
</tr>
<?php
//mostramos todos nuestros
//artículos, viendo si han
//sido agregados o no a nuestro
//carro de compra
while($row=mysql_fetch_assoc($qry)){
?>
<tr valign="middle" class="catalogo"> 
<td><?php echo $row['producto'] ?></td>
<td><?php echo $row['precio'] ?></td>
<td align="center">
<?php
if(!$carro || !isset($carro[md5($row['id'])]['identificador']) || $carro[md5($row['id'])]['identificador']!=md5($row['id'])){
//si el producto no ha sido
//agregado, mostramos la imagen
//de no agregado, linkeada
//a nuestra página de agregar
//producto y transmitíéndole a
//dicha página el id del artículo
//y el identificador de la sesión
?>
<a href="agregacar.php?<?php echo SID ?>&id=<?php echo $row['id']; ?>">
<img src="productonoagregado.gif" border="0" title="Agregar al Carrito"></a><?php }else
//en caso contrario mostramos la
//otra imagen linkeada., a la
//página que sirve para borrar el
//artículo del carro.
{?><a href="borracar.php?<?php echo SID ?>&id=<?php echo $row['id']; ?>">
<img src="productoagregado.gif" border="0" title="Quitar del Carrito"></a><?php } ?></td>
</tr><?php } ?>
</table>

    

    
    
    
    <?php 
    require './marcoInferior.php';
    ?>
    
</html>

<?php 
ob_end_flush();
?>