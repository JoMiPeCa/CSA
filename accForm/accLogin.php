<?php
include ('../librerias.php');
//$clavemd5 = md5($_POST['clave']);
$clavemd5 = $_POST['clave'];
$usr = new Cliente("", "", "", "", "", $_POST['usuario'], "", "", $clavemd5);

session_start();
if ($usr->VerificaAcceso()) {
    $_SESSION["oUsuario"] = $usr;
    ?>
    <script>
        document.location.href = "<?= PATHURL ?>index.php";
    </script>
    <?php
} else {
    ?>
    <script type="text/javascript">
        alert("Usuario o contraseña incorrectos. Favor intente nuevamente...");
    </script>
    
    <script>
        document.location.href = "<?= PATHURL ?>login.php";
    </script>

    
    <?php
}
?>

