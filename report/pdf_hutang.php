<?php

require('plugin/fpdf/fpdf.php');
$pdf = new FPDF('P', 'mm','A4');

$pdf->AddPage();

$pdf->SetFont('Times','B',16);
$pdf->Cell(0,7,'DATA HUTANG',0,1,'C');

$pdf->Cell(10,7,'',0,1);

$pdf->SetFont('Times','B',10);

$pdf->Cell(8,6,'No',1,0,'C');
$pdf->Cell(30,6,'Nama Supplier',1,0,'C');
$pdf->Cell(30,6,'Alamat',1,0,'C');
$pdf->Cell(30,6,'Jumlah Pembelian',1,0,'C');
$pdf->Cell(35,6,'Jumlah Pembayaran',1,0,'C');
$pdf->Cell(30,6,'Jumlah Hutang',1,0,'C');
// $pdf->Cell(22,6,'Tunggakan',1,0,'C');
// $pdf->Cell(22,6,'Tagihan',1,0,'C');
// $pdf->Cell(15,6,'Ket.',1,0,'C');
// $pdf->Cell(15,6,'Tgl.Lunas',1,0,'C');
// $pdf->Cell(1,3,'',0,1,'C');
// $pdf->Cell(18,3,'',0,0,'C');
// $pdf->Cell(15,3,'Awal',1,0,'C');
// $pdf->Cell(15,3,'Akhir',1,0,'C');
// $pdf->Cell(20,3,'',0,0,'C');
// $pdf->Cell(15,3,'Pakai',1,0,'C');
// $pdf->Cell(15,3,'Tagih',1,1,'C');


$pdf->SetFont('Times','',10);

//Membuat Koneksi ke database akademik
$host="192.168.0.117";
$user="syafira";
$password="12345";
$db="pabprimalestari";

$kon = mysqli_connect($host,$user,$password,$db);

$no=1;
//Query untuk mengambil data mahasiswa pada tabel mahasiswa
$hasil = mysqli_query($kon, "select * from tb_hutang order by namasupplier");
while ($data = mysqli_fetch_array($hasil)){

    
    $pdf->Cell(8,6,$no,1,0);
    $pdf->Cell(30,6,$data['namasupplier'],1,0);
    $pdf->Cell(30,6,$data['alamat'],1,0);
    $pdf->Cell(30,6,$data['jmlpembelian'],1,0);
    $pdf->Cell(35,6,$data['jmlpembayaran'],1,0);
    $pdf->Cell(30,6,$data['jmlhutang'],1,0);
    // $pdf->Cell(15,6,$data['bulantagihan'],1,0);
    // $pdf->Cell(22,6,$data['retribusi'],1,0);
    // $pdf->Cell(22,6,$data['tunggakan'],1,0);
    // $pdf->Cell(22,6,$data['totaltagihan'],1,0);
    // $pdf->Cell(15,6,$data['kodelunas'],1,0);
    // $pdf->Cell(15,6,$data['tgllunas'],1,1);
    $no++;
}

$pdf->Output();
?>