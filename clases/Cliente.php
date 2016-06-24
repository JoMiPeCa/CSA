<?php

/**
 * Description of Cliente
 *
 * @author Jonathan Espinoza
 */
class Cliente {

    private $srun;
    private $snombre;
    private $apellidos;
    private $ssexo;
    private $dfechanacimiento;
    private $semail;
    private $bSuscripcion;
    private $nTelefono;
    private $spass;

    function __construct($srun = NULL, $snombre = NULL, $apellidos = NULL, $csexo = NULL, $dfechanacimiento = NULL, $semail = NULL, $bSuscripcion = NULL, $nTelefono = NULL, $spass = NULL) {
        $this->srun = $srun;
        $this->snombre = $snombre;
        $this->apellidos = $apellidos;
        $this->ssexo = $csexo;
        $this->dfechanacimiento = $dfechanacimiento;
        $this->semail = $semail;
        $this->bSuscripcion = $bSuscripcion;
        $this->nTelefono = $nTelefono;
        $this->spass = $spass;
    }

    function getSrun() {
        return $this->srun;
    }

    function getSnombre() {
        return $this->snombre;
    }

    function getApellidos() {
        return $this->apellidos;
    }

    function getCsexo() {
        return $this->ssexo;
    }

    function getDfechanacimiento() {
        return $this->dfechanacimiento;
    }

    function getSemail() {
        return $this->semail;
    }

    function getBSuscripcion() {
        return $this->bSuscripcion;
    }

    function getNTelefono() {
        return $this->nTelefono;
    }

    function getSpass() {
        return $this->spass;
    }

    function setSrun($srun) {
        $this->srun = $srun;
    }

    function setSnombre($snombre) {
        $this->snombre = $snombre;
    }

    function setApellidos($apellidos) {
        $this->apellidos = $apellidos;
    }

    function setCsexo($csexo) {
        $this->ssexo = $csexo;
    }

    function setDfechanacimiento($dfechanacimiento) {
        $this->dfechanacimiento = $dfechanacimiento;
    }

    function setSemail($semail) {
        $this->semail = $semail;
    }

    function setBSuscripcion($bSuscripcion) {
        $this->bSuscripcion = $bSuscripcion;
    }

    function setNTelefono($nTelefono) {
        $this->nTelefono = $nTelefono;
    }

    function setSpass($spass) {
        $this->spass = $spass;
    }

    function VerificaUsuario() {
        $db = dbconnect();
        /* Definición del query que permitira ingresar un nuevo registro */
        $sqlsel = "select nombre from usuario
		where email=:email";
        /* Preparación SQL */
        $querysel = $db->prepare($sqlsel);
        /* Asignación de parametros utilizando bindparam */
        $querysel->bindParam(':email', $this->semail);

        $datos = $querysel->execute();

        if ($querysel->rowcount() == 1)
            return true;
        else
            return false;
    }

    function VerificaAcceso() { //READ DEL CRUD!
        $db = dbconnect();
        /* Definición del query que permitira ingresar un nuevo registro */
        $sqlsel = "select email,runusuario,nombre,apellido,sexo,fechanacimiento,telefono,suscripcion,pass from usuario
		where email=:email and pass=:pwd";
        /* Preparación SQL */
        $querysel = $db->prepare($sqlsel);
        /* Asignación de parametros utilizando bindparam */
        $querysel->bindParam(':email', $this->semail);
        $querysel->bindParam(':pwd', $this->spass);


        $datos = $querysel->execute();

        if ($querysel->rowcount() == 1) {
            $registro = $querysel->fetch();
            $this->snombre = $registro['nombre'];
            $this->apellidos = $registro['apellido'];
            $this->ssexo = $registro['sexo'];
            $this->dfechanacimiento = $registro['fechanacimiento'];
            $this->nTelefono = $registro['telefono'];
            $this->semail = $registro['email'];
            $this->bSuscripcion = $registro['suscripcion'];
            $this->spass = $registro['password'];
            $this->srun = $registro['run'];
            return true;
        } else {
            return false;
        }
    }

    function CreaCliente() { //CREATE DEL CRUD!
        $db = dbconnect();
        /* Definición del query que permitira ingresar un nuevo registro */
        $sqlsel = "INSERT INTO usuario (email,runusuario,nombre,apellido,sexo,fechanacimiento,telefono,suscripcion,pass) VALUES (:email,:run,:nombre,:apellido,:sexo,:fecha,:telefono,:suscripcion,:pass)";
        /* Preparación SQL */
        $querysel = $db->prepare($sqlsel);
        /* Asignación de parametros utilizando bindparam */
        //:email,:run,:nombre,:apellido,:sexo,:fecha,:telefono,:suscripcion,:pass
        $querysel->bindParam(':email', $this->semail);
        $querysel->bindParam(':run', $this->srun);
        $querysel->bindParam(':nombre', $this->snombre);
        $querysel->bindParam(':apellido', $this->apellidos);
        $querysel->bindParam(':sexo', $this->ssexo);
        $querysel->bindParam(':fecha', $this->dfechanacimiento);
        $querysel->bindParam(':telefono', $this->nTelefono);
        $querysel->bindParam(':suscripcion', $this->bSuscripcion);
        $querysel->bindParam(':pass', $this->spass);


        $datos = $querysel->execute();

        return $datos;
    }

    function ActualizaClave($snewpwd) {
        $db = dbconnect();
        /* Definición del query que permitira actualizar la clave */
        $sqlupd = "update usuario
					set pass=:pwd
					where email=:id";

        /* Preparación SQL */
        $querysel = $db->prepare($sqlupd);

        /* Asignación de parametros utilizando bindparam */
        $querysel->bindParam(':pwd', md5($snewpwd));
        $querysel->bindParam(':id', $this->semail);

        $valaux = $querysel->execute();

        return $valaux;
    }

    function ActualizaCliente($srun,$snombre,$sapel,$ses,$sfec,$ntel,$bool,$snewpwd) { //UPDATE DEL CRUD!
        $db = dbconnect();
        /* Definición del query que permitira ingresar un nuevo registro */
        $sqlupd = "UPDATE usuario runusuario=:run,nombre=:nombre,apellido=:apellido,sexo=:sexo,fechanacimiento=:fecha,telefono=:telefono,suscripcion=:suscripcion,pass=:pass) where email=:email";
        /* Preparación SQL */
        $querysel = $db->prepare($sqlupd);
        /* Asignación de parametros utilizando bindparam */
        //:email,:run,:nombre,:apellido,:sexo,:fecha,:telefono,:suscripcion,:pass
        $querysel->bindParam(':email', $this->semail);
        $querysel->bindParam(':run', $srun);
        $querysel->bindParam(':nombre', $snombre);
        $querysel->bindParam(':apellido', $sapel);
        $querysel->bindParam(':sexo', $ses);
        $querysel->bindParam(':fecha', $sfec);
        $querysel->bindParam(':telefono', $ntel);
        $querysel->bindParam(':suscripcion', $bool);
        $querysel->bindParam(':pass', md5($snewpwd));


        $valaux = $querysel->execute();

        return $valaux;
    }
    
    function DeleteCliente($email) { // DELETE DEL CRUD!
        $db = dbconnect();
        /* Definición del query que permitira actualizar la clave */
        $sqlupd = "DELETE FROM usuario
					where email=:email";

        /* Preparación SQL */
        $querysel = $db->prepare($sqlupd);

        /* Asignación de parametros utilizando bindparam */
        $querysel->bindParam(':email', $email);

        $valaux = $querysel->execute();

        return $valaux;
    }
}
