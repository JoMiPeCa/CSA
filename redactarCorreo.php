<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Enviar Mail</title>
    </head>
    <?php
    require './marcoSuperior.php';
    ?>
    <center>
        <form action='enviomail.php' method='post'>
            <table>
                <br>
                <tr>
                    <td>Nombre:</td>
                    <td><input type="text" name=nombre></td>
                </tr>
                <tr>
                    <td>Correo:</td>
                    <td><input type="text" name=remitente></td>
                </tr>
                <tr>
                    <td>Asunto:</td>
                    <td><input type="text" name=asunto></td>
                </tr>
                <tr>
                    <td>Cuerpo:</td>
                    <td><textarea name=cuerpo cols=30 rows=8></textarea></td>
                </tr> 
                <tr>
                    <td> </td>
                    <td><input type="submit" value='Enviar'></td>
                </tr>            
            </table>
        </form>
    </center>
    <?php
    require './marcoInferior.php';
    ?>
</html>