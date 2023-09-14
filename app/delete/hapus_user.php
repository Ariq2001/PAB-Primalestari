<?php
 
include('../../conf/koneksi.php');
$kodeuser  = $_GET['kode_user'];

$query = mysqli_query($koneksi,"DELETE FROM tb_user WHERE `tb_user`.`kode_user` = '$kodeuser'");
header('location: ../index.php?page=data-user');
?>        