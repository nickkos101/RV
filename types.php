<?php /* Template Name: Types */
get_header(); ?>
<main>
	<div class="container brands-page">
		<h4 class="text-center">Search by Types</h4>
		<div id="types">
			<div class="row">
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
			</div>
		</div>
	</div>
</main>
<?php get_footer(); ?>
