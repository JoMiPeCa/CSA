<?php
include ('../librerias.php');
$usr = new Cliente($_POST["run"], $_POST["nombre"], $_POST["apellidos"], $_POST["fecha"], $_POST["correo"], $_POST["suscripcion"], $_POST["telefono"], $_POST["pass"]);
session_start();
if ($usr->CreaCliente()) {
    $_SESSION["oUsuario"] = $usr;
}
?>
<script>
    document.location.href = ('carroCompra.php');
</script>