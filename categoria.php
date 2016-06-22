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
   
        <SCRIPT language=javaScript>
            function openHelp()
            {
                str = "help.aspx"
                var newWindow = null
                newWindow = window.open(str, "", "width=400,height=400,resizable=no,scrollbars=yes,status=no");
                if (newWindow.focus)
                    newWindow.focus();
            }
        </SCRIPT>
        <SCRIPT language=javaScript>
            function submitForm(activity)
            {
                str = "signupNewsletter.aspx?customer_email=" + document.newsletterForm.customer_email.value + "&activity=" + activity;
                var newWindow = null
                newWindow = window.open(str, "", "width=300,height=300,resizable=no,scrollbars=no,status=no");
                if (newWindow.focus)
                    newWindow.focus();
            }
        </SCRIPT>
        <SCRIPT LANGUAGE="JavaScript">
            function popUp(url) {
                sealWin = window.open(url, "win", 'toolbar=0,location=0,directories=0,status=1,menubar=1,scrollbars=1,resizable=1,width=500,height=450');
                self.name = "mainWin";
            }
        </SCRIPT>

        <script src="http://www.google-analytics.com/urchin.js" type="text/javascript">
        </script>
        <script type="text/javascript">
            _uacct = "UA-28875143-1";
            urchinTracker();
        </script>
        <script type="text/javascript">

            var _gaq = _gaq || [];
            _gaq.push(['_setAccount', 'UA-28875143-1']);
            _gaq.push(['_trackPageview']);

            (function () {
                var ga = document.createElement('script');
                ga.type = 'text/javascript';
                ga.async = true;
                ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
                var s = document.getElementsByTagName('script')[0];
                s.parentNode.insertBefore(ga, s);
            })();

        </script>


     </head>
    <?php 
    require './marcoSuperior.php';
    ?>

        <script type="text/javascript">
            window.onload = function () {
                if (geoip_country_code() == "ES" && getCookie('aviso') != "1") {
                    document.getElementById("barritaloca").style.display = "block";
                }
            }
            function getCookie(c_name) {
                var c_value = document.cookie;
                var c_start = c_value.indexOf(" " + c_name + "=");
                if (c_start == -1) {
                    c_start = c_value.indexOf(c_name + "=");
                }
                if (c_start == -1) {
                    c_value = null;
                } else {
                    c_start = c_value.indexOf("=", c_start) + 1;
                    var c_end = c_value.indexOf(";", c_start);
                    if (c_end == -1) {
                        c_end = c_value.length;
                    }
                    c_value = unescape(c_value.substring(c_start, c_end));
                }
                return c_value;
            }
            function setCookie(c_name, value, exdays) {
                var exdate = new Date();
                exdate.setDate(exdate.getDate() + exdays);
                var c_value = escape(value) + ((exdays == null) ? "" : "; expires=" + exdate.toUTCString());
                document.cookie = c_name + "=" + c_value;
            }
            function PonerCookie() {
                setCookie('aviso', '1', 365);
                document.getElementById("barritaloca").style.display = "none";
            }
        </script>
        

    <?php 
    require './marcoInferior.php';
    ?>
    
</html>