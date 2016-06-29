<?php

    $content = "
<page>
    <script src="."http://www.w3schools.com/lib/w3data.js"."></script>

<body>

<div w3-include-html="."boleta.php"."></div>

<script>
w3IncludeHTML();
</script>
</body>
</page>"; 

    require_once(dirname(__FILE__).'/modulos/html2pdf/html2pdf.class.php');
	/*
	Constructor Clase HTML2PDF
	http://wiki.spipu.net/doku.php?id=html2pdf:en:v4:accueil#initalizing_the_html2pdf_class
	*/
    $html2pdf = new HTML2PDF('P','LETTER','es');
    $html2pdf->WriteHTML($content);
	/*
	Opción de Salida: 'D', forzar descarga
	http://wiki.spipu.net/doku.php?id=html2pdf:es:v3:salida
	*/
    $html2pdf->Output('boleta.pdf','D');
?>