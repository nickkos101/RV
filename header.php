<!DOCTYPE html>
<html>
<head>
	<title><?php wp_title(); ?></title>
	<meta name="viewport" content="width=device-width">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<link href='https://fonts.googleapis.com/css?family=Roboto:400,900italic,700italic,700,900,400italic,500,500italic' rel='stylesheet' type='text/css'>
	<script>
	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	ga('create', 'UA-74932640-1', 'auto');
	ga('send', 'pageview');

	</script>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>> 
	<header>
		<div id="nav" class="shadow">
			<div class="container desktop">
				<div class="col-md-5">
					<a target="_blank" href="http://www.lamesarv.com">
					<?php	the_custom_logo(); ?>
					</a>
				</div>
				<div class="col-md-7 text-right">
					<nav>
						<?php wp_nav_menu(array('theme_location' => 'Header_Nav',)); ?>
					</nav>
					<?php get_search_form(); ?>
				</div>
			</div>
		</div>
	</header>
