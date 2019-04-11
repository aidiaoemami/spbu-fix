<?php 
session_start();
 ?>

<?php include 'koneksi.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Halaman Verifikasi Kode</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Sublime project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="styles/responsive.css">
</head>
<body>


	<!-- Header -->

	<<?php include 'header.php'; ?>

	<div class="home">
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<form method ="post">
			<center>
				<div class="col-md-6">
					<div class = "input-group">
						<input type="text" class = "form-control" placeholder="Masukkan kode transaksi anda" name = "kode">
						<div class = "input-group-btn">
							<button class = "btn btn-primary" name = "verifikasi">Verifikasi Kode</button>
							<?php

							if (isset($_POST['verifikasi'])) {
							    $kode = $_POST['kode'];
							    // Getting submitted user data from database
							    
							    $query = "SELECT * FROM pembelian WHERE kode_transaksi='$kode'";
							    $result = mysqli_query($sql,$query);
							    $check = mysqli_num_rows($result);
							    if($check > 0) {

							        $row = mysqli_fetch_assoc($result);

							        echo "<script>alert('Pembelian Sukses');</script>";
							        ?>
							        <p>id pembelian : <?php echo $row["id_pembelian"];?></p>
									<p>nama pembeli : <?php echo $row["id_pelanggan"];?></p>
									<p>nama produk : <?php echo $row["id_produk"];?></p>
									<p>tanggal pembelian: <?php echo $row["tanggal_pembelian"];?></p>
									<p>total pembelian : <?php echo $row["total_pembelian"];?></p>
									<p>total liter : <?php echo $row["total_liter"];?></p>
						<?php
							    }
							 else
							    {
							        
							        echo "<script>alert('Maaf pembelian gagal, silahkan masukkan kode transaksi dengan benar ');</script>";
							    }
							}
							?>
						</div>
										
					</div>
					
			
				</div>
			</center>
			
		</form>
	</div>





	

	<!-- Footer -->
	
	<?php include 'footer.php'; ?>

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
<script src="js/custom.js"></script>
</body>
</html>