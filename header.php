<?php 
  include 'koneksi.php';

$id = $_SESSION["id"];
$query1 = "SELECT * FROM pelanggan WHERE id_pelanggan = '$id'";
$result1 = mysqli_query($sql,$query1);
$row = mysqli_fetch_assoc($result1);

 
?>

<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="styles/responsive.css">

<header class="header">
		<div class="header_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="header_content d-flex flex-row align-items-center justify-content-start">
							<div class="logo"><a href="#">SIPBO</a></div>
							<nav class="main_nav">
								<ul>
									<li><a href="index.php">Home</a>
									<?php if (isset($_SESSION["status"])== 'login'): ?>
									<li><a href="isisaldo.php">Pengisian Saldo</a>
									<?php endif ?>
									<li><a href="categories.php">Pembelian</a>
										<?php if (isset($_SESSION["status"])== 'login'): ?>
									<li><a href="halamansimulasi.php">Verifikasi Pembelian</a>
										<li> <a href="logout.php">Logout</a></li>
									<?php else: ?>
										<li> <a href="login.php">Login</a></li>
										<li> <a href="register.php">Daftar</a></li>
									<?php endif ?>
									
								</ul>
							</nav>
							<div class="header_extra ml-auto">
								<div class="shopping_cart">
									<?php if (isset($_SESSION["status"])== 'login'){ ?>
									
									<a href="profil.php">
										<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
												 viewBox="0 0 489 489" style="enable-background:new 0 0 489 489;" xml:space="preserve">
											
										</svg>
										<div>
												<?php echo $row['nama_pelanggan']; ?>
											
										</div>
									</a>
									<?php
								}
									 ?>
								</div>
								<div class="hamburger"><i class="fa fa-bars" aria-hidden="true"></i></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	
		<!-- Search Panel -->
		<div class="search_panel trans_300">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="search_panel_content d-flex flex-row align-items-center justify-content-end">
							<form action="#">
								<input type="text" class="search_input" placeholder="Search" required="required">
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Social -->
		<div class="header_social">
			<ul>
				<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
			</ul>
		</div>
	</header>