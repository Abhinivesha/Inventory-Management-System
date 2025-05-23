<?php
ob_start();
require_once(APPPATH.'../vendor/setasign/fpdf/fpdf.php');
$pdf = new FPDF();
$pdf->SetMargins(2,2,2);
$pdf->AddPage();
$pdf->Line(2,2,2,295);
$pdf->Line(208,2,208,295);
$pdf->Line(2,2,208,2);
$pdf->SetFont('Arial','B',14);
$pdf->SetX(10);
$pdf->Cell(60,20,'Tax Invoice',0,2,$pdf->Image('../public/images/logo.png',61,5,0,15,'',''));
// $pdf->Image('/opt/lampp/htdocs/dmo/public/images/logo.png',61,0,0,20,'','');
$pdf->Line(2,20,208,20);
$pdf->SetFont('Arial','B',10);
$pdf->SetX(10);
$pdf->Cell(95,8,'Airsync Enterprises',0,2);
$pdf->SetFont('Arial','',9);
$pdf->Cell(95,4,'N-11 E-54/6 Mayur Nagar Hudco,Aurangabad,431001',0,2);
$pdf->SetFont('Arial','',9);
$pdf->Cell(95,5,'Maharashtra. code:27',0,2);
$pdf->Cell(95,4,'GSTIN/UIN: 27ARJPG9142M1Z',0,2);
$pdf->Cell(95,4,'Email: sales.airsync@gmail.com',0,1);
$pdf->Ln(4);
$pdf->Line(2,49,208,49);
$pdf->SetFont('Arial','B',9);
$pdf->SetXY(117,20);
$pdf->Cell(50,14,'Invoice No: '.$outward[0]['id'],1,0);
$pdf->Cell(41,14,'Date: '.$outward[0]['invoice_date'],'TB',1);
$pdf->SetXY(117,34);
$pdf->Cell(50,15,"Buyer's Order No: ",1,0);
$pdf->Cell(41,15,"PO No: ".$outward[0]['po_no'],'TB',0,2);
$pdf->SetXY(10,49);
$pdf->Cell(30,5,'Bill To',0,2,);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(30,5,$outward[0]['customer'],0,2,);
$pdf->SetFont('Arial','',9);
$pdf->Cell(50,4,$customer[0]['address'],0,2);
$pdf->Cell(50,4,'Waluj, Aurangabad',0,2);
$pdf->Cell(50,4,'Maharashtra',0,2);
$pdf->Cell(50,4,$customer[0]['gst_no'],0,2);
$pdf->Line(2,77,208,77);
$pdf->SetFont('Arial','B',9);
$pdf->SetXY(10,80);
$pdf->Cell(30,5,'Ship To',0,2);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(30,5,$outward[0]['customer'],0,2);
$pdf->SetFont('Arial','',9);
$pdf->Cell(50,4,$customer[0]['address'],0,2);
$pdf->Cell(50,4,'431001',0,2);
$pdf->Cell(50,4,'Maharashtra',0,2);
$pdf->Cell(50,4,$customer[0]['gst_no'],0,2);
// $pdf->Line(2,104,207,104);
$pdf->Ln(2);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(15,8,'Sr.No',1,0,'C');
$pdf->Cell(100,8,'Description Of Goods',1,0,'C');
$pdf->Cell(15,8,'HSN',1,0,'C');
$pdf->Cell(20,8,'Quantity',1,0,'C');
$pdf->Cell(20,8,'Unit Rate',1,0,'C');
$pdf->Cell(15,8,'GST',1,0,'C'); 
$pdf->Cell(23,8,'Amount','TB',1,'C');
$pdf->SetFont('Arial','',10);
$pdf->Cell(15,90,'',1,0,'C');
$pdf->Cell(100,90,'',1,0,'C');
$pdf->Cell(15,90,'',1,0,'C');
$pdf->Cell(20,90,'',1,0,'C');
$pdf->Cell(20,90,'',1,0,'C');
$pdf->Cell(15,90,'',1,0,'C');
$pdf->Cell(23,90,'',0,1,'C');
$pdf->Cell(15,8,'',1,0,'C');
$pdf->Cell(100,8,'',1,0,'C');
$pdf->Cell(15,8,'',1,0,'C');
$pdf->Cell(20,8,'',1,0,'C');
$pdf->Cell(20,8,'',1,0,'C');
$pdf->Cell(15,8,'',1,0,'C');
$pdf->Cell(23,8,'',1,1,'C');
$pdf->SetFont('Arial','B','9');
$pdf->SetXY(2,116);
// Table Data
$pdf->SetFont('Arial','',10);
$no = 1;
$total = 0;
$gst = 0.18 / 2;
$cgst = 0;
$sgst = 0;
foreach ($items as $item) {
	$pdf->Cell(15,6,$no++,0,0,'C');
	$pdf->Cell(100,6,$item['product'],0,0,'C');
	$pdf->Cell(15,6,$item['partcode'],0,0,'C');
	$pdf->Cell(20,6,$item['qty'].' '.$item['unit'],0,0,'C');
	$pdf->Cell(20,6,$item['rate'],0,0,'C');
	$pdf->Cell(15,6,$item['gst'].' %',0,0,'C');
	$cgst += ($item['rate'] * $item['qty']) * ($gst);
	$sgst += ($item['rate'] * $item['qty']) * ($gst);
	$pdf->Cell(22,6,$item['rate'] * $item['qty'],0,1,'C');
	$total += $item['rate']*$item['qty'];
}

$pdf->SetFont('Arial','B',10);
$pdf->SetXY(100,170);
$pdf->Cell(10,5,'Frieght: ',0,2);
$pdf->Cell(10,5,'CGST: ',0,2);
$pdf->Cell(10,5,'SGST: ',0,2);
$pdf->SetFont('Arial','B',10);
$pdf->SetXY(186,170);
// $cgst = 225;
// $sgst = 225;
$pdf->Cell(10,5,'',0,2);
$pdf->Cell(23,5,$cgst,0,2,'C');
$pdf->Cell(23,5,$sgst,0,2,'C');
$pdf->SetXY(100,208);
$pdf->Cell(10,5,'Total: ',0,0);
$pdf->SetX(182);
$pdf->Cell(30,5,($total + $cgst + $sgst),0,0,'C');
$pdf->setXY(2,214);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(70,8,'Amount Chargeable (in words): ',0,0,);
$f = new NumberFormatter("en", NumberFormatter::SPELLOUT);
$pdf->Cell(116,8,$f->format($total + $cgst + $sgst).' rupees only',0,1,);
$pdf->Line(2,222,208,222);
// $pdf->SetFont('Arial','',10);
// $pdf->Cell(15,5,'1',0,0,'C');
// $pdf->Cell(100,5,'item1',0,0,'C');
// $pdf->Cell(15,5,'18',0,0,'C');
// $pdf->Cell(15,5,'30',0,0,'C');
// $pdf->Cell(20,5,'500',0,0,'C');
// $pdf->Cell(15,5,'30',0,0,'C');
// $pdf->Cell(26,5,'1500',0,0,'C');
$pdf->Ln(10);
$pdf->SetXY(10,227);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(40,4,'Company PAN: ',0,0,);
$pdf->Cell(10,4,'ARJPG9142M',0,1);
$pdf->SetXY(10,231);
$pdf->Cell(30,4,'Declaration: ',0,2);
$pdf->Cell(60,4,'We declare that this invoice shows the actual price of',0,2);
$pdf->Cell(60,4,'he goods described and that all particulars are true',0,2);
$pdf->Cell(60,4,'and correct.',0,2);
$pdf->SetXY(120,227);
$pdf->Cell(40,4,'Company Bank Details: ',0,2);
$pdf->Cell(40,4,'Bank Name: ICICI Bank Ltd.',0,2);
$pdf->Cell(60,4,'A\c No: 11050500175',0,2);
$pdf->Cell(60,4,'Branch & IFS Code: Cidco Branch ICIC00011',0,0);
$pdf->Ln(2);
$pdf->SetXY(140,250);
$pdf->Cell(50,8,'For Airsync Enterprises',0,0);
$pdf->Line(117,222,117,250);
$pdf->Line(2,250,208,250);
$pdf->Line(2,295,208,295);
$pdf->Output('D','invoice.pdf');
// $pdf->Output();
ob_end_flush();
?>