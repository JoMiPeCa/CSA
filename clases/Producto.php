<?php
/**
 * Description of Producto
 *
 * @author Jonathan Espinoza
 */
class Producto {
    
    private $scodigo;
    private $nprecio;
    private $sdescripcion;
    private $subicacion;
    private $ncantidad;
    private $scategoria;
    private $ndescuento;
    private $dterminodescuento;
    
    function __construct($scodigo, $nprecio, $sdescripcion, $subicacion, $ncantidad, $scategoria, $ndescuento, $dterminodescuento) {
        $this->scodigo = $scodigo;
        $this->nprecio = $nprecio;
        $this->sdescripcion = $sdescripcion;
        $this->subicacion = $subicacion;
        $this->ncantidad = $ncantidad;
        $this->scategoria = $scategoria;
        $this->ndescuento = $ndescuento;
        $this->dterminodescuento = $dterminodescuento;
    }

    function getScodigo() {
        return $this->scodigo;
    }

    function getNprecio() {
        return $this->nprecio;
    }

    function getSdescripcion() {
        return $this->sdescripcion;
    }

    function getSubicacion() {
        return $this->subicacion;
    }

    function getNcantidad() {
        return $this->ncantidad;
    }

    function getScategoria() {
        return $this->scategoria;
    }

    function getNdescuento() {
        return $this->ndescuento;
    }

    function getDterminodescuento() {
        return $this->dterminodescuento;
    }

    function setScodigo($scodigo) {
        $this->scodigo = $scodigo;
    }

    function setNprecio($nprecio) {
        $this->nprecio = $nprecio;
    }

    function setSdescripcion($sdescripcion) {
        $this->sdescripcion = $sdescripcion;
    }

    function setSubicacion($subicacion) {
        $this->subicacion = $subicacion;
    }

    function setNcantidad($ncantidad) {
        $this->ncantidad = $ncantidad;
    }

    function setScategoria($scategoria) {
        $this->scategoria = $scategoria;
    }

    function setNdescuento($ndescuento) {
        $this->ndescuento = $ndescuento;
    }

    function setDterminodescuento($dterminodescuento) {
        $this->dterminodescuento = $dterminodescuento;
    }


}
