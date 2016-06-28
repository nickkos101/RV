<?php /* Template Name: Manufacturers */ get_header(); ?>
<main>
	<div class="container brands-page">
		<h4 class="text-center">Search by Manufacturer</h4>
		<div id="brands">
			<div class="row">
				<?php $brands = get_terms( 'brands', array('orderby' => 'title','hide_empty' => 1) );
				foreach($brands as $brand) {
					$terms = get_term($brand->term_id, 'brands');
					?>
					<div class="col-xs-6 col-md-2 brand">
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