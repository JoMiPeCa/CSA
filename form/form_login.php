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
        <form action="accForm/accLogin.php" method="POST"> <!--id="formAccesoUsuario"-->
            <div>Usuario:</div>
            <div><input name="usuario" type=text required="true"></div></br>
            <div>Clave:</div>
            <div><input name="clave" type="password" required="true"></div></br>
            <input id="acceder" type="submit" value="Acceder"<!-- onclick="Acceder()-->"></br>   
        </form>

        <form action="./registroUsuario.php">
            <input id="registro" type="submit" value="Registrar">
        </form>
    </div>
</center>
<!--
<script>
    function Acceder() {
        var usuario;
        var useractual = "<?= $usr->getSemail(); ?>";
        var dato2 = $("#useractual").val();
        if (useractual !== usuario) {
            alert("Usuario actual no corresponde");
            return;
        }
        var clave;
        var claveactual = "<?= $usr->getSPass(); ?>";
        var dato = $("#claveactual").val();
        clave = CryptoJS.MD5(dato).toString();
        if (claveactual !== clave) {
            alert("Clave actual no corresponde");
            return;
        }

        $.ajax({
            url: 'accform/accLogin.php',
            type: 'POST',
            data: "usuario=" + usuario, "clave=" + clave,
            success: function (datos) {
                alert("Ingreso exitoso!");
            }
        });
    }
</script>
-->