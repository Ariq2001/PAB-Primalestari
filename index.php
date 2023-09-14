<!DOCTYPE html>
<html lang="en">
  
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>PAB Prima Lestari</title>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
	<link href="image/brand-logo.png" rel="shortcut icon">
</head>

<body>
	<!-- loader -->
	<div class="bg-body">
	<div class="bg-loader">
		<div class="loader"></div>
	</div>
	<!-- header -->
	<div class="medsos">
		<div class="container">
			<ul>
				<li><a href="https://goo.gl/maps/oM9hAAeirr8jxqTk6" target="_blank" ><i class="fa fa-map fa-2x" title="lihat lokasi"></i></a></li>
				<li><a href="https://wa.me/6282136199239" target="_blank"><i class="fab fa-whatsapp fa-2x" title="hubungi admin"></i></a>
			</ul>
		</div>
	</div>
	
	<header>
		<div class="container">
			<h1 style="color: black;">PAB PRIMA LESTARI</h1>
			<ul>
				<li class="active"><a href="index.php">HOME</a></li>
				<li><a href="sosialisasi.php">Sosialisasi Pelanggan</a></li>
				<li><a href="login.php">LOGIN</a></li>
				
			</ul>
		</div>
	</header>

	<!-- banner -->
	<section class="banner">
	</section>

	<!-- about -->
	<section class="about">
		<div class="container">
			<h3>KANTOR PELAYANAN</h3>
			<p>Lokasi kantor pelayanan PAB PRIMA LESTARI saat ini berada di Perumahan Korpri Tugurejo Gang A9 No. 45 Kelurahan Tugurejo. Bentuk pelayanan berupa loket pembayaran, komplain dan keluhan pengguna serta hal lain yang terkait PAB PRIMA LESTARI<br> Waktu Oprasional : 
			<br>	Senin - Jumat pukul 08.00 - 16.00 WIB
			<br>	Sabtu pukul 08.00 - 13.00 WIB
			<br>	Tanggal merah libur</p>
		</div>
		<br></br>
		<div class="mapouter">
			<div class="gmap_canvas"><iframe src="https://maps.google.com/maps?q=inti%20ahsan%20teknologi%20semarang&amp;t=&amp;z=11&amp;ie=UTF8&amp;iwloc=&amp;output=embed" id="gmap_canvas" frameborder="0" scrolling="no" style="width: 800px; height: 400px; position: relative; text-align: center;">
			</iframe><a href="https://fnftest.net" style= "display:none;">fnf test</a><a href="https://www.jixplay.com/guides/" style="display:none">game guide</a><a href="https://fnfmod.net" style="display:none">fnf mod</a><style>.mapouter{position:relative;text-align:right;height:400px;width:800px;}</style><style>.gmap_canvas{overflow:hidden;background:none!important;height:400px;width:800px;}</style>
			</div>
		</div>
	</section>
      <hr></hr>
	<!-- service -->
	<section class="service">
		<div class="container">
			<h3>CONTACT INFO</h3>
			<div class="box">
				<div class="col-4">
					<h4>Address</h4>
					<p>Jl. Tugurejo A/9 No.45, Tugurejo, Kec. Tugu, Kota Semarang, Jawa Tengah 50182</p>
				</div>
				<div class="col-4">
					<h4>Email</h4>
					<p>pab.tugurejo@gmail.com</p>
				</div>
				<div class="col-4">
					<h4>Telp.</h4>
					<p>082242278049</p>
				</div>
				<div class="col-4">
					<h4>Hp</h4>
					<p>082242278049</p>
				</div>
			</div>			
			<!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.6900571309807!2d106.80475321430978!3d-6.172237062202331!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f67cae96f361%3A0x403c9461afd06e19!2sJl.%20Petojo%20Vij%20VI%2C%20RW.6%2C%20Cideng%2C%20Kecamatan%20Gambir%2C%20Kota%20Jakarta%20Pusat%2C%20Daerah%20Khusus%20Ibukota%20Jakarta%2010150!5e0!3m2!1sid!2sid!4v1588930605432!5m2!1sid!2sid" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe> -->
		</div>
	</section>

	<!-- footer -->
	<footer>
		<div class="container">
			<small>Copyright &copy; 2022 - INATEK. All Rights Reserved.</small>
		</div>
	</footer>


	</div>
</body>

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
		height: 60vh;
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
		font-weight: bold;
		padding:20px 0;
		color: #343a40;
		margin-bottom: 25px;
	}
	.about,
	.service {
		padding-bottom: 100px;
	}
	.about p {
		color: #000;
		word-spacing: 2px;
		line-height: 25px;
		margin-bottom: 20px;
		text-align: center;
		font-size: 16px;
	}
	.service {
		background-color: white;
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
	.login-body{
		height: 100vh;
		background-image:linear-gradient(#fff, #17a2b8);
		background-size: cover;
		background-position: center;
		background-repeat: no-repeat;    
	}
	.login-bg{
		position: absolute;
		top: 25%;
		left: 180px;
		height: 912.24;
		width: 740;
	}
	.login-top{
		text-align: center;
		position: absolute;
		top: 10%;
		left: 55%;
		height: 55px;
		width: 645px;
	}
	.login-title{
		text-align: left;
		color: #fafafa;
		margin-bottom: 30px;
		text-transform: uppercase;
		border-bottom: 4px solid #343a40;
	}
	.login-form{
		position: absolute;
		transform: translate(-50%,-50%);
		padding: 20px 25px;
		top: 67%;
		left: 73%;
		width: 405px;
		height: 470px;
		background-color: #6c757d;
		box-shadow: 0 0 10px rgba(255,255,255,.3);
	}
	.login-input{
		width: 400px;
		height: 50px;
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
	.mapouter{
		display: block;
		margin-left: auto;
		margin-right: auto;
		width: 50%;
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