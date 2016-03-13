<?php get_header(); ?>
<main>
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<div class="container">
		<?php $floorplans = get_field('floorplans'); ?>
		<div id="breadcrumbs">
			<div class="row">
				<div class="col-md-12">
					<p><a href="">Home</a> / <a href="<?php echo get_site_url(); ?>/brands">Manufacturers</a> / <a href="<?php echo get_site_url(); ?>/brand/<?php echo get_brand_slug(get_the_id()); ?>"><?php echo get_brand(get_the_id()); ?></a> / <?php the_title(); ?></p>
				</div>
			</div>
		</div>
		<div id="content">
			<div class="row">
				<div class="col-md-6">
					<div class="videoWrapper">
						<?php if ($floorplans[0]['floorplan_video']) { ?>
						<p class="hidden">Video Coming! <br/> Click Inventory to see more information and exit the library.</p>
						<iframe id="modelVid" src="<?php echo $floorplans[0]['floorplan_video']; ?>/?showinfo=0&rel=0modestbranding=0" frameborder="0" allowfullscreen></iframe>
						<?php } else { ?>
						<p>Video Coming! <br/> Click Inventory to see more information and exit the library.</p>
						<iframe id="modelVid" class="hidden" src="#" frameborder="0" allowfullscreen></iframe>
						<?php	} ?>
					</div>
						<!-- <div class="row text-center">
							<div class="col-xs-4">
								<p><a href="<?php echo $floorplans[0]['floorplan_video']; ?>/?showinfo=0&rel=0modestbranding=0&start=0">Main Room</a></p>
							</div>
							<div class="col-xs-4">
								<p><a href="<?php echo $floorplans[0]['floorplan_video']; ?>/?showinfo=0&rel=0modestbranding=0&start=46">Bedroom</a></p>
							</div>
							<div class="col-xs-4">
								<p><a href="<?php echo $floorplans[0]['floorplan_video']; ?>/?showinfo=0&rel=0modestbranding=0&start=69">Bathroom</a></p>
							</div>
						</div>-->
					</div>
					<div class="col-md-6 text-center">
						<p>Tap once then hold to magnify.</p>
						<?php if ($floorplans[0]['floorplan_image']) { ?>
						<img id="floorplan-image" src="<?php echo $floorplans[0]['floorplan_image']; ?>" data-zoom-image="<?php echo $floorplans[0]['floorplan_image']; ?>">
						<?php } else { ?>
						<p>Illustration not availible <br/> (Click to watch video)</p>
						<?php } ?>
				<!--<form class="callback-cta">
					<input type="text" placeholder="Your Name">
					<input type="text" placeholder="Phone Number">
					<button>Request a Callback</button>
				</form> -->
				<!--<button data-toggle="modal" data-target="#contactModal">Contact Us for More Info</button>-->
			</div>
		</div>
		<h2><?php echo get_brand(get_the_id()).' '.get_the_title(); ?> Floorplans</h2>
	</div>
	<div id="inventory" class="row">
		<?php 
		$i = 0;
		foreach ($floorplans as $floorplan) { ?>
			<div class="col-md-3 model <?php if ($i === 0) { echo 'active'; } ?>" data-vidlink="<?php echo $floorplan['floorplan_video']; ?>/?showinfo=0&rel=0&modestbranding=0" data-imglink="<?php echo $floorplan['floorplan_image']; ?>">
				<?php if ($floorplan['floorplan_image']) { ?>
				<img src="<?php echo $floorplan['floorplan_image']; ?>">
				<?php } else { ?>
				<p>Illustration not availible <br/> (Click to watch video)</p>
				<?php } ?>
				<h3 class="planName"><?php
					if ($floorplan['floorplan_year']) { echo get_term_by('id', $floorplan['floorplan_year'], 'years')->name; } ?> <?php echo $floorplan['floorplan_name']; ?> <br/> <small><?php if ($floorplan['floorplan_type']) { echo get_term_by('id', $floorplan['floorplan_type'], 'type')->name; } ?></small></h3>
				<div class="row">
					<div class="col-xs-12">
						<button>Inventory</button>
					</div>
				</div>
			</div>
			<?php $i++; } ?>
		</div>
		<p class="mobile-only text-center"><strong>Click or Swipe to See Floorplans</strong></p>
		<div class="text-content">
			<div class="row">
				<div class="col-md-8">
					<h3><span>About</span> <?php echo get_brand(get_the_id()).' '.get_the_title(); ?></h3>
					<?php the_content(); ?>
				</div>
				<div class="col-md-4">
					<?php if ( has_post_thumbnail() ) {
						the_post_thumbnail();
					}  ?>
				</div>
			</div>
		</div>
	<?php endwhile; endif; ?>
</div>
</main>
</div>
<?php get_footer(); ?>