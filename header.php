<!DOCTYPE html>
<html lang="sv">
<head>
	<meta charset="UTF-8">
  	<meta name="description" content="Roslagens Värme & Fastighetsteknik">
  	<meta name="keywords" content="HTML,CSS,XML,JavaScript">
  	<meta name="author" content="Anders Gustavsson, Johan Walberg">
  	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Roslagens Värme & Fastighetsteknik</title>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?> >
	<header class="nav-down">
		<div class="top-header-container">
			<img src="<?php echo get_template_directory_uri(); ?>/src/images/Incert-loga.png" class="top-header-logotype" alt="Bild av företaget Incert loggo">
			<img src="<?php echo get_template_directory_uri(); ?>/src/images/Panapropartners-2.png" class="top-header-logotype" alt="Bild av företaget Panasonic Pro Partners loggo">
			<img src="<?php echo get_template_directory_uri(); ?>/src/images/LG-logo.png" class="top-header-logotype" alt="Bild av företaget LG Business Partner loggo">
			
		</div>
		<div class="header-container">
			<div class="inner-header-container">
				<a href="<?php echo home_url(); ?>">
					<img src="<?php echo get_template_directory_uri(); ?>/src/images/rvftloga.png" class="logotype" alt="Bild av företagets logo med texten Roslagens Värme & Fastighetsteknik">
				</a>
				<nav class="navigation-menu">
					<div><?php wp_nav_menu(array('theme_location' => 'mainmenu')); ?></div>
				</nav><!-- navigation-menu -->
			</div>
		</div><!-- header-container -->
	</header>

