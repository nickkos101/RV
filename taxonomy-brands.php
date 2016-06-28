<?php get_header(); ?>
<main>
	<div class="container">
		<?php get_template_part('modules/breadcrumbs'); ?>
		<div class="row">
			<?php
			query_posts($query_string . '&orderby=title&order=ASC');
			if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<div class="col-xs-6 col-md-4 text-center model">
				<a href="<?php the_permalink(); ?>">
					<?php if ( has_post_thumbnail() ) {
						the_post_thumbnail();
					}  ?>
				</a>
				<h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
			</div>
		<?php endwhile; endif; ?>
	</div>
</div>
</main>
<?php get_footer(); ?>
