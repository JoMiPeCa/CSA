<?php
$usr = new Cliente();
?>

<center>
    <div id="titlogin"><legend>Registro de usuario.</legend>            
        <table>
            <form action="./accForm/accRegistro.php" method="post">
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
                    <td>RUN:</td>
                    <td><input name="run" id="run" type="text" required="true"></td>
                    <td> </td>
                </tr>
                <tr>
                    <td>Género:</td>
                    <td><select id="genero" name="genero" required="true">
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
                    <td>Teléfono:</td>
                    <td><input type="number" id="telefono" name="telefono" required="true"></td>
                    <td> </td>
                </tr>  
                <tr>
                    <td>Contraseña:</td>
                    <td><input type="password" id="contraseña" name="contraseña" required="true"></td>
                    <td> </td>
                    <td>Repita Contraseña:</td>
                    <td><input type="password" id="contraseña" name="contraseña" required="true"></td>
                    <td> </td>
                </tr>  
                <tr>
                    <td>Desea suscribirse a nuestro boletín mensual?:</td>
                    <td>Si<input type="radio" id="suscripcion" name="suscripcion" checked="true" >
                        No<input type="radio" id="suscripcion" name="suscripcion"></td>
                    <td></td>
                </tr>  
                <tr>
                    <td></td>  
                    <td><input id="registrar" type="submit" value="Registrar"></td>
                </tr>
            </form>
        </table>
    </div>
</center>