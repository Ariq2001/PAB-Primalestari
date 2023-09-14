<?php
session_start();
include('koneksi.php');

$username =$_POST['username'];
$password =$_POST['password'];           

$query = mysqli_query($koneksi,"SELECT * FROM tb_user WHERE username='$username' AND password='$password'");
if(mysqli_num_rows($query)==1){
        header('location: ../app/index.php?page=dashboard');
        $user = mysqli_fetch_array($query);
        $_SESSION['nama'] = $user['nama'];
        $_SESSION['level'] = $user['level'];
}
else if($username == '' || $password ==''){
        header('location:../login.php?error=2');                        
}
else{
        header('location:../login.php?error=1');
}

    
?>