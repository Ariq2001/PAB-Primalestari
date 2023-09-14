<?php
session_start();
include('../../conf/koneksi.php');
$kodeplgn   = $_GET['kodeplgn'];
$kodewilayah= $_GET['kodewilayah'];
$nama       = $_GET['nama'];
$rt         = $_GET['rt'];
$rw         = $_GET['rw'];
$dawis      = $_GET['dawis'];

$query = mysqli_query($koneksi,"INSERT INTO tb_dataplgn (kodeplgn,kodewilayah,nama,rt,rw,dawis) VALUES ('$kodeplgn','$kodewilayah','$nama','$rt','$rw','$dawis')" );
header('location: ../index.php?page=data-pelanggan');
?>