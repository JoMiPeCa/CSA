<?php

/**
 * Description of CarritoCompras
 *
 * @author Jorge Muñoz
 */
class CarritoCompras {
    
    private $sidcarritocompra;
    private $sidproducto;
    private $ldscto;
    private $ntotal;
    private $ncantidad;
    private $nmontoapagar;
    private $querysel;
    
    function __construct($sidcarritocompra= NULL, $sidproducto=NULL, $ldscto=NULL, $ntotal=NULL, $ncantidad=NULL, $nmontoapagar=NULL) {
        $this->sidcarritocompra = $sidcarritocompra;
        $this->sidproducto = $sidproducto;
        $this->ldscto = $ldscto;
        $this->ntotal = $ntotal;
        $this->ncantidad = $ncantidad;
        $this->nmontoapagar = $nmontoapagar;
    }
        
    function getSidcarritocompra() {
        return $this->sidcarritocompra;
    }

    function getSidproducto() {
        return $this->sidproducto;
    }

    function getLdscto() {
        return $this->ldscto;
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

    function setSidcarritocompra($sidcarritocompra) {
        $this->sidcarritocompra = $sidcarritocompra;
    }

    function setSidproducto($sidproducto) {
        $this->sidproducto = $sidproducto;
    }

    function setLdscto($ldscto) {
        $this->ldscto = $ldscto;
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

    function Selecciona() {

        if (!$this->querysel) {
            $db = dbconnect();
            /* Definicion del query que permitira ingresar un nuevo registro */

            $sqlsel = "select * from carritocompra order by idProducto";

            /* Preparacion SQL */
            $this->querysel = $db->prepare($sqlsel);

            $this->querysel->execute();
        }

        $registro = $this->querysel->fetch();
        if ($registro) {
            return new self($registro['idCarritoCompra'], 
                    $registro['idProducto'],
                    $registro['dscto'],
                    $registro['total'],
                    $registro['cantidad'],
                    $registro['montoPagar']
                    /*,    $registro['carritoCompracol']*/);
        } else { 
            return false;
        }
    }


}


