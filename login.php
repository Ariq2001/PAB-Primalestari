<!DOCTYPE html>
<html lang="en">
  
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Log in</title>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
	<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
	<link href="image/brand-logo.png" rel="shortcut icon">
  

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="app/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="app/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="app/dist/css/adminlte.min.css">
   <!-- SweetAlert2 -->
   <link rel="stylesheet" href="app/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css" />
   <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>

<body>
<div class="bg-body">
	<!-- header -->
	<div class="medsos">
	<div class="container">
			<ul >
				<li><a href="https://goo.gl/maps/oM9hAAeirr8jxqTk6" target="_blank"><i class="fa fa-map fa-2x"></i></a></li>
				<li><a href="https://wa.me/6282242278049" target="_blank"><i class="fab fa-whatsapp fa-2x"></i></a>
			</ul>
		</div>
	</div>
	<header>
		<div class="container">
			<h1 style="color: black;">PAB PRIMA LESTARI</h1>
			<ul>
				<li><a href="index.php">HOME</a></li>
				<li><a href="sosialisasi.php">Sosialisasi Pelanggan</a></li>
				<li class="active"><a href="login.php">LOGIN</a></li>
			</ul>
		</div>
	</header>

	<!-- banner -->
	<section class="banner">
	</section>
    <!-- <div class="bg_img" style="top: 50%; left: 42%; height: 900px;">
    <img src="image/brand-logo.png" alt="bg-login" width="300" height="350";><br>
    </div> -->
    <div class="login-box" style="top: 40%; right: 35%;">      
      <!-- /.login-logo -->
      <div class="card1">
        <div class="card-body login-card-body">
          <p class="login-box-msg">Silahkan Login</p>

          <form action="conf/autentikasi.php" method="post">
            <div class="input-group mb-3">
              <input type="text" class="form-control" placeholder="username" name='username'>
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-user"></span>
                </div>
              </div>
            </div>
            <div class="input-group mb-3">
              <input type="password" class="form-control" placeholder="Password" name='password'>
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-lock"></span>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-4">
                <button type="submit" class="btn btn-secondary btn-block">LogIn</button>
              </div>
              <!-- /.col -->
            </div>
          </form>

        
        </div>
        <!-- /.login-card-body -->
      </div>
    </div>
    <!-- /.login-box -->

    <!-- SweetAlert2 -->
    <script src="app/plugins/sweetalert2/sweetalert2.min.js"></script>
    <!-- jQuery -->
    <script src="app/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="app/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="app/dist/js/adminlte.min.js"></script>
</body>
<footer>
		<div class="container">
			<small>Copyright &copy; 2022 - INATEK. All Rights Reserved.</small>
		</div>
	</footer>
<?php
if(isset($_GET['error'])){
  $x =($_GET['error']);
  if($x==1){
    echo"
    <script>
    var Toast = Swal.mixin({
      toast: true,
      position: 'top',
      showConfirmButton: false,
      timer: 2500,
    });
    Toast.fire({
      icon: 'error',
      title: 'Login gagal, Silahkan Masukkan Username dan Password yang benar!',
    })
    </script>";
  }

  else if($x==2){
    echo"
    <script>
    var Toast = Swal.mixin({
      toast: true,
      position: 'top',
      showConfirmButton: false,
      timer: 2000,
    });
    Toast.fire({
      icon: 'warning',
      title: 'Masukan Username & Password!',
    })
    </script>";
  }
  else{
    echo'';
  }
}
?>

</div>
</html>

<style>
	* {
	padding:0;
	margin:0;
	font-family: sans-serif;
}
a {
	color: inherit;
	text-decoration: none;
}
.medsos {
	padding:5px 0;
	background-color: #343a40;
}
.medsos ul li {
	display: inline-block;
	color: #fff;
	margin-right: 30px;
    
}
.container {
	width:80%;
	margin:0 auto;
}
.container:after {
	content:'';
	display: block;
	clear: both;
}
header h1 {
	float: left;
	padding:15px 0;
	color: #14818f;
}
header ul {
	float: right;

}
header ul li {
	display: inline-block;
}
header ul li a {
	padding:25px 20px;
	display: inline-block;
}
header ul li a:hover {
	background-color: #343a40;
	color: #fff;
}
.active {
	background-color: #343a40;
	color: #fff;
}
.banner {
	height: 80vh;
	background-image: url('image/bg_web.png');
	background-size: cover;
	position: relative;
	display: flex;
	justify-content: center;
	align-items: center;
}
.banner:after {
	content:'';
	display: block;
	position: absolute;
	top: 0;
	left: 0;
	right: 0;
	bottom: 0;
	
}
.banner h2 {
	color: #fff;
	z-index: 1;
	padding: 20px 25px;
	border:3px solid #fff;
}
section {
	padding:50px 0;
}
section h3 {
	text-align: center;
	padding:20px 0;
	color: #343a40;
	margin-bottom: 25px;
}

.about p {
	color: #666;
	word-spacing: 2px;
	line-height: 25px;
	margin-bottom: 20px;
	text-align: center;
}
.box {
	color: #343a40;
}
.box:after {
	content: '';
	display: block;
	clear: both;
}
.box .col-4 {
	width:25%;
	padding:20px;
	box-sizing: border-box;
	text-align: center;
	float: left;
}
.icon {
	width:70px;
	height:70px;
	border:1px solid;
	border-radius: 50%;
	text-align: center;
	line-height: 70px;
	font-size: 20px;
	margin:0 auto;
}
.box .col-4 h4 {
	margin:20px 0;
}
footer {
	padding:30px 0;
	background-color: #333;
	color: #fff;
	text-align: center;
}
.label {
	background-color: #343a40;
	color: #fff;
}
body{
    height: 100vh;
    background-image: #fff;
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;    
}
::placeholder{
    font-size: large;
}
button{
    width: 100%;
    padding: 5px 0;
    border: none;
    background-color:#343a40;
    font-size: 18px;
    color: #fafafa;
}
@keyframes puterin {
	100% {
		transform: rotate(360deg);
	}
}
@media screen and (max-width: 768px){
	.container {
		width:90%;
	}
	header h1 {
		text-align: center;
		float: none;
	}
	header ul {
		text-align: center;
		float: none;
	}
	.box .col-4 {
		width:100%;
		float: none;
		margin-bottom: 20px;
	}
}
.bg-body{
	background-image:linear-gradient(#fff, #17a2b8);
}
</style>
