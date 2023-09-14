<?php
 
include('../../conf/koneksi.php');
$kodetarif  = $_GET['kodetarif'];

$query = mysqli_query($koneksi,"DELETE FROM tb_tarif WHERE `tarif`.`kodetarif` = '$kodetarif'");
header('location: ../index.php?page=data-tarif');
?>        