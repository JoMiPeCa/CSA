<?php
/**
 * Description of DetalleBoleta
 *
 * @author Jorge Muñoz
 */
class DetalleBoleta {
    
    private $nNumBoleta;
    private $sNombreProducto;
    private $nCantidad;
    private $nPrecioUnitario;
    private $nTotal;
    private $nMesesGarantia;
    
    function __construct($nNumBoleta, $sNombreProducto, $nCantidad, $nPrecioUnitario, $nTotal, $nMesesGarantia) {
        $this->nNumBoleta = $nNumBoleta;
        $this->sNombreProducto = $sNombreProducto;
        $this->nCantidad = $nCantidad;
        $this->nPrecioUnitario = $nPrecioUnitario;
        $this->nTotal = $nTotal;
        $this->nMesesGarantia = $nMesesGarantia;
    }

    function getNNumBoleta() {
        return $this->nNumBoleta;
    }

    function getSNombreProducto() {
        return $this->sNombreProducto;
    }

    function getNCantidad() {
        return $this->nCantidad;
    }

    function getNPrecioUnitario() {
        return $this->nPrecioUnitario;
    }

    function getNTotal() {
        return $this->nTotal;
    }

    function getNMesesGarantia() {
        return $this->nMesesGarantia;
    }

    function setNNumBoleta($nNumBoleta) {
        $this->nNumBoleta = $nNumBoleta;
    }

    function setSNombreProducto($sNombreProducto) {
        $this->sNombreProducto = $sNombreProducto;
    }

    function setNCantidad($nCantidad) {
        $this->nCantidad = $nCantidad;
    }

    function setNPrecioUnitario($nPrecioUnitario) {
        $this->nPrecioUnitario = $nPrecioUnitario;
    }

    function setNTotal($nTotal) {
        $this->nTotal = $nTotal;
    }

    function setNMesesGarantia($nMesesGarantia) {
        $this->nMesesGarantia = $nMesesGarantia;
    }


}
