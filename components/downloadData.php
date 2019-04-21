<?php
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }    
    //include "head.php";
    require('fpdf/fpdf.php');
    $pdf = new FPDF();
    $pdf->AddPage();
    $pdf->SetFont('Arial','B',16);
    $pdf->Cell(40,10,'Come da te richiesto ti forniamo i tuoi dati di seguito:');
        
        //-Cognome: 
        //");
    $pdf->Ln(10);
    $pdf->Cell(10,20,'-Nome: ' . $_SESSION["nome"]);
    $pdf->Ln(10);
    $pdf->Cell(10,20,'-Cognome: ' . $_SESSION["cognome"]);
    $pdf->Ln(10);
    $pdf->Cell(10,20,'-eMail: ' . $_SESSION["mail"]);
    $pdf->Ln(10);
    $pdf->Cell(10,20,'-Nazione: ' . $_SESSION["nazione"]);
    $pdf->Ln(10);
    $pdf->Cell(10,20,'-Data di registrazione: ' . $_SESSION["registrazione"]);
    $pdf->Output();
?>