<?php
if (isset($_SESSION["oUsuario"])) {
    ?>
    }
    <script>
        document.location.href = "<?= PATHURL ?>carroCompra.php";
    </script>
    <?php
}
?>

<center>
    <div id="titlogin">
        Acceso de usuario.
        <form action="./accForm/accLogin.php" method="POST" id="loginForm">
            <div>Usuario:</div>
            <div><input name="usuario" type=text required="true"></div></br>
            <div>Clave:</div>
            <div><input name="clave" type="password" required="true"></div></br>
            <input id="acceder" type="submit" value="Acceder"></br>   
        </form>

        <form action="./registroUsuario.php">
            <input id="registro" type="submit" value="Registrar">
        </form>
    </div>
</center>
