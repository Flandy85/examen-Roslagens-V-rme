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
	<header>
		<div class="header-container">
			<a href="<?php echo home_url(); ?>">
				<img src="<?php echo get_template_directory_uri(); ?>/src/img/" class="logo" alt="Bild av företagets logo">
			</a>
			<nav class="navigation-menu">
				<div><?php wp_nav_menu(array('theme_location' => 'mainmenu')); ?></div>
			</nav><!-- navigation-menu -->
		</div><!-- header-container -->
	</header>

