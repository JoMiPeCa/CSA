<?php
include ('../librerias.php');
$usr = new Cliente();
$srun = $_POST['run'];
$snombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];
$ssexo = $_POST['genero'];
$dfechanacimiento = $_POST['fecha'];
$semail = $_POST['correo'];
$bSuscripcion = $_POST['suscripcion'];
$nTelefono = $_POST['telefono'];
$spass = $_POST['contraseña'];
$usr->CreaCliente($srun, $snombre, $apellidos, $ssexo, $dfechanacimiento, $semail, $bSuscripcion, $nTelefono, $spass);
?>
<script>
    document.location.href = "<?= PATHURL ?>carroCompra.php";
</script>

