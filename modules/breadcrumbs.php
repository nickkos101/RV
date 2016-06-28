<div class="breadcrumbs">
  <div class="row">
    <div class="col-md-12">
<<<<<<< HEAD

      <?php if (is_page()) : ?>
        <p><a href="<?php echo get_site_url(); ?>">Home</a> > <?php the_title(); ?></p>
      <?php endif; ?>

      <?php if (is_singular('models')) : ?>
        <p><a href="<?php echo get_site_url(); ?>">Home</a> > <a href="<?php echo get_term_link(get_types(get_the_id())[0]); ?>"> <?php echo get_types(get_the_id())[0]->name; ?> </a> > <a href="<?php echo get_term_link(get_brands(get_the_id())[0]); ?>"> <?php echo get_brand(get_the_id()); ?></a> > <?php the_title(); ?></p>
      <?php endif; ?>

      <?php if (is_archive()) : ?>
        <p><a href="<?php echo get_site_url(); ?>">Home</a> > <?php the_archive_title(); ?></p>
      <?php endif; ?>

=======
      <p><a href="<?php echo get_site_url(); ?>">Types</a> > <a href="<?php echo get_site_url(); ?>/brands">Manufacturers</a> > <?php echo get_brand(get_the_id()); ?></p>
>>>>>>> origin/master
    </div>
  </div>
</div>
