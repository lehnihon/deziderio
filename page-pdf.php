<?php
$coordenador = utf8_decode(get_post_meta($_GET['pdf'], 'coordenador', true));
$telefone = get_post_meta($_GET['pdf'], 'telefone', true);
$embarque = utf8_decode(get_post_meta($_GET['pdf'], 'embarque', true));
$onibus = utf8_decode(get_post_meta($_GET['pdf'], 'onibus', true));
$title = utf8_decode(get_the_title($_GET['pdf']));

$horariop = get_post_meta($_GET['pdf'], 'horariop', true);
$destinop = get_post_meta($_GET['pdf'], 'destinop', true);
$horarior = get_post_meta($_GET['pdf'], 'horarior', true);
$destinor = get_post_meta($_GET['pdf'], 'destinor', true);

$pdf = new PDF();

$pdf->AddPage();

$pdf->SetFillColor(34,114,175);
$pdf->Cell(160,20,'',0,0,'C',true);
$pdf->Ln();
$pdf->Cell(160,7,'',0,0);
$pdf->Ln();
$pdf->Image('http://dezideriotransporte.com.br/images/resource/logo-deziderio.png',10,8,0,0,'PNG');
$pdf->SetFont('Arial','',12);
$pdf->Cell(80,7,"COODENADOR: $coordenador",0);
$pdf->Cell(80,7,"TELEFONE: $telefone",0);
$pdf->Ln();
$pdf->Cell(80,7,"EMBARQUE: $embarque",0);
$pdf->Cell(80,7,"DESTINO: $title",0);
$pdf->Ln();
$pdf->Cell(80,7,"ONIBUS: $onibus",0);
$pdf->Ln();
$pdf->Ln();

$pdf->SetFont('Arial','',12);
$pdf->Cell(160,7,'DESTINO',0);
$pdf->Ln();
$pdf->Ln();
// Header
$pdf->SetFillColor(217,237,247);
$pdf->Cell(30,7,'HORA',1,0,'C',true);
$pdf->Cell(130,7,'ENDERECO',1,0,'C',true);
$pdf->Ln();

$continua = true;
$i = 0;
while($continua){
	$continua = false;
	if(!empty($horariop[$i]))
		$continua = true;
	if(!empty($destinop[$i]))
		$continua = true;
	$pdf->Cell(30,7,$horariop[$i],1);
	$pdf->Cell(130,7,utf8_decode($destinop[$i]),1);
	$pdf->Ln();
	$i++;
}
$pdf->Ln();
$pdf->Ln();


$pdf->Cell(160,7,'RETORNO',0);
$pdf->Ln();
$pdf->Ln();
// Header
$pdf->SetFillColor(217,237,247);
$pdf->Cell(30,7,'HORA',1,0,'C',true);
$pdf->Cell(130,7,'ENDERECO',1,0,'C',true);
$pdf->Ln();

$continua = true;
$i = 0;
while($continua){
	$continua = false;
	if(!empty($horarior[$i]))
		$continua = true;
	if(!empty($destinor[$i]))
		$continua = true;
	$pdf->Cell(30,7,$horarior[$i],1);
	$pdf->Cell(130,7,utf8_decode($destinor[$i]),1);
	$pdf->Ln();
	$i++;
}



$pdf->Output();
?>