<?php
session_start();
include('../../conf/koneksi.php');
$kodeplgn      = $_GET['kodeplgn'];
$bulanpemakaian= $_GET['bulanpemakaian'];
$standakhir    = $_GET['standakhir'];
$tglentry      = $_GET['tglentry'];

$query = mysqli_query($koneksi,"UPDATE tb_pencatatmeter SET bulanpemakaian='$bulanpemakaian',standakhir='$standakhir',tglentry='$tglentry' where kodeplgn='$kodeplgn'" );
header('location: ../index.php?page=pencatat-meter');
?>