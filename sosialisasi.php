<!DOCTYPE html>
<html lang="en">
  
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>PAB-sosialisai pelanggan</title>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
	<link href="image/brand-logo.png" rel="shortcut icon">
</head>
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
	height: auto;
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
.about,
.service {
	padding-bottom: 100px;
}
.about p {
	color: #666;
	word-spacing: 2px;
	line-height: 25px;
	margin-bottom: 20px;
	text-align: center;
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
    background-image:linear-gradient(#E1EEEE, #8FCFCF);
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
  left: 25%;
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
</style>
<body>
	<!-- loader -->
	<div class="bg-loader">
		<div class="loader"></div>
	</div>

	<!-- header -->
	<div class="medsos">
		<div class="container">
			<ul>
				<li><a href="https://goo.gl/maps/oM9hAAeirr8jxqTk6" target="_blank" class="responsive"><i class="fa fa-map fa-2x"></i></a></li>
				<li><a href="https://wa.me/6282242278049" target="_blank" class="responsive"><i class="fab fa-whatsapp fa-2x"></i></a>
			</ul>
		</div>
	</div>
	<header>
		<div class="container">
			<h1 style="color: black;">PAB PRIMA LESTARI</h1>
			<ul>
				<li><a href="index.php">HOME</a></li>
				<li  class="active"><a href="sosialisasi.php">Sosialisasi Pelanggan</a></li>
				<li><a href="login.php">LOGIN</a></li>
				
			</ul>
		</div>
	</header>

	<!-- banner -->
	<section class="banner">
	

	<!-- about -->
	<img src="image/1.png" alt="Sosialisasi Pelanggan P.1" width="500" height="600" class="responsive">
	<img src="image/2.png" alt="Sosialisasi Pelanggan P.2" width="500" height="600" class="responsive">

    </section>
	<!-- footer -->
	<footer>
		<div class="container">
			<small>Copyright &copy; 2022 - INATEK. All Rights Reserved.</small>
		</div>
	</footer>

	</script>
</body>




</html>
