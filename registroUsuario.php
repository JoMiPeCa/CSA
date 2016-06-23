<?php
include 'librerias.php';
?>
<html lang=''>
    <head>
        <meta charset='utf-8'>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Acceso de usuario</title>
        <script src="<?= PATHURL; ?>js/jquery-latest.min.js" type="text/javascript"></script>
        <link rel="stylesheet" href="<?= PATHURL; ?>css/font-awesome.min.css"> <!-- Y ESTE ESTILO CUAL ES? -->
        <link rel="stylesheet" href="<?= PATHURL; ?>css/ie.css">
        <link rel="stylesheet" href="<?= PATHURL; ?>css/sitio.css"> <!-- Y ESTE ESTILO CUAL ES? -->
    </head>
    <?php
    require './marcoSuperior.php';
    ?>
    <center>
        <div id="titlogin"><legend>Registro de usuario.</legend>            
            <table>
                <form action="accform/accRegistro.php" method="post">
                    <!-- private $srun;
                    private $snombre;
                    private $apellidos;
                    private $csexo;
                    private $dfechanacimiento;
                    private $semail;
                    private $bSuscripcion;
                    private $nTelefono;
                    private $spass;
                    -->
                    <tr>
                        <td>Nombre:</td>
                        <td><input name="nombre" id="nombre" type=text required="true"></td>
                        <td> </td>
                    </tr>
                    <tr>                       
                        <td>Apellidos:</td>
                        <td><input name="apellidos" id="apellidos" type="text" required="true"></td>
                        <td> </td>
                    </tr>
                    <tr>
                        <td>Género:</td>
                        <td><select>
                                <option value="">Seleccione...</option>
                                <option value="1">Mujer</option>
                                <option value="2">Hombre</option>
                            </select></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Fecha Nacimiento:</td>
                        <td><input type="date" id="fecha" name="fecha" required="true"></td>
                        <td> </td>
                    </tr>  
                    <tr>
                        <td>Mail:</td>
                        <td><input type="email" id="correo" name="correo" required="true"></td>
                        <td> </td>
                    </tr>  
                    <tr>
                        <td>Subscripción:</td>
                        <td><input type="text" id="subscripcion" name="subscripcion" required="true"></td>
                        <td> </td>
                    </tr>  
                    <tr>
                        <td>Teléfono:</td>
                        <td><input type="number" id="telefono" name="telefono" required="true"></td>
                        <td> </td>
                    </tr>  
                    <tr>
                        <td>Contraseña:</td>
                        <td><input type="text" id="contraseña" name="contraseña" required="true"></td>
                        <td> </td>
                    </tr>  
                    <tr>
                        <td></td>  
                        <td><input id="registrar" type="submit" value="Registrar"></td>
                    </tr>
                </form>
            </table>
        </div>
    </center>
    <?php
    require './marcoInferior.php';
    ?>
</html>