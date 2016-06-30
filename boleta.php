<?php

require('fpdf.php');
require 'librerias.php';

class PDF extends FPDF {

// Cargar los datos
    function Load2Data($file) {
        // Leer las líneas del fichero
        $lines = file($file);
        $data = array();
        foreach ($lines as $line)
            $data[] = explode(';', trim($line));
        return $data;
    }

//Cargar Nuevo Datos
    function LoadData() {
        $cCarro = new CarritoCompras();
        $data = array();
        while ($carro2 = $cCarro->Selecciona()) {
            $data[] = $carro2->getSidproducto() . $carro2->getNtotal() . $carro2->getNcantidad() . $carro2->getNmontoapagar();
        }
        return $data;
    }

// Una tabla más completa
    function ImprovedTable($header, $data) {
        // Anchuras de las columnas
        $w = array(40, 35, 45, 40);
        // Cabeceras
        for ($i = 0; $i < count($header); $i++)
            $this->Cell($w[$i], 7, $header[$i], 1, 0, 'C');
        $this->Ln();
        // Datos
        foreach ($data as $row) {
            $this->Cell($w[0], 6, $row[0], 'LR');
            $this->Cell($w[1], 6, $row[1], 'LR');
            $this->Cell($w[2], 6, number_format($row[2]), 'LR', 0, 'R');
            $this->Cell($w[3], 6, number_format($row[3]), 'LR', 0, 'R');
            $this->Ln();
        }
        // Línea de cierre
        $this->Cell(array_sum($w), 0, '', 'T');
    }

}

$pdf = new PDF();
$header = array('Producto', 'Precio', 'Unidades', 'Total');
$data = $pdf->LoadData();
$pdf->SetFont('Arial', '', 14);
$pdf->AddPage();
$pdf->ImprovedTable($header, $data);
$pdf->Output();
?>