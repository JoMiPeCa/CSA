<?php

/**
 * Description of Producto
 *
 * @author Jonathan Espinoza
 */
class Producto {

    private $nidProducto;
    private $snombreProducto;
    private $scategoria;
    private $nprecioUnitario;
    private $sdescripcionProducto;
    private $subicacion;
    private $ncantidad;
    private $ldsto;
    private $dfechaTerminoDsto;
    private $querysel;

    function __construct($nidProducto = NULL, $snombreProducto = NULL, $scategoria = NULL, $nprecioUnitario = NULL, $sdescripcionProducto = NULL, $subicacion = NULL, $ncantidad = NULL, $ldsto = NULL, $dfechaTerminoDsto = NULL) {
        $this->nidProducto = $nidProducto;
        $this->snombreProducto = $snombreProducto;
        $this->scategoria = $scategoria;
        $this->nprecioUnitario = $nprecioUnitario;
        $this->sdescripcionProducto = $sdescripcionProducto;
        $this->subicacion = $subicacion;
        $this->ncantidad = $ncantidad;
        $this->ldsto = $ldsto;
        $this->dfechaTerminoDsto = $dfechaTerminoDsto;
    }

    function getNidProducto() {
        return $this->nidProducto;
    }

    function getSnombreProducto() {
        return $this->snombreProducto;
    }

    function getScategoria() {
        return $this->scategoria;
    }

    function getNprecioUnitario() {
        return $this->nprecioUnitario;
    }

    function getSdescripcionProducto() {
        return $this->sdescripcionProducto;
    }

    function getSubicacion() {
        return $this->subicacion;
    }

    function getNcantidad() {
        return $this->ncantidad;
    }

    function getLdescuento() {
        return $this->ldsto;
    }

    function getDfechaTerminoDsto() {
        return $this->dfechaTerminoDsto;
    }

    function setNidProducto($nidProducto) {
        $this->nidProducto = $nidProducto;
    }

    function setSnombreProducto($snombreProducto) {
        $this->snombreProducto = $snombreProducto;
    }

    function setScategoria($scategoria) {
        $this->scategoria = $scategoria;
    }

    function setNprecioUnitario($nprecioUnitario) {
        $this->nprecioUnitario = $nprecioUnitario;
    }

    function setSdescripcionProducto($sdescripcionProducto) {
        $this->sdescripcionProducto = $sdescripcionProducto;
    }

    function setSubicacion($subicacion) {
        $this->subicacion = $subicacion;
    }

    function setNcantidad($ncantidad) {
        $this->ncantidad = $ncantidad;
    }

    function setLdescuento($ldescuento) {
        $this->ldsto = $ldescuento;
    }

    function setDfechaTerminoDsto($dfechaTerminoDsto) {
        $this->dfechaTerminoDsto = $dfechaTerminoDsto;
    }

    function Selecciona() {

        if (!$this->querysel) {
            $db = dbconnect();
            /* Definicion del query que permitira ingresar un nuevo registro */

            $sqlsel = "select idProducto,nombreProducto,categoria,precioUnitario,descripcionProducto,ubicacion,cantidad,dsto,fechaTerminoDsto from producto order by idProducto";

            /* Preparacion SQL */
            $this->querysel = $db->prepare($sqlsel);

            $this->querysel->execute();
        }

        $registro = $this->querysel->fetch();
        if ($registro) {
            return new self($registro['idProducto'], $registro['nombreProducto'], $registro['categoria'], $registro['precioUnitario'], $registro['descripcionProducto'], $registro['ubicacion'], $registro['cantidad'], $registro['dsto'], $registro['fechaTerminoDsto']);
        } else {
            return false;
        }
    }

    function Elimina($id) {

        $db = dbconnect();

        /* Definicion del query que permitira eliminar un registro */
        $sqldel = "delete from producto where idProducto=:id";

        /* Preparacion SQL */
        $querydel = $db->prepare($sqldel);

        $querydel->bindParam(':id', $id);

        $valaux = $querydel->execute();

        return $valaux;
    }

    function Agrega($nidProducto, $snombreProducto, $scategoria, $nprecioUnitario, $sdescripcionProducto, $subicacion, $ncantidad, $ldsto, $dfechaTerminoDsto) {

        $db = dbconnect();
        /* Definicion del query que permitira agregar un registro */
        $sqladd = "INSERT INTO producto VALUES(:id,:nombre,:categoria,:precio,:descripcion,:ubicacion,:cantidad,:dsto,:fechatermino)";

        /* Preparacion SQL */
        $queryadd = $db->prepare($sqladd);

        $queryadd->bindParam(':id', $nidProducto);
        $queryadd->bindParam(':descripcion', $snombreProducto);
        $queryadd->bindParam(':precio', $scategoria);
        $queryadd->bindParam(':dias', $nprecioUnitario);
        $queryadd->bindParam(':fecha', $sdescripcionProducto);
        $queryadd->bindParam(':fecha', $subicacion);
        $queryadd->bindParam(':fecha', $ncantidad);
        $queryadd->bindParam(':fecha', $ldsto);
        $queryadd->bindParam(':fecha', $dfechaTerminoDsto);

        $valaux = $queryadd->execute();

        return $valaux;
    }

    function ActualizaProducto($id, $descripcion, $precio, $dias, $fecha) {

        $db = dbconnect();
        /* Definicion del query que permitira actualizar el producto */
        $sqlupd = "update oferta
					set descripcion=:descripcion,
					set precio=:precio,
					set dias=:dias,
					set fecha=:fecha,
					where idoferta=:id";

        /* Preparacion SQL */
        $querysel = $db->prepare($sqlupd);

        /* Asignacion de parametros utilizando bindparam */
        $querysel->bindParam(':descripcion', $descripcion);
        $querysel->bindParam(':precio', $precio);
        $querysel->bindParam(':dias', $dias);
        $querysel->bindParam(':fecha', $fecha);
        $querysel->bindParam(':id', $id);

        $valaux = $querysel->execute();

        return $valaux;
    }

}

?>
