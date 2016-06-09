<?php
/**
 * Description of Categoria
 *
 * @author JEB.
 */
class Categoria {
    private $sIdCategoria;
    private $sNombre;
    private $sTipoCategoria;
    
    function __construct($sIdCategoria, $sNombre, $sTipoCategoria) {
        $this->sIdCategoria = $sIdCategoria;
        $this->sNombre = $sNombre;
        $this->sTipoCategoria = $sTipoCategoria;
    }

    function getSIdCategoria() {
        return $this->sIdCategoria;
    }

    function getSNombre() {
        return $this->sNombre;
    }

    function getSTipoCategoria() {
        return $this->sTipoCategoria;
    }

    function setSIdCategoria($sIdCategoria) {
        $this->sIdCategoria = $sIdCategoria;
    }

    function setSNombre($sNombre) {
        $this->sNombre = $sNombre;
    }

    function setSTipoCategoria($sTipoCategoria) {
        $this->sTipoCategoria = $sTipoCategoria;
    }


    
}
