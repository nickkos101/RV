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

	ga('create', 'UA-64977713-2', 'auto');
	ga('send', 'pageview');

	</script>
	<?php wp_head(); ?>
</head>
<body>
	<header>
		<div id="nav" class="shadow">
			<div class="container desktop">
				<div class="col-md-3">
					<a href="<?php echo get_site_url(); ?>"><img class="logo" src="<?php echo get_template_directory_uri(); ?>/images/logo-white.png"></a>
				</div>
				<div class="col-md-9 text-right">
					<nav>
						<?php wp_nav_menu(array('theme_location' => 'Header_Nav',)); ?>
					</nav>
				</div>
			</div>
			<div id="responsive-nav">
				<div class="col-xs-4">
					<a href="<?php echo get_site_url(); ?>"><img class="logo" src="<?php echo get_template_directory_uri(); ?>/images/logo-white.png"></a>
				</div>
				<div class="col-xs-6 text-center">
				</div>
				<div class="col-xs-2 text-right">
					<span class="glyphicon glyphicon-align-justify"></span>
				</div>
			</div>
			<div id="slideOut" class="shadow">
				<nav>
					<ul>
						<li><a href="#">Manufacturer</a></li>
						<li><a href="#">Brands</a></li>
						<li><a href="#">Models</a></li>
						<li><a href="#">Floor Plans</a></li>
					</ul>
				</nav>
			</div>
		</div>
	</header>