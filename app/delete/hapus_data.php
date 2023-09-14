<?php
 
include('../../conf/koneksi.php');
$kodeplgn  = $_GET['kodeplgn'];

$query = mysqli_query($koneksi,"DELETE FROM tb_dataplgn WHERE `tb_dataplgn`.`kodeplgn` = '$kodeplgn'");
header('location: ../index.php?page=data-pelanggan');
?>        