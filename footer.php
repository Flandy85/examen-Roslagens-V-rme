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
					<a href="https://www.aircon.panasonic.eu/SE_sv/" rel="noopener" target="blank"><img class="footer-img" src="<?php echo get_template_directory_uri(); ?>/src/images/Panasonic-Logo.png" alt="Bild på företaget Panasonic:s loggo"></a>
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