<?php

require('plugin/fpdf/fpdf.php');
$pdf = new FPDF('P', 'mm','A4');

$pdf->AddPage();

$pdf->SetFont('Times','B',12);
$pdf->Cell(0,7,'DATA TAGIHAN PELANGGAN',0,1,'C');
$pdf->Cell(0,7,'PAB PRIMA LESTARI',0,1,'C');
$pdf->Cell(0,7,'BULAN PEMAKAIAN : .......',0,1,'C');


$pdf->Cell(10,7,'',0,1);

$pdf->SetFont('Times','B',10);

$pdf->Cell(8,6,'No',1,0,'C');
$pdf->Cell(10,6,'Kode',1,0,'C');
$pdf->Cell(30,3,'Stand',1,0,'C');
$pdf->Cell(20,6,'Pemakaian',1,0,'C');
$pdf->Cell(30,3,'Bulan',1,0,'C');
$pdf->Cell(22,6,'Retribusi',1,0,'C');
$pdf->Cell(22,6,'Tunggakan',1,0,'C');
$pdf->Cell(22,6,'Tagihan',1,0,'C');
$pdf->Cell(15,6,'Operator',1,0,'C');
$pdf->Cell(15,6,'Tgl.Lunas',1,0,'C');
$pdf->Cell(1,3,'',0,1,'C');
$pdf->Cell(18,3,'',0,0,'C');
$pdf->Cell(15,3,'Awal',1,0,'C');
$pdf->Cell(15,3,'Akhir',1,0,'C');
$pdf->Cell(20,3,'',0,0,'C');
$pdf->Cell(15,3,'Pakai',1,0,'C');
$pdf->Cell(15,3,'Tagih',1,1,'C');


$pdf->SetFont('Times','',10);

//Membuat Koneksi ke database akademik
$host="192.168.0.117";
$user="syafira";
$password="12345";
$db="pabprimalestari";

$kon = mysqli_connect($host,$user,$password,$db);

$no=1;
//Query untuk mengambil data mahasiswa pada tabel mahasiswa
$hasil = mysqli_query($kon, "select * from tb_datatagihan order by kodeplgn");
while ($data = mysqli_fetch_array($hasil)){

    
    $pdf->Cell(8,6,$no,1,0);
    $pdf->Cell(10,6,$data['kodeplgn'],1,0);
    $pdf->Cell(15,6,$data['standawal'],1,0);
    $pdf->Cell(15,6,$data['standakhir'],1,0);
    $pdf->Cell(20,6,$data['jmlpemakaian'],1,0);
    $pdf->Cell(15,6,$data['bulanpemakaian'],1,0);
    $pdf->Cell(15,6,$data['bulantagihan'],1,0);
    $pdf->Cell(22,6,$data['retribusi'],1,0);
    $pdf->Cell(22,6,$data['tunggakan'],1,0);
    $pdf->Cell(22,6,$data['tagihan'],1,0);
    $pdf->Cell(15,6,$data['kodelunas'],1,0);
    $pdf->Cell(15,6,$data['tgllunas'],1,1);
    $no++;
}

$pdf->Output();
?>