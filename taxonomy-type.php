<?php get_header(); ?>
<main>
	<div class="container">
		<div id="breadcrumbs">
			<div class="row">
				<div class="col-md-12">
					<p><a href="<?php echo get_site_url(); ?>">Types</a> > <?php echo $wp_query->queried_object->name; ?></p>
				</div>
			</div>
		</div>
		<div class="types">
<?php query_posts($query_string . '&orderby=title&order=ASC&posts_per_page=500');
			if ( have_posts() ) {
    $i = 0;
   while ( have_posts() ) : the_post();
  // modified to work with 6 columns
  // output an open <div>
  if($i % 6 == 0) { ?> 

  <div class="row">

  <?php
  }
  ?>

    <div class="col-xs-6 col-md-2 model text-center">
      <div class="my-inner">
  
	<a href="<?php the_permalink(); ?>">
						<?php if ( has_post_thumbnail() ) {
							the_post_thumbnail();
						}  ?>
					</a>
					<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
      </div>
    </div>  
      <?php $i++; 
      if($i != 0 && $i % 6 == 0) { ?>
        </div><!--/.row-->
        <div class="clearfix"></div>

      <?php
       } ?>

      <?php  
        endwhile;
        }
        wp_reset_query();
        ?>

