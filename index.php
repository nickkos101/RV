<?php get_header(); ?>
<main>
	<div class="container">
		<div class="text-center">
			<a class="btn" href="/instructions"><i class="fa fa-exclamation-circle" aria-hidden="true"></i> Watch a 2 minute video -  "How to use this library"</a>
		</div>
		<h4 class="text-center">Search by Types</h4>
		<div class="row">
			<?php $types = get_terms( 'type', array('orderby' => 'title', 'hide_empty' => 1) );
			foreach($types as $type) :
				$terms = get_term($type->term_id, 'type');
				?>
			<div class="col-md-3 col-xs-6 type" style="text-align:center;">
				<a href="<?php echo get_term_link($type); ?>">
						<?php echo '<img src="'.get_field('type_image', $terms).'">'; ?>
			<a class="btn btn-block"><i class="fa fa-exclamation-circle" aria-hidden="true"></i> Watch a 2 minute video -  "How to use this library"</a>
		</div>
		<h4 class="text-center">Search by Types</h4>
		<div class="row">
			<div class="col-md-3 col-xs-4 type">
				<a href="<?php echo get_site_url(); ?>/type/diesel/">
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
>>>>>>> origin/master
				</a>
			</div>
		<?php endforeach; ?>
		</div>
		<h4 class="text-center">Search by Manufacturer</h4>
		<div class="row">
			<?php $brands = get_terms( 'brands', array('orderby' => 'title','hide_empty' => 1) );
			foreach($brands as $brand) :
				$terms = get_term($brand->term_id, 'brands');
				?>
				<div class="col-xs-6 col-md-2 brand">
			<?php $brands = get_terms( 'brands', array('orderby' => 'count','hide_empty' => 1) );
			foreach($brands as $brand) :
				$terms = get_term($brand->term_id, 'brands');
				?>
				<div class="col-xs-6 col-md-3 brand">
					<a href="<?php echo get_term_link($brand); ?>">
						<?php echo '<img src="'.get_field('logo', $terms).'">'; ?>
					</a>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</main>
<?php get_footer(); ?>
