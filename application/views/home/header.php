<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php echo $contact->title;?></title>

	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="<?php echo base_url();?>assets/genius/css/owl.carousel.css">
	<link rel="stylesheet" href="<?php echo base_url('assets/admin/css/font-awesome.min.css')?>"/>
	<!-- <link rel="stylesheet" href="<?php// echo base_url('assets/genius/css/fontawesome-all.css')?>"> -->
	<link rel="stylesheet" href="<?php echo base_url();?>assets/genius/css/flaticon.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/genius/css/meanmenu.css">
	 <link rel="stylesheet" href="<?php echo base_url('assets/admin/css/bootstrap.min.css')?>">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/genius/css/video.min.css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/genius/css/lightbox.css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/genius/css/progess.css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/genius/css/style.css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/genius/css/responsive.css">
	
	
	
	<meta name="description" content="<?php echo $contact->deskripsi;?>">
    <meta name="keywords" content="<?php echo $contact->keywords;?>">
    <meta name="tag" content="<?php echo $contact->tag;?>">

	<link rel="stylesheet"  href="<?php echo base_url();?>assets/genius/css/colors/switch.css">
	<link href="<?php echo base_url();?>assets/genius/css/colors/color-2.css" rel="alternate stylesheet" type="text/css" title="color-2">
	<link href="<?php echo base_url();?>assets/genius/css/colors/color-3.css" rel="alternate stylesheet" type="text/css" title="color-3">
	<link href="<?php echo base_url();?>assets/genius/css/colors/color-4.css" rel="alternate stylesheet" type="text/css" title="color-4">
	<link href="<?php echo base_url();?>assets/genius/css/colors/color-5.css" rel="alternate stylesheet" type="text/css" title="color-5">
	<link href="<?php echo base_url();?>assets/genius/css/colors/color-6.css" rel="alternate stylesheet" type="text/css" title="color-6">
	<link href="<?php echo base_url();?>assets/genius/css/colors/color-7.css" rel="alternate stylesheet" type="text/css" title="color-7">
	<link href="<?php echo base_url();?>assets/genius/css/colors/color-8.css" rel="alternate stylesheet" type="text/css" title="color-8">
	<link href="<?php echo base_url();?>assets/genius/css/colors/color-9.css" rel="alternate stylesheet" type="text/css" title="color-9">

</head>

<body>

	<div id="preloader"></div>


		<div id="switch-color" class="color-switcher">
		<div class="open"><i class="fas fa-cog fa-spin"></i></div>
		<h4>COLOR OPTION</h4>
		<ul>
			<li><a class="color-2" onclick="setActiveStyleSheet('color-2'); return true;" href="#!"><i class="fas fa-circle"></i></a> </li>
			<li><a class="color-3" onclick="setActiveStyleSheet('color-3'); return true;" href="#!"><i class="fas fa-circle"></i></a> </li>
			<li><a class="color-4" onclick="setActiveStyleSheet('color-4'); return true;" href="#!"><i class="fas fa-circle"></i></a> </li>
			<li><a class="color-5" onclick="setActiveStyleSheet('color-5'); return true;" href="#!"><i class="fas fa-circle"></i></a> </li>
			<li><a class="color-6" onclick="setActiveStyleSheet('color-6'); return true;" href="#!"><i class="fas fa-circle"></i></a> </li>
			<li><a class="color-7" onclick="setActiveStyleSheet('color-7'); return true;" href="#!"><i class="fas fa-circle"></i></a> </li>
			<li><a class="color-8" onclick="setActiveStyleSheet('color-8'); return true;" href="#!"><i class="fas fa-circle"></i></a> </li>
			<li><a class="color-9" onclick="setActiveStyleSheet('color-9'); return true;" href="#!"><i class="fas fa-circle"></i></a> </li>
		</ul>
		<button class="switcher-light">WIDE </button>
		<button class="switcher-dark">BOX </button>
		<a class="rtl-v" href="RTL_Genius/index.html">RTL </a>
	</div>


	<!-- Start of Header section
		============================================= -->
		
		<header class="header_3" style="background-color: #000000">
			<div class="container">
				<div>
					<div class="navbar-header float-left">
						<a class="navbar-brand text-uppercase" href="<?php echo base_url();?>">
							<img src="<?php echo base_url('assets/img/'.$contact->logo);?>" alt="logo">
						</a>
					</div><!-- /.navbar-header -->
					<div class="header-info ul-li">
						<ul>
							<li>
								<div class="mail-phone">
									<div class="info-icon">
										<i class="text-gradiant fa fa-envelope"></i>
									</div>
									<div class="info-content">
										<span class="info-id"><?php echo $contact->email;?></span>
										<span class="info-text">Email</span>
									</div>
								</div>
							</li>
							<li>
								<div class="mail-phone">
									<div class="info-icon">
										<i class="text-gradiant fa fa-phone-square"></i>
									</div>
									<div class="info-content">
										<span class="info-id"><?php echo $contact->phone;?></span>
										<span class="info-text">Hubungi Kami</span>
									</div>
								</div>
							</li>
							<li>
								<a href="<?php echo $contact->facebook;?>" target="_blank">
									<div class="info-social">
										<i class="fa fa-facebook-f"></i>
									</div>
									<span class="info-text">Facebook</span>
								</a>
							</li>
							<li>
								<a href="<?php echo $contact->twitter;?>" target="_blank">
									<div class="info-social">
										<i class="fa fa-twitter"></i>
									</div>
									<span class="info-text">Twitter</span>
								</a>
							</li>
						</ul>
					</div>

					<div class="nav-menu-4">
						<div class="login-cart-lang float-right ul-li">
							<ul class="search_cart">
								
								<li>
									<div  class="cart_search">
										<button type="button" class="toggle-overlay search-btn">
											<i class="fa fa-search"></i>
										</button>
									</div>
									<div class="search-body">
										<div class="search-form">
											<form action="<?php echo base_url('cari-product');?>" method="post">
												<input class="search-input" type="search" name="cari" placeholder="Search Here">
												<div class="outer-close toggle-overlay">
													<input type="submit" name="submit" value="cari" class="btn btn-info">
													<button type="button" class="search-close">
														<i class="fa fa-times"></i>
													</button>
												</div>
											</form>
										</div>
									</div>
								</li>
							</ul>
							<ul class="lang-login">
								<li>
									<div class="login">
										<a href="<?php echo base_url('home/login')?>">LogIn</a>
									</div>
									
								</li>
								
							</ul>
						</div>
						<!-- Collect the nav links, forms, and other content for toggling -->
						<nav class="navbar-menu float-left">
							<div class="nav-menu ul-li">
								<ul class="quick-menu">
									<ul>
										<li class="menu-item-has-children ul-li-block">
											<a href="<?php echo base_url();?>">Product</a>
										</li>
										<li><a href="<?php echo base_url('cara-order');?>">Cara Order</a></li>
										<li><a href="#contact">Kontak Kami</a></li>
									</ul>
								</ul>
							</div>
						</nav>
					</div>
				</div>
			</div>
		</header>
		<div class="altranative-header ul-li-block">
			<div id="menu-container">
				<div class="menu-wrapper">
					<div class="row">
						<button type="button" class="alt-menu-btn float-left">
							<span class="hamburger-menu"></span>
						</button>
						<div class="logo-area">
							<a href="<?php echo base_url();?>">
								<img src="<?php echo base_url('assets/img/'.$contact->logo);?>" alt="Logo_not_found">
							</a>
						</div>
					</div>
				</div>
				<ul class="menu-list accordion" style="left: -100%;">
					<li class="alt-search">
						<form action="<?php echo base_url('cari-product');?>" method="post">
							<input type="search" placeholder="search" name="cari">
						</form>
					</li>
					<li class="card">
						<a class="menu-link" href="<?php echo base_url();?>">Product</a>
					</li>
					<li class="card">
						<a class="menu-link" href="<?php echo base_url('cara-order');?>">Cara Order</a>
					</li>
					<li class="card">
						<a class="menu-link" href="#contact">Kontak Kami</a>
					</li>
				</ul>				
			</div>
		</div>
<style type="text/css">
	.breadcrumb-section-11 {
    background-image: url(<?php echo base_url('assets/img/'.$contact->img_bg);?>);
    padding-bottom: 355px;
}
</style>

<!-- Start of breadcrumb section
	============================================= -->
	<section id="breadcrumb" class="breadcrumb-section-11 relative-position backgroud-style">
		<div class="blakish-overlay"></div>
		<div class="container">
			
		</div>
	</section>
<!-- End of breadcrumb section
	============================================= -->


