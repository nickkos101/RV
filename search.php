<?php get_header(); ?>
<main>
	<div class="container">
		<div id="breadcrumbs">
			<div class="row">
				<div class="col-md-12">
					<p><a href="<?php echo get_site_url(); ?>">Home</a> > <?php echo get_search_query(); ?></p>
				</div>
			</div>
		</div>
		<div id="brands">
			<div class="row">
				<?php
				query_posts($query_string . '&orderby=title&order=ASC');
				if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<div class="col-xs-6 col-md-4 text-center">
					<a href="<?php the_permalink(); ?>">
						<?php if ( has_post_thumbnail() ) {
							the_post_thumbnail();
						}  ?>
					</a>
					<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
				</div>
			<?php endwhile; endif; ?>
		</div>
	</div>
</div>
</main>
<?php get_footer(); ?>
