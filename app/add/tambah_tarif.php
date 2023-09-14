<?php
session_start();
include('../../conf/koneksi.php');
$kodetarif         = $_GET['kodetarif'];
$bataspakai1       = $_GET['bataspakai1'];
$bataspakai2       = $_GET['bataspakai2'];
$tarif              = $_GET['tarif'];

$query = mysqli_query($koneksi,"INSERT INTO tb_tarif (kodetarif,bataspakai1,bataspakai2,tarif) VALUES ('$kodetarif','$bataspakai1','$bataspakai2','$tarif')" );
header('location: ../index.php?page=data-tarif');
?>