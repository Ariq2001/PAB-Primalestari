<?php

require('plugin/fpdf/fpdf.php');
$pdf = new FPDF('P', 'mm','A4');

$pdf->AddPage();

$pdf->SetFont('Times','B',16);
$pdf->Cell(0,7,'LAPORAN KAS BULANAN',0,1,'C');
$pdf->Cell(0,7,'PAB PRIMA LESTARI TUGUREJO',0,1,'C');
$pdf->Cell(0,7,'BULAN =',0,1,'C');

$pdf->Cell(10,7,'',0,1);

$pdf->SetFont('Times','B',10);

$pdf->Cell(15,8,'No',1,0,'C');
$pdf->Cell(115,8,'Keterangan transaksi',1,0,'C');
$pdf->Cell(60,8,'Jumlah',1,0,'C');

$pdf->SetFont('Times','',10);

//Membuat Koneksi ke database akademik
$host="localhost";
$user="root";
$password="";
$db="pabprimalestari";

$kon = mysqli_connect($host,$user,$password,$db);

$no=1;
//Query untuk mengambil data mahasiswa pada tabel mahasiswa
$hasil = mysqli_query($kon, "select * from tb_pengeluaran wher ");
while ($data = mysqli_fetch_array($hasil)){

    
    $pdf->Cell(8,6,$no,1,0);
    $pdf->Cell(10,6,$data['keterangan'],1,0);
    $pdf->Cell(15,6,$data['jumlah'],1,0);
    $no++;
}

$pdf->Output();
?>