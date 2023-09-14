<?php
session_start();
include('../../conf/koneksi.php');
$kodewilayah      = $_GET['kodewilayah'];
$jmltunggakan     = $_GET['jmltunggakan'];
$tghbulanini      = $_GET['tghbulanini'];
$jmlpembayaran    = $_GET['jmlpembayaran'];
$jmlkurang        = $_GET['jmlkurang'];
$totaltunggakan   = $_GET['totaltunggakan'];

$query = mysqli_query($koneksi,"UPDATE tb_rekaptunggakan SET jmltunggakan='$jmltunggakan',tghbulanini='$tghbulanini',jmlpembayaran='$jmlpembayaran', jmlkurang='$jmlkurang', totaltunggakan='$totaltunggakan' where kodewilayah='$kodewilayah'" );
header('location: ../index.php?page=rekap-pembayaran');
?>