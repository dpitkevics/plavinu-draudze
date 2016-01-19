<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<title><?php wp_title(); ?></title>
	<meta charset="<?php bloginfo( 'charset' ); ?>"/>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>"/>
	<link
		href='https://fonts.googleapis.com/css?family=Titillium+Web:400,200,200italic,300,300italic,400italic,600,600italic,700,700italic,900&subset=latin,latin-ext'
		rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

	<?php wp_head(); ?>
</head>

<body <?php body_class( isset( $class ) ? $class : '' ); ?>>

<header>
	<nav class="navbar navbar-default" role="navigation">
		<div class="container-fluid full-width">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
				        data-target="#top-navbar-menu" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="<?= home_url(); ?>">
					<span
						class="hover-text-blue"><?= substr( get_bloginfo( 'name', 'display' ), 0, 1 ); ?></span><?= substr( get_bloginfo( 'name', 'display' ), 1 ); ?>
				</a>
			</div>

			<div class="collapse navbar-collapse" id="top-navbar-menu">
				<?php wp_nav_menu( array( 'menu'       => 'Main',
				                          'menu_class' => 'nav navbar-nav navbar-right',
				                          'depth'      => 3,
				                          'container'  => false,
				                          'walker'     => new Bootstrap_Walker_Nav_Menu
				) ); ?>
			</div>
		</div>
	</nav>
</header>

<main>
	<div class="container">