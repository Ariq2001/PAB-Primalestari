<?php
session_start();
include('../../conf/koneksi.php');
$kodeuser      = $_GET['kodeuser'];
$nama          = $_GET['nama'];
$username      = $_GET['username'];
$password      = $_GET['password'];
$level         = $_GET['level'];

$query = mysqli_query($koneksi,"UPDATE tb_user SET nama='$nama',username='$username',password='$password',level='$level' WHERE kodeuser='$kodeuser'" );
header('location: ../index.php?page=data-user');
?>