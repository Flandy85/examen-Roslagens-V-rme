<!-- <footer>
<div class="footer-container"> -->
	<!-- Footer Grid BOOTSTRAPGRID -->
<!-- <div class="row"> -->
	<!-- BOOTSTRAP COLUMN 1 -->
<!-- <div class="col-md-3">
	<div class="flex-item">
		<h1>Besöksadress</h1>
		<p>Rallarbacken 14</p>
		<p>184 30 Åkersberga</p>
		<p>Telefon nummer: 08-201201</p>
	</div>
</div> -->
	<!-- BOOTSTRAP COLUMN 2 -->
<!-- <div class="col-md-6">
	<div class="flex-item">
		<h1 class="title-partner">Sammarbetspartners</h1>
		<div class="flex-item-center">
			<img class="footer-img" src="img/elon-logo.png">
			<img class="footer-img" src="img/LG_Logo_svg.png">
			<img class="footer-img" src="img/Panasonic-Logo.png">
		</div>
		<div class="flex-item-center2">
			<img class="footer-img" src="img/airPatrol-logo.png">
			<img class="footer-img" src="img/tecknorth-logo.png">
			<img class="footer-img" src="img/Zave-logo.png">
		</div> -->
		<!-- <div><?php //wp_nav_menu(array('theme_location' => 'footer')); ?></div> -->
	<!-- </div>
</div> -->
	<!-- BOOTSTRAP COLUMN 3 -->
<!-- <div class="col-md-3">
	<div class="flex-item">
		<h1>Support</h1>
		<div><?php //wp_nav_menu(array('theme_location' => 'footer')); ?></div> -->
		<!-- <p>Kontakta Oss</p>
		<p>Att Tänka på inför besök</p> -->
<!-- 	</div>
</div>
</div>
</div>
</footer> -->
	<footer>
		<div class="footer-container">
			<div class="adress-container">
				<address>
					<h1>Besöksadress</h1>
					<p>Rallarbacken 14</p>
					<p>184 30 Åkersberga</p>
					<p>Telefonnummer:<a href="tel: 08-201201"> 08-201201</a></p>
				</address>
			</div>
			<div class="partners-container">
				<h1 class="title-partner">Sammarbetspartners</h1>
				<div class="partner-image-container">
					<img class="footer-img" src="<?php echo get_template_directory_uri(); ?>/src/images/elon-logo.png">
					<img class="footer-img" src="<?php echo get_template_directory_uri(); ?>/src/images/LG_Logo_svg.png">
					<img class="footer-img" src="<?php echo get_template_directory_uri(); ?>/src/images/Panasonic-Logo-footer.png">
				</div>
				<div class="partner-image-container">
					<img class="footer-img" src="<?php echo get_template_directory_uri(); ?>/src/images/airPatrol-logo.png">
					<img class="footer-img" src="<?php echo get_template_directory_uri(); ?>/src/images/tecknorth-logo.png">
					<img class="footer-img" src="<?php echo get_template_directory_uri(); ?>/src/images/Zave-logo.png">
				</div>	
			</div>
			<div class="meny-container">
				<h1>Support</h1>
				<!-- <p>Kontakta Oss</p>
				<p>Att Tänka på inför besök</p> -->
				<div><?php wp_nav_menu(array('theme_location' => 'footer')); ?></div>
			</div>
		</div>
	</footer>
<?php wp_footer(); ?>
</body>
</html>