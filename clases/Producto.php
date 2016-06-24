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

    function __construct($nidProducto=NULL,$snombreProducto=NULL,$scategoria=NULL,$nprecioUnitario=NULL,$sdescripcionProducto=NULL,$subicacion=NULL,$ncantidad=NULL,$ldsto=NULL,$dfechaTerminoDsto=NULL){
		$this->nidProducto=$nidProducto;
		$this->snombreProducto=$snombreProducto;
		$this->scategoria=$scategoria;
		$this->nprecioUnitario=$nprecioUnitario;
		$this->sdescripcionProducto=$sdescripcionProducto;
		$this->subicacion=$subicacion;
		$this->ncantidad=$ncantidad;
		$this->ldsto=$ldsto;
		$this->dfechaTerminoDsto=$dfechaTerminoDsto;
		
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

}
