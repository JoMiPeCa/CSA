<?php

/**
 * Description of CarritoCompras
 *
 * @author Jorge Muñoz
 */
class CarritoCompras {
    
    private $sproducto;
    private $nprecio;
    private $ndescuento;
    private $ntotal;
    private $ncantidad;
    private $nmontoapagar;
    
    function __construct($sproducto= NULL, $nprecio=NULL, $ndescuento=NULL, $ntotal=NULL, $ncantidad=NULL, $nmontoapagar=NULL) {
        $this->sproducto = $sproducto;
        $this->nprecio = $nprecio;
        $this->ndescuento = $ndescuento;
        $this->ntotal = $ntotal;
        $this->ncantidad = $ncantidad;
        $this->nmontoapagar = $nmontoapagar;
    }
    
    function getSproducto() {
        return $this->sproducto;
    }

    function getNprecio() {
        return $this->nprecio;
    }

    function getNdescuento() {
        return $this->ndescuento;
    }

    function getNtotal() {
        return $this->ntotal;
    }

    function getNcantidad() {
        return $this->ncantidad;
    }

    function getNmontoapagar() {
        return $this->nmontoapagar;
    }

    function setSproducto($sproducto) {
        $this->sproducto = $sproducto;
    }

    function setNprecio($nprecio) {
        $this->nprecio = $nprecio;
    }

    function setNdescuento($ndescuento) {
        $this->ndescuento = $ndescuento;
    }

    function setNtotal($ntotal) {
        $this->ntotal = $ntotal;
    }

    function setNcantidad($ncantidad) {
        $this->ncantidad = $ncantidad;
    }

    function setNmontoapagar($nmontoapagar) {
        $this->nmontoapagar = $nmontoapagar;
    }



}
