<?php
session_start();
include('../../conf/koneksi.php');
$kodeplgn      = $_GET['kodeplgn'];
$kodewilayah    = $_GET['kodewilayah'];
$nama           = $_GET['nama'];
$rt             = $_GET['rt'];
$rw             = $_GET['rw'];
$dawis          = $_GET['dawis'];

$query = mysqli_query($koneksi,"UPDATE tb_dataplgn SET kodeplgn='$kodeplgn',kodewilayah='$kodewilayah',nama='$nama',rt='$rt',rw='$rw', dawis='$dawis' where kodeplgn='$kodeplgn'" );
header('location: ../index.php?page=data-pelanggan');
?>