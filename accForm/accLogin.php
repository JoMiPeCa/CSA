<?php
include ('../librerias.php');
$usr = new Cliente("", "", "", "", "", $_POST['usuario'], "", "", $_POST['clave']);

session_start();
if ($usr->VerificaAcceso()) {
$_SESSION["oUsuario"] = $usr;
}
?>
<script>
document.location.href = "<?= PATHURL ?>index.php";
</script>
