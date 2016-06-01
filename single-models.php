<?php get_header(); ?>
<main>
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<div class="container">
			<?php $floorplans = get_field('floorplans'); ?>
			<?php get_template_part('/modules/breadcrumbs'); ?>
			<div class="row">
				<div class="col-md-6">
					<div class="video-wrap">
						<?php if ($floorplans[0]['floorplan_video']) { ?>
							<p class="hidden">Click on a floorplan below to load video</p>
							<iframe id="modelVid" src="<?php echo $floorplans[0]['floorplan_video']; ?>/?showinfo=0&rel=0&modestbranding=0" frameborder="0" allowfullscreen></iframe>
							<?php } else { ?>
								<p>Click on a floorplan below to load video</p>
								<iframe id="modelVid" class="hidden" src="#" frameborder="0" allowfullscreen></iframe>
								<?php	} ?>
								<img class="overlay" src="<?php echo get_template_directory_uri(); ?>/images/logo-white.png">
							</div>
							<small class="text-center">All audio is muted. <br/> Videos are examples of current floorplans. Actual RV's in inventory may vary in features, colors and options.</small>
						</div>
						<div class="col-md-6 text-center">
							<p class="visible-md-block visible-lg-block">Roll mouse over to magnify.</p>
							<p class="visible-xs-block visible-sm-block">Pinch to magnify.</p>
							<?php if ($floorplans[0]['floorplan_image']) : ?>
								<img id="floorplan-image" src="<?php echo $floorplans[0]['floorplan_image']; ?>" data-zoom-image="<?php echo $floorplans[0]['floorplan_image']; ?>">
								<p><?php echo $floorplans[0]['floorplan_name']; ?></p>
							<?php else : ?>
								<p>Illustration not availible <br/> (Click to watch video)</p>
							<?php endif; ?>
							<button class="btn" data-toggle="modal" data-target="#myModal" data-querylink="<?php echo $queryString; ?>">Check Availability</button>
						</div>
					</div>
					<h3 class="text-center">
						<?php echo get_brand(get_the_id()).' '.get_the_title(); ?> Floorplans
					</h3>
					<div class="slider row">
						<?php
						$i = 0;
						$floorplans = array_sort($floorplans, 'floorplan_name', SORT_ASC);
						foreach ($floorplans as $floorplan) :
							if ($floorplan['floorplan_video'] && !$floorplan['hidden']) : ?>
							<div class="col-md-3 model <?php if ($i === 0) { echo 'active'; } ?>" data-vidlink="<?php echo $floorplan['floorplan_video']; ?>/?showinfo=0&rel=0&modestbranding=0" data-imglink="<?php echo $floorplan['floorplan_image']; ?>">
								<?php if ($floorplan['floorplan_image']) : ?>
									<img src="<?php echo $floorplan['floorplan_image']; ?>">
								<?php else : ?>
									<p>Illustration not availible <br/> (Click to watch video)</p>
								<?php endif; ?>
								<h5><?php echo $floorplan['floorplan_name']; ?></h5>
								<p>
									<small>
										<?php if ($floorplan['floorplan_type']) { echo get_term_by('id', $floorplan['floorplan_type'], 'type')->name; } ?>
									</small>
								</p>
								<div class="row">
									<div class="col-xs-12">
										<button class="btn" data-toggle="modal" data-target="#contact-modal" data-querylink="<?php echo $queryString; ?>">Check Availability</button>
									</div>
								</div>
							</div>
							<?php
							$i++;
						endif;
					endforeach; ?>
				</div>
				<p class="visible-xs-block visible-sm-block text-center">
					<strong>Click or Swipe to See Floorplans</strong>
				</p>
				<div class="text-content">
					<div class="row">
						<div class="col-md-8">
							<h3><span>About</span> <?php echo get_brand(get_the_id()).' '.get_the_title(); ?></h3>
							<?php the_content(); ?>
						</div>
						<div class="col-md-4">
							<div class="img-responsive">
								<?php if ( has_post_thumbnail() ) {
									the_post_thumbnail();
								} ?>
							</div>
						</div>
					</div>
				</div>
			<?php endwhile; endif; ?>
		</div>
	</main>
	<?php get_template_part('interest', 'modal'); ?>
	<?php get_footer(); ?>
