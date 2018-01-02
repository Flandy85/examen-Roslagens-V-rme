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
					<a href="http://www.elon.se/" rel="noopener" target="blank"><img class="footer-img" src="<?php echo get_template_directory_uri(); ?>/src/images/elon-logo.png" alt="Bild på företaget ELON:s loggo "></a>
					<a href="http://www.lg.com/se/kyla-varmepumpar" rel="noopener" target="blank"><img class="footer-img" src="<?php echo get_template_directory_uri(); ?>/src/images/LG_Logo_svg.png" alt="Bild på företaget LG:s loggo "></a>
					<a href="https://www.aircon.panasonic.eu/SE_sv/" rel="noopener" target="blank"><img class="footer-img" src="<?php echo get_template_directory_uri(); ?>/src/images/Panasonic-Logo-footer.png" alt="Bild på företaget Panasonic:s loggo"></a>
				</div>
				<div class="partner-image-container">
					<a href="https://www.airpatrol.eu/" rel="noopener" target="blank"><img class="footer-img" src="<?php echo get_template_directory_uri(); ?>/src/images/airPatrol-logo.png" alt="Bild på företaget airPatrol:s loggo"></a>
					<a href="https://tnenergi.se/" rel="noopener" target="blank"><img class="footer-img" src="<?php echo get_template_directory_uri(); ?>/src/images/tecknorth-logo.png" alt="Bild på företaget technorths:s loggo"></a>
					<a href="https://varmepumpshopen.se/" rel="noopener" target="blank"><img class="footer-img" src="<?php echo get_template_directory_uri(); ?>/src/images/Zave-logo.png" alt="Bild på företaget Zave:s loggo"></a>
				</div>	
			</div>
			<div class="meny-container">
				<h1>Support</h1>
				<div><?php wp_nav_menu(array('theme_location' => 'footer')); ?></div>
			</div>
		</div>
	</footer>
<?php wp_footer(); ?>
</body>
</html>