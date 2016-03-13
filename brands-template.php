<?php /* Template Name: Footage Checking App Page */ ?>
<?php get_header(); ?>
<main>
	<div class="hero">
		<img src="<?php echo get_template_directory_uri(); ?>/images/hero.jpg">
		<div class="overlay">
			<h2><span>Find</span> your RV!</h2>
			<p>Explore a video library of Recreational Vehicles.</p>
			<a href="#types" class="btn">Learn More</a>
		</div>
		<a class="btn" href="#types">Explore Library <br/> <i class="fa fa-angle-down"></i></a>
	</div>
	<div class="container brands-page">
		<div id="types">
			<div class="row">
				<div class="col-md-2 col-xs-4 type">
					<a href="<?php echo get_site_url(); ?>/type/class-a/">
						<img src="<?php echo get_template_directory_uri(); ?>/images/class-a-icon.png">
						<p>Class A <br/> </p>
					</a>
				</div>
				<div class="col-md-2 col-xs-4 type">
					<a href="<?php echo get_site_url(); ?>/type/class-b/">
						<img src="<?php echo get_template_directory_uri(); ?>/images/class-b-icon.png">
						<p>Class B <br/> </p>
					</a>
				</div>
				<div class="col-md-2 col-xs-4 type">
					<a href="<?php echo get_site_url(); ?>/type/class-c/">
						<img src="<?php echo get_template_directory_uri(); ?>/images/class-c-icon.png">
						<p>Class C <br/> </p>
					</a>
				</div>
				<div class="col-md-2 col-xs-4 type">
					<a href="<?php echo get_site_url(); ?>/type/travel-trailer/">
						<img src="<?php echo get_template_directory_uri(); ?>/images/travel-trailer-icon.png">
						<p>Travel Trailer <br/> </p>
					</a>
				</div>
				<div class="col-md-2 col-xs-4 type">
					<a href="<?php echo get_site_url(); ?>/type/5th-wheel/">
						<img src="<?php echo get_template_directory_uri(); ?>/images/5thwheel-icon.png">
						<p>5th Wheel <br/> </p>
					</a>
				</div>
				<div class="col-md-2 col-xs-4 type">
					<a href="<?php echo get_site_url(); ?>/type/tent-trailer/">
						<img src="<?php echo get_template_directory_uri(); ?>/images/tent-trailer-icon.png">
						<p>Tent Trailer <br/> </p>
					</a>
				</div>
			</div>
		</div>
		<h4 class="text-center">Filter by Manufacturer</h4>
		<div id="brands">
			<div class="row">
				<?php $brands = get_terms( 'brands', array('orderby' => 'count','hide_empty' => 1) );
				foreach($brands as $brand) {
					$terms = get_term($brand->term_id, 'brands');
					?>
					<div class="col-xs-6 col-md-3 brand">
						<a href="<?php echo get_term_link($brand); ?>">
							<?php echo '<img src="'.get_field('logo', $terms).'">'; ?>
						</a>
					</div>
					<?php } ?>
				</div>
			</div>
		</div>
	</main>
	<?php get_footer(); ?>