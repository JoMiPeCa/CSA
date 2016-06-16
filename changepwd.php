<!doctype html>
<html lang=''>
<?php include("../head.php");?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="js/md5/md5.js"></script>
<body>
<?php include("../menu.php");
    
?>
<div id="titpagina"> Preferencias del usuario: </div>
<div id="esptrabajo">
    <?php 
    
    echo "Cambiar clave a:".$oUsr->getNombre(); ?>
    
    <form id="cambioclave" >
        <fieldset>
        <legend>Informacion de la Cuenta: </legend>
        Clave Actual:<br>
        <input type="password" name="claveactual" id="claveactual"><br>
        Nueva Clave:<br>
        <input type="password" name="clavenueva" id="clavenueva"><br>
            <br>
        Repetir Clave:<br>
        <input type="password" name="repetirclave" id="repetirclave"><br>
            <br>
            <div id="mensaje"></div>
            <input type="button" name="enviar" value ="Enviar" onclick="Cambiar()">
            
        </fieldset>
</form>
<script> 
        function Cambiar(){
            var clave;
            var claveactual="<?=$oUsr->getSclave();?>";
            var dato=$("#claveactual").val();
            clave=CryptoJS.MD5(dato).toString();
            if (claveactual!=clave){
               alert("Clave actual no corresponde"); 
               return;
            }
            if ($("#clavenueva").val()!=$("#repetirclave").val()){
                alert("Su nueva clave no coincide");
                return;
            }
            
            $.ajax({
                    url:'accform/accUsuarioUPDClave.php',
                    type:'POST',
                    data:"newpwd="+ CryptoJS.MD5($("#clavenueva").val()).toString(),
                    success:function(datos){
                      alert("clave cambiada");
                    }
                });
        }
    </script>
</div>
</body>
</html>

  
</body>
</html>