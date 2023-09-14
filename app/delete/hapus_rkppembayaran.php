<?php
 
include('../../conf/koneksi.php');
$kodewilayah  = $_GET['kodewilayah'];

$query = mysqli_query($koneksi,"DELETE FROM tb_rkppembayaran WHERE `tb_rkppembayaran`.`kodewilayah` = '$kodewilayah'");
header('location: ../index.php?page=rekap-pemabayaran');
?>        s