<?php
session_start();
include 'librerias.php';
?>
<html lang=''>
    <head>
        <meta charset='utf-8'>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Acceso de usuario</title>
        <script src="<?= PATHURL; ?>js/jquery-latest.min.js" type="text/javascript"></script>
        <link rel="stylesheet" href="<?= PATHURL; ?>css/ie.css">
    </head>
    <?php
    require './marcoSuperior.php';
    ?>
    <?php
    require './form/form_login.php';
    ?>
    <?php
    require './marcoInferior.php';
    ?>
</html>