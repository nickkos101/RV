<!DOCTYPE html>
<html>
<head>
	<title><?php wp_title(); ?></title>
	<meta name="viewport" content="width=device-width">
<link rel='stylesheet' href='http://onlinervshow.com/wp-content/themes/Pegasus/style.css' type='text/css' media='all' />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<link href='https://fonts.googleapis.com/css?family=Roboto:400,900italic,700italic,700,900,400italic,500,500italic' rel='stylesheet' type='text/css'>
<link rel='stylesheet' href='http://onlinervshow.com/wp-content/themes/Pegasus/style.css' type='text/css' media='all' />
	<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		ga('create', 'UA-74932640-1', 'auto');
		ga('send', 'pageview');

	</script>
	<?php wp_head(); ?>
	<?php get_template_part('/modules/style', 'compiler'); ?>
</head>
<body <?php body_class(); ?>>
	<header>
		<nav class="navbar navbar-default navbar-fixed-top">
			<div class="fluid-container">
				<div class="navbar-header">
					<?php the_custom_logo(); ?>
					<button class="navbar-toggle collapsed btn" data-toggle="collapse" data-target="#primary-nav" aria-expanded="false">
						<i class="fa fa-bars" aria-hidden="true"></i>
					</button>
				</div>
				<div id="primary-nav" class="collapse navbar-collapse text-right">
					<?php wp_nav_menu(array('theme_location' => 'Header_Nav'));  ?>
					<?php get_search_form(); ?>
				</div>
			</div>
		</nav>
	</header>
