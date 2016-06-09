<?php

/**
 * Description of SubCategoría
 *
 * @author Jorge Muñoz
 */
class SubCategoría {
    
    private $nCodigo;
    private $sNombreSCateg;
    
    function __construct($nCodigo, $sNombreSCateg) {
        $this->nCodigo = $nCodigo;
        $this->sNombreSCateg = $sNombreSCateg;
    }

    function getNCodigo() {
        return $this->nCodigo;
    }

    function getSNombreSCateg() {
        return $this->sNombreSCateg;
    }

    function setNCodigo($nCodigo) {
        $this->nCodigo = $nCodigo;
    }

    function setSNombreSCateg($sNombreSCateg) {
        $this->sNombreSCateg = $sNombreSCateg;
    }


}
