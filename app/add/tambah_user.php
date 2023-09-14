<?php
session_start();
include('../../conf/koneksi.php');
$kodeuser = $_GET['kode_user'];
$nama = $_GET['nama'];
$username = $_GET['username'];
$password  = $_GET['password'];
$level = $_GET['level'];

$query = mysqli_query($koneksi,"INSERT INTO tb_user (kode_user,nama,username,password,level) VALUES ('$kodeuser','$nama','$username','$password','$level')" );
header('location: ../index.php?page=data-user');
?>