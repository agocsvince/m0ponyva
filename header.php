<!DOCTYPE html>
<html lang="hu" class="scroll-smooth">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />

	<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
	<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
	<?php wp_head(); ?>
	<title><?php if(is_front_page() || is_home()){ echo get_bloginfo('name'); } else{ echo wp_title(''); echo ' | '; echo get_bloginfo('name'); }?></title>
	<link rel="shortcut icon" href="<?php bloginfo('template_url') ?>/assets/images/favicon.png" type="image/x-icon" />
	<link rel="stylesheet" href="<?php bloginfo('template_url') ?>/assets/css/animate.css" />
	<link rel="stylesheet" href="<?php bloginfo('template_url') ?>/assets/css/tailwind.css" />

	<meta name="description" content="Ponyvakészítés - Kamionok, teherautók, utánfutók, terasz, kerthelyiségek, kocsibeállók, tárolók, hajók, árnyékolók ponyvázása és egyedi ponyva készítés.">

	<!-- ==== WOW JS ==== -->
	<script src="<?php bloginfo('template_url') ?>/assets/js/wow.min.js"></script>
	<script>new WOW().init();</script>
</head>

<body <?php body_class(); ?>>

	
<!-- ====== Navbar Section Start -->
  <div class="ud-header bg-transparent absolute top-0 left-0 z-40 w-full flex items-center">
	<div class="container">
	  <div class="flex -mx-4 items-center justify-between relative">
		<div class="px-4 w-60 max-w-full">
		  <a href="#home" class="navbar-logo w-full block py-5">
			<img src="<?php bloginfo('template_url') ?>/assets/images/logo/logo-white.png" alt="logo" class="w-full header-logo" />
		  </a>
		</div>
		<div class="flex px-4 justify-between items-center w-full">
		  <div>
			<button id="navbarToggler" class=" block absolute right-4 top-1/2 -translate-y-1/2 lg:hidden focus:ring-2 ring-primary px-3 py-[6px] rounded-lg">
			  <span class="relative w-[30px] h-[2px] my-[6px] block bg-white"></span>
			  <span class="relative w-[30px] h-[2px] my-[6px] block bg-white"></span>
			  <span class="relative w-[30px] h-[2px] my-[6px] block bg-white"></span>
			</button>
			
			<?php include get_theme_file_path( '/includes/header-navbar.php' ); ?>

		  </div>
		  <div class="sm:flex justify-end hidden pr-16 lg:pr-0">
			<a href="https://www.facebook.com/Ponyva.Reklam.Sporteszkoz.Keszites/" target="blank" class="text-base font-medium text-white hover:opacity-70 py-3 px-7 loginBtn">
			  Facebook
			</a>
			<a href="tel:+36706683014" class=" text-base font-medium text-white bg-white bg-opacity-20 rounded-lg py-3 px-6 hover:bg-opacity-100 hover:text-dark signUpBtn duration-300 ease-in-out">
			  Hívjon most
			</a>
		  </div>
		</div>
	  </div>
	</div>
  </div>
  <!-- ====== Navbar Section End -->