<!DOCTYPE html>
<html>
<head>
	<title>Alif Microsite</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<!-- MOBILE VERSION RESPONSIVE -->
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=0" />

	<!-- ADD TO HOMESCREEN AND THEME COLOR -->
	<meta name="mobile-web-app-capable" content="yes" />
	<meta name="apple-mobile-web-app-title" content="alif">
	<meta name="apple-mobile-web-app-status-bar-style" content="black" />

	<!-- THEME COLOR FOR CHROME, FIREFOX AND OPERA -->
	<meta name="theme-color" content="#8CC851" />

	<!-- WINDOWS PHONE BROWSER -->
	<meta name="msapplication-navbutton-color" content="#8CC851">

	<!-- IOS, SAFARI BROWSER -->
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
	<meta name="HandheldFriendly" content="true" />

	<!-- PLUGIN SHARE FACEBOOK -->
	<meta property="og:url" content="http://alijarahindonesia.com/"/>
	<meta property="og:type" content="article"/>
	<meta property="og:title" content="Al Ijarah Indonesia Finance"/>
	<meta property="og:description" content="Al Ijarah Indonesia Finance"/>
	<meta property="og:image" content="URL IMAGE WEBSITE"/>

	<!-- PLUGIN SHARE TWITTER -->
	<meta name="twitter:card" content="summary"/>
	<meta name="twitter:site" content="Al Ijarah Indonesia Finance"/>
	<meta name="twitter:title" content="Al Ijarah Indonesia Finance">
	<meta name="twitter:description" content="Al Ijarah Indonesia Finance"/>
	<meta name="twitter:creator" content="PT. Apecsa Optima Solusi"/>
	<meta name="twitter:image:src" content="https://website.com/image250X250.png"/>
	<meta name="twitter:domain" content="alijarahindonesia.com"/>

	<!-- PLUGIN SHARE GOOGLE PLUS -->
	<meta itemprop="name" content="Al Ijarah Indonesia Finance"/>
	<meta itemprop="description" content="Al Ijarah Indonesia Finance"/>
	<meta itemprop="image" content="https://website.com/image250X250.png"/>

	<!-- SCOPE STLYESHEET -->
	<link rel="icon" type="image/ico" href="assets/images/favicon.png"/>
	<link rel="stylesheet" href="assets/css/main.css">

	<script src="assets/js/jquery-3.1.0.min.js"></script>
</head>
<body>
	<div class="site-wrapper">
		<?php include 'shareds/header.php'; ?>
		<section class="section promotion bg-white">
			<div class="container">
				<div class="row">
					<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
						<div class="image-1">
							<img src="assets/images/gallery/placehold_360_430.png" alt="">
						</div>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
						<div class="box-leave">
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<div class="image-2">
									<img src="assets/images/gallery/placehold_360_200.png" alt="">
								</div>
							</div>
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<div class="image-2">
									<img src="assets/images/gallery/placehold_360_200.png" alt="">
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
						<div class="box-leave">
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<div class="image-2">
									<img src="assets/images/gallery/placehold_360_200.png" alt="">
								</div>
							</div>
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<div class="image-2">
									<img src="assets/images/gallery/placehold_360_200.png" alt="">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="section selection-category bg-gray-light">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="box-category">
							<div class="header">
								<div class="title">
									Kategori produk terbaru
								</div>
							</div>
							<div class="body">
								<a class="list-category">
									<div class="icon">
										<i class="fa fa-car"></i>
									</div>
									<div class="name">
										Mobil
									</div>
								</a>
								<a class="list-category">
									<div class="icon">
										<i class="fa fa-motorcycle"></i>
									</div>
									<div class="name">
										Sepeda Motor
									</div>
								</a>
								<a class="list-category">
									<div class="icon">
										<i class="fa fa-bed"></i>
									</div>
									<div class="name">
										Furniture
									</div>
								</a>
								<a class="list-category">
									<div class="icon">
										<i class="fa fa-desktop"></i>
									</div>
									<div class="name">
										Elektronik
									</div>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="section bg-white">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						
					</div>
				</div>
			</div>
		</section>
		<section class="section latest-news-home bg-gray-light">
			<div class="container">
				<div class="row">
					<div class="col-md-4 col-sm-12 col-xs-12">
						<?php for ($i=0; $i < 2; $i++) { ?>
							<div class="list-news-1">
								<div class="image-big">
									<img src="assets/images/gallery/placehold_390_200.png" alt="">
								</div>
								<div class="content">
									<div class="title">
										Judul info terbaru
									</div>
									<div class="timestamp">
										21 jam yang lalu 
									</div>
								</div>
							</div>
						<?php } ?>
					</div>
					<div class="col-md-8 col-sm-12 col-xs-12">
						<div class="box-leave">
							<?php for ($i=0; $i < 8; $i++) { ?>
								<div class="col-md-6">
									<div class="list-news-2">
										<div class="col-md-5">
											<div class="image-small">
												<img src="assets/images/gallery/placehold_120_100.png" alt="">
											</div>
										</div>
										<div class="col-md-7">
											<div class="content">
												<div class="title">
													Judul info terbaru
												</div>
												<div class="timestamp">
													21 jam yang lalu 
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-12">
										<hr>
									</div>
								</div>
							<?php } ?>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="section newsletter">
			<div class="container">
				<div class="row">
					<div class="text-center">
						<h2>Berlangganan informasi terbaru dari kami?</h2>
						<div class="col-md-6 col-md-offset-3">
							<div class="input-group">
								<input type="text" class="form-control input-lg" placeholder="Masukan email anda disini...">
								<span class="input-group-btn">
									<button class="btn btn-lg btn-success" type="button">
										<i class="fa fa-send"></i>
										Kirim
									</button>
								</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<?php include 'shareds/footer.php'; ?>
	</div>
</body>

<!-- SCOPE JAVASCRIPT -->
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/jquery.scrolltofixed.js"></script>
<script src="assets/js/wow.min.js"></script>
<script src="assets/js/owl.carousel.js"></script>
<script src="assets/js/main.js"></script>
</html>