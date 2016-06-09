<?php
/**
 * Description of Boleta
 *
 * @author JEB.
 */
class Boleta {
    private $sNumBoleta;
    private $dFecha;
    private $tHora;
    private $sMedioPago;
    private $nNumTarjeta;
    private $nTotal;
    private $sTipoTransaccion;
    private $nNumeroOrden;
    
    function __construct($sNumBoleta, $dFecha, $tHora, $sMedioPago, $nNumTarjeta, $nTotal, $sTipoTransaccion, $nNumeroOrden) {
        $this->sNumBoleta = $sNumBoleta;
        $this->dFecha = $dFecha;
        $this->tHora = $tHora;
        $this->sMedioPago = $sMedioPago;
        $this->nNumTarjeta = $nNumTarjeta;
        $this->nTotal = $nTotal;
        $this->sTipoTransaccion = $sTipoTransaccion;
        $this->nNumeroOrden = $nNumeroOrden;
    }
    
    function getSNumBoleta() {
        return $this->sNumBoleta;
    }

    function getDFecha() {
        return $this->dFecha;
    }

    function getTHora() {
        return $this->tHora;
    }

    function getSMedioPago() {
        return $this->sMedioPago;
    }

    function getNNumTarjeta() {
        return $this->nNumTarjeta;
    }

    function getNTotal() {
        return $this->nTotal;
    }

    function getSTipoTransaccion() {
        return $this->sTipoTransaccion;
    }

    function getNNumeroOrden() {
        return $this->nNumeroOrden;
    }

    function setSNumBoleta($sNumBoleta) {
        $this->sNumBoleta = $sNumBoleta;
    }

    function setDFecha($dFecha) {
        $this->dFecha = $dFecha;
    }

    function setTHora($tHora) {
        $this->tHora = $tHora;
    }

    function setSMedioPago($sMedioPago) {
        $this->sMedioPago = $sMedioPago;
    }

    function setNNumTarjeta($nNumTarjeta) {
        $this->nNumTarjeta = $nNumTarjeta;
    }

    function setNTotal($nTotal) {
        $this->nTotal = $nTotal;
    }

    function setSTipoTransaccion($sTipoTransaccion) {
        $this->sTipoTransaccion = $sTipoTransaccion;
    }

    function setNNumeroOrden($nNumeroOrden) {
        $this->nNumeroOrden = $nNumeroOrden;
    }



    
}
