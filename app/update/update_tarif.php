<?php
session_start();
include('../../conf/koneksi.php');
$kodetarif       = $_GET['kodetarif'];
$bataspakai1     = $_GET['bataspakai1'];
$bataspakai2     = $_GET['bataspakai2'];
$tarif           = $_GET['tarif'];

$query = mysqli_query($koneksi,"UPDATE tb_tarif SET bataspakai1='$bataspakai1',bataspakai2='$bataspakai2',tarif='$tarif' WHERE kodetarif='$kodetarif'" );
header('location: ../index.php?page=data-tarif');
?>