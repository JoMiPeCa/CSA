<?php
include 'librerias.php';
?>
<html lang=''>
    <head>
        <meta charset='utf-8'>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Acceso de usuario</title>
        <script src="<?= PATHURL; ?>js/jquery-latest.min.js" type="text/javascript"></script>
        <link rel="stylesheet" href="<?= PATHURL; ?>css/font-awesome.min.css"> <!-- Y ESTE ESTILO CUAL ES? -->
        <link rel="stylesheet" href="<?= PATHURL; ?>css/ie.css">
        <link rel="stylesheet" href="<?= PATHURL; ?>css/sitio.css"> <!-- Y ESTE ESTILO CUAL ES? -->
    </head>
    <?php
    require './marcoSuperior.php';
    ?>
    <center>
        <div id="titlogin">
            Acceso de usuario.
            <form action="accform/accLogin.php" method="post">
                <div>Usuario:</div>
                <div><input name="usuario" type=text></div></br>
                <div>Clave:</div>
                <div><input name="clave" type="password"></div></br>
                <input id="acceder" type="submit" value="Acceder"></br>   
            </form>
            <form action="registroUsuario.php">
                <input id="registrar" type="submit" value="Registrar">
            </form>
        </div>
    </center>
    <?php
    require './marcoInferior.php';
    ?>
</html>