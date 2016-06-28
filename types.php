<?php /* Template Name: Types */
get_header(); ?>
<main>
	<div class="container brands-page">
		<h4 class="text-center">Search by Types</h4>
		<div id="types">
			<div class="row">
<<<<<<< HEAD
				<?php $types = get_terms( 'type', array('orderby' => 'count','hide_empty' => 1) );
				foreach($types as $type) :
					$terms = get_term($type->term_id, 'type');
					?>
				<div class="col-md-3 col-xs-6 type" style="text-align:center;">
					<a href="<?php echo get_term_link($type); ?>">
							<?php echo '<img src="'.get_field('type_image', $terms).'">'; ?>
					</a>
				</div>
			<?php endforeach; ?>
=======
				<div class="col-md-3 col-xs-4 type">
					<a href="<?php echo get_site_url(); ?>/type/diesel-pusher/">
						<img src="<?php echo get_template_directory_uri(); ?>/images/deisel-icon.jpg">
					</a>
				</div>
				<div class="col-md-3 col-xs-4 type">
					<a href="<?php echo get_site_url(); ?>/type/class-a/">
						<img src="<?php echo get_template_directory_uri(); ?>/images/class-a-icon.jpg">
					</a>
				</div>
				<div class="col-md-3 col-xs-4 type">
					<a href="<?php echo get_site_url(); ?>/type/class-b/">
						<img src="<?php echo get_template_directory_uri(); ?>/images/class-b-icon.jpg">
					</a>
				</div>
				<div class="col-md-3 col-xs-4 type">
					<a href="<?php echo get_site_url(); ?>/type/class-c/">
						<img src="<?php echo get_template_directory_uri(); ?>/images/class-c-icon.jpg">
					</a>
				</div>
				<div class="col-md-3 col-xs-4 type">
					<a href="<?php echo get_site_url(); ?>/type/travel-trailer/">
						<img src="<?php echo get_template_directory_uri(); ?>/images/travel-trailer-icon.jpg">
					</a>
				</div>
				<div class="col-md-3 col-xs-4 type">
					<a href="<?php echo get_site_url(); ?>/type/5th-wheel/">
						<img src="<?php echo get_template_directory_uri(); ?>/images/5thwheel.jpg">
					</a>
				</div>
				<div class="col-md-3 col-xs-4 type">
					<a href="<?php echo get_site_url(); ?>/type/tent-trailer/">
						<img src="<?php echo get_template_directory_uri(); ?>/images/tent-trailer-icon.jpg">
					</a>
				</div>
				<div class="col-md-3 col-xs-4 type">
					<a href="<?php echo get_site_url(); ?>/type/toy-hauler/">
						<img src="<?php echo get_template_directory_uri(); ?>/images/toyhauler-icon.jpg">
					</a>
				</div>
>>>>>>> origin/master
			</div>
		</div>
	</div>
</main>
<<<<<<< HEAD
<?php get_footer(); ?>
=======
<?php get_footer(); ?>
>>>>>>> origin/master
