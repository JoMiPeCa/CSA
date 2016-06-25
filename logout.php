<?php
include ('./librerias.php');
session_start();
session_unset();
?>
<script>
    document.location.href = "<?= PATHURL ?>index.php";
</script>