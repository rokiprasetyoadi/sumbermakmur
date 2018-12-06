<!DOCTYPE html>
<html>
<head>
	<title> Sumber Makmur </title>
	<link rel="icon" type="image/png" href="gambar/logo2.png"/>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-grid.css">
	<script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
	<script type="text/javascript" src="bootstrap/js/jquery-3.2.1.js"></script>
	<script type="text/javascript" src="bootstrap/js/popper.min.js"></script>
	<script type="text/javascript" src="bootstrap/js/jquery-3.3.1.slim.min.js"></script>
	<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>

	<style>
	.container{
		width: 1000px;
		background-color: #F4F8EF;
		}

	.content{
		padding-top: 30px;
		}

	.foto{
		float: left;
		margin: 40px;
	}
	</style>
</head>
<body>
	<div class="container">
	<div class="header"> 
		<img class="mr-3" src="Gambar/logo1.png" alt="Generic placeholder image" height="130" width="308">
		
		<form class="form-inline my-2 my-lg-0" style="float: right; margin-top: 100px; padding-top: 50px; padding-right: 10px; ">
   			<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
    		<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    	</form>
	</div>
		    	<nav class="navbar navbar-expand-lg navbar navbar-light" style="background-color: #7CB238;">
        		<div class="navbar-nav">
		    	<a class="nav-item nav-link active" href="index.php"> Home </a>
	            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Katalog </a>
	              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
	                <a class="dropdown-item" href="katalog.php">Alat Pertanian</a>
	                  <a class="dropdown-item" href="katalog.php">Benih</a>
	                  <a class="dropdown-item" href="katalog.php">Bibit</a>
	                  <a class="dropdown-item" href="katalog.php">Pupuk</a>
	              </div>
	            <a class="nav-item nav-link" href="artikel.php"> Artikel </a>
		          <a class="nav-item nav-link" href="keranjang.php"> Keranjang </a>
		          <a class="nav-item nav-link" href="verifikasi.php"> Verifikasi </a>
		          <a class="nav-item nav-link" href="carapembayaran.php"> Cara Pembayaran </a>
		          <a class="nav-item nav-link" href="tentangkita.php"> Tentang Toko </a>
		        </div>
		        <div class="masuk">
		          <a class="btn btn-light" href="signin.php" role="button">Daftar</a>&nbsp;
		          <a class="btn btn-light" href="login.php" role="button">Masuk</a>
		         </div>
		        </nav>