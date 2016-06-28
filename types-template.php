<?php /* Template Name: Types Page */ ?>
<?php get_header(); ?>
<main>
	<div id="logos">
		<div class="container">
			<div class="row">
				<div class="col-md-4 col-xs-12">
					<img class="logo" src="<?php echo get_template_directory_uri(); ?>/images/logo-2.png">
				</div>
				<div class="col-md-3 text-center">
					<div id="breadcrumbs">
						<p><a href="">Home</a> / Types</p>
					</div>
				</div>
				<div class="col-md-5 col-xs-12 text-center">
					<p class="padme"><strong>What kind of RV should you get?<br/> Watch a 1 minute <a href="">Motorized</a> or <a href="">Towable video</a></strong></p>
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<div id="types" class="row">
			<div class="col-md-6 bar-right">
				<img src="<?php echo get_template_directory_uri(); ?>/images/class-a.png">
				<img src="<?php echo get_template_directory_uri(); ?>/images/class-b.png">
				<img src="<?php echo get_template_directory_uri(); ?>/images/class-c.png">
				<img src="<?php echo get_template_directory_uri(); ?>/images/dieselpusher.png">
			</div>
			<div class="col-md-6 bar-left">
				<img src="<?php echo get_template_directory_uri(); ?>/images/travel-trailer.png">
				<img src="<?php echo get_template_directory_uri(); ?>/images/5thwheel.png">
				<img src="<?php echo get_template_directory_uri(); ?>/images/tent-trailer.png">
				<img src="<?php echo get_template_directory_uri(); ?>/images/toy-hauler.png">
			</div>
		</div>
	</div>
</main>
<?php get_footer(); ?>