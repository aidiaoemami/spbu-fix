<?php 
  include 'koneksi.php';
  session_start();
  if($_SESSION['status']!="login"){
    header('Location: login.php');
  }


$id = $_SESSION["id"];
$query1 = "SELECT * FROM pelanggan WHERE id_pelanggan = '$id'";
$result1 = mysqli_query($sql,$query1);
$row = mysqli_fetch_assoc($result1);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Categories</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Sublime project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="styles/categories.css">
<link rel="stylesheet" type="text/css" href="styles/categories_responsive.css">
</head>
<body>

<div class="super_container">

	<!-- Header -->

	<?php include 'header.php'?>


		
	<!-- Product -->
	<div class="products">
		<center>
			<br>
			<br>
			<br>
			<h2><strong>PRODUK SIPBO</strong></h2>
			<br>
		</center>
		
		<div class="container">
			<div class="row">
				<div class="col">
					
					<div class="product_grid">

						<?php $ambil = $sql->query("SELECT * FROM produk"); ?>
						<?php while($perproduk = $ambil->fetch_assoc()){ ?>

						<!-- Product -->
						<div class="product">
							<div class="product_image"><img src="images/<?php echo $perproduk['foto_produk']; ?>" alt=""></div>
							<div class="product_extra product_new"><a href="categories.php"></a></div>
							<div class="product_content">
								<div class="product_title"><a href="product.php?id=<?php echo $perproduk['id_produk']; ?>"><?php echo $perproduk['nama_produk']; ?></a></div>
								<div class="product_price">Rp. <?php echo number_format($perproduk['harga_produk']); ?>/liter</div>
							</div>
						</div>
						<?php } ?>


						<!-- Product -->
						
					</div>
						
				</div>
			</div>
		</div>
	</div>
	

	<!-- Footer -->
	<?php
		include 'footer.php';
	?>
	
</div>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/greensock/TweenMax.min.js"></script>
<script src="plugins/greensock/TimelineMax.min.js"></script>
<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="plugins/greensock/animation.gsap.min.js"></script>
<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/Isotope/isotope.pkgd.min.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="js/categories.js"></script>
</body>
</html>