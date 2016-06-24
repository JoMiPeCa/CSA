<?php
include 'librerias.php';
$usr = new Cliente($_POST["run"], $_POST["nombre"], $_POST["apellidos"], $_POST["fecha"], $_POST["correo"], $_POST["suscripcion"], $_POST["telefono"], $_POST["contraseña"]);
session_start();
if ($usr->VerificaAcceso()) {
    $_SESSION["oUsuario"] = $usr;
}
?>
<script>
    document.location.href = "index.php";
</script>