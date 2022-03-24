<!DOCTYPE html>
<html>
<head>
<title><?php echo $judul; ?></title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Arwana Shop" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="<?php echo base_url(); ?>komponen/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="<?php echo base_url(); ?>komponen/css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- font-awesome icons -->
<link href="<?php echo base_url(); ?>komponen/css/font-awesome.css" rel="stylesheet">
<link rel="stylesheet" href="<?php echo base_url(); ?>komponen/backend/assets/css/animasi.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>komponen/css/gaya2.css">
<!-- //font-awesome icons -->
<!-- js -->
<script src="js/jquery-1.11.1.min.js"></script>
<!-- //js -->
<link href='//fonts.googleapis.com/css?family=Raleway:400,100,100italic,200,200italic,300,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="<?php echo base_url(); ?>komponen/js/move-top.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>komponen/js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<link rel="icon" href="<?php echo base_url(); ?>komponen/images/arwanalg.png" />
<!-- start-smoth-scrolling -->
</head>
	
<body>
<!-- header -->
	<div class="agileits_header">
		<div class="container">
			<div class="w3l_offers">
				<p>
					Selamat datang di Arwana Store!
				</p>
			</div>
			<?php
			if($this->agent->is_mobile()){
			?>
				<div class="agile-login-mob">
				<?php
				if($this->session->userdata('masuk')){
					$p = $this->session->userdata('ses_id');
					$e = $this->db->query("SELECT * FROM pelanggan WHERE id_pelanggan='$p'")->row_array();
				?>
					<ul>
						<li><a href="<?php echo base_url('auth'); ?>"><?php echo $e['username']; ?></a></li>
						<li><a href="<?php echo base_url('auth/logout'); ?>">Keluar</a></li>
						<li>
							<a href="<?php echo base_url('cart'); ?>"><i class="fa fa-shopping-cart"></i></a>
							<span class="bulet"><?php echo $krjg; ?></span>
						</li>
					</ul>
				<?php }else{ ?>
					<ul>
						<li><a href="<?php echo base_url('auth'); ?>">Masuk/Buat Akun</a></li>
					</ul>
				<?php } ?>
				</div>

			<?php }else{ ?>
				<div class="agile-login">
				<?php
				if($this->session->userdata('masuk')){
					$p = $this->session->userdata('ses_id');
					$e = $this->db->query("SELECT * FROM pelanggan WHERE id_pelanggan='$p'")->row_array();
				?>
					<ul>
						<li><a href="<?php echo base_url('auth'); ?>"><?php echo $e['username']; ?></a></li>
						<li><a href="<?php echo base_url('auth/logout'); ?>">Keluar</a></li>
						<li>
							<a href="<?php echo base_url('cart'); ?>"><i class="fa fa-shopping-cart"></i></a>
							<span class="bulet"><?php echo $krjg; ?></span>
						</li>
					</ul>
				<?php }else{ ?>
					<ul>
						<li><a href="<?php echo base_url('auth'); ?>">Masuk/Buat Akun</a></li>
					</ul>
				<?php } ?>
				</div>
			<?php } ?>
			<div class="clearfix"> </div>
		</div>
	</div>

	<div class="logo_products">
		<div class="container">
		<div class="w3ls_logo_products_left1">
				<ul class="phone_email">
					<li><i class="fa fa-phone" aria-hidden="true"></i>Order online: +6285751351752</li>
					
				</ul>
			</div>
			<div class="w3ls_logo_products_left">
				<h1><a href="<?php echo base_url(); ?>">
				<img src="<?php echo base_url(); ?>komponen/images/arwanalogo2.png" width="100%" />
				</a></h1>
			</div>
		<div class="w3l_search">
			<form action="#" method="post">
				<input type="search" name="Search" placeholder="Search for a Product..." required="">
				<button type="submit" class="btn btn-default search" aria-label="Left Align">
					<i class="fa fa-search" aria-hidden="true"> </i>
				</button>
				<div class="clearfix"></div>
			</form>
		</div>
			
			<div class="clearfix"> </div>
		</div>
	</div>
<!-- //header -->
<!-- navigation -->
	<div class="navigation-agileits">
		<div class="container">
			<nav class="navbar navbar-default">
							<!-- Brand and toggle get grouped for better mobile display -->
							<div class="navbar-header nav_2">
								<button type="button" class="navbar-toggle collapsed navbar-toggle1" role="button" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
							</div> 
							<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
								<?php
								if($this->session->userdata('masuk') == TRUE){
								?>
								<ul class="nav navbar-nav">
									<li class="active"><a href="<?php echo base_url(); ?>" class="act">Beranda</a></li>	
									<!-- Mega Menu -->
									<!--
									<li class="dropdown">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown">Household<b class="caret"></b></a>
										<ul class="dropdown-menu multi-column columns-3">
											<div class="row">
												<div class="multi-gd-img">
													<ul class="multi-column-dropdown">
														<h6>All Household</h6>
														<li><a href="household.html">Cookware</a></li>
														<li><a href="household.html">Dust Pans</a></li>
														<li><a href="household.html">Scrubbers</a></li>
														<li><a href="household.html">Dust Cloth</a></li>
														<li><a href="household.html"> Mops </a></li>
														<li><a href="household.html">Kitchenware</a></li>
													</ul>
												</div>
												
												
											</div>
										</ul>
									</li>
									-->
									<li><a href="<?php echo base_url('products'); ?>">Produk</a></li>
									<li><a href="<?php echo base_url('order'); ?>">Pesanan Saya</a></li>
									<li><a href="<?php echo base_url('contact'); ?>">Kontak Kami</a></li>
								</ul>
								<?php }else{ ?>
								<ul class="nav navbar-nav">
									<li class="active"><a href="<?php echo base_url(); ?>" class="act">Beranda</a></li>	
									<!-- Mega Menu -->
									<!--
									<li class="dropdown">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown">Household<b class="caret"></b></a>
										<ul class="dropdown-menu multi-column columns-3">
											<div class="row">
												<div class="multi-gd-img">
													<ul class="multi-column-dropdown">
														<h6>All Household</h6>
														<li><a href="household.html">Cookware</a></li>
														<li><a href="household.html">Dust Pans</a></li>
														<li><a href="household.html">Scrubbers</a></li>
														<li><a href="household.html">Dust Cloth</a></li>
														<li><a href="household.html"> Mops </a></li>
														<li><a href="household.html">Kitchenware</a></li>
													</ul>
												</div>
												
												
											</div>
										</ul>
									</li>
									-->
									<li><a href="<?php echo base_url('products'); ?>">Produk</a></li>
									<li><a href="<?php echo base_url('contact'); ?>">Kontak Kami</a></li>
								</ul>
								<?php } ?>
							</div>
							</nav>
			</div>
		</div>
		
<!-- //navigation -->