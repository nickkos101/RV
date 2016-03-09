			<div id="logos">
				<div class="container">
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<div class="row">
						<div class="col-md-4 col-xs-6">
							<img class="logo" src="<?php echo get_template_directory_uri(); ?>/images/logo-2.png">
						</div>
						<div class="col-md-4 col-xs-6 text-center">
							<?php 
							$terms = get_the_terms(get_the_ID(), 'brands');
							if (is_array($terms)) {
								$term = array_pop($terms);
								echo '<img src="'.get_field('logo', $term).'">'; 
							}
							?>
						</div>
						<div class="col-md-4 col-xs-12 text-center">
							<h4 class="modelNumber"><?php if (!is_home() || !taxonomy_exists()) { echo 'Model: '.get_the_title(); } ?></h4>
						</div>
					</div>
				<?php endwhile; endif; ?>
			</div>
		</div>