<footer>
	<div class="container">
		<div class="row">
			<div class="col-md-4 col-xs-12">
				<?php
				$gmap = get_field('location', 'option');
				if( !empty($gmap) ):
					?>
					<div class="acf-map">
						<div class="marker" data-lat="<?php echo $gmap['lat']; ?>" data-lng="<?php echo $gmap['lng']; ?>"></div>
					</div>
				<?php endif; ?>
			</div>
			<div class="col-md-4 col-xs-12">
				<ul>
					<?php
					$phone_numbers = get_field('phone_numbers', 'options');
					if (!empty($phone_numbers)) :
						foreach($phone_numbers as $location) {
							echo '<li><i class="fa fa-phone-square" aria-hidden="true"></i><a href="tel:'.$location["phone_number"].'">'.$location["location"].' '.$location["phone_number"].'</a></li>';
						}
					endif;
					?>
					<?php $email = get_field('contact_email', 'option'); if (!empty($email)) : ?>
						<li><i class="fa fa-envelope" aria-hidden="true"></i><a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a></li>
					<?php endif; ?>
					<?php $website = get_field('main_website_url', 'option'); if (!empty($website)) : ?>
						<li><i class="fa fa-globe" aria-hidden="true"></i><a href="<?php echo $website; ?>">Home Website</a></li>
					<?php endif; ?>
				</ul>
			</div>
			<div class="col-md-4 col-xs-12 text-center">
				<p>Copyright &copy; 2016 American Digital Services Inc.</p>
				<a class="btn btn-block" href="mailto:info@rvadpros.com?subject=Feedback/Error: <?php echo get_the_title(); ?>&body= - <?php echo get_the_permalink(); ?>">Feedback/Report Error</a>
			</div>
		</div>
	</div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
