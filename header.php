<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
	<title><?php bloginfo( 'name' ); ?> <?php wp_title( '-' ); ?> <?php the_field( 'title_seo' ); ?></title>

	<meta name="description" content="<?php bloginfo( 'name' ); ?> <?php wp_title( '-' ); ?> <?php the_field( 'description_seo' ); ?>">
	<meta name="theme-color" content="#fec63e">

	<meta property="og:type" content="website">
	<meta property="og:title" content="<?php bloginfo( 'name' ); ?> <?php wp_title( '-' ); ?> <?php the_field( 'title_seo' ); ?>">
	<meta property="og:description" content="<?php bloginfo( 'name' ); ?> <?php wp_title( '-' ); ?> <?php the_field( 'description_seo' ); ?>">
	<meta property="og:url" content="<?php bloginfo( 'url' ); ?>">
	<meta property="og:image" content="<?= get_template_directory_uri(); ?>/img/og-image.png">

	<link rel="shortcut icon" href="<?= get_template_directory_uri(); ?>/favicon.ico">
	<?php wp_head(); ?>
	<script>
		document.documentElement.className += " js";
	</script>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>

	<!-- HEADER -->
	<header class="header">
		<div class="container header-wrapper">
			<div class="grid-4">
				<a href="<?php bloginfo( 'url' ); ?>">
					<img src="<?= get_template_directory_uri(); ?>/img/bikcraft.svg" alt="Logo Bikcraft">
				</a>
			</div>
			<div class="grid-12">
				<nav class="header-menu">
					<?php wp_nav_menu([
						'menu' => 'menu-principal',
						'theme-location' => 'header-menu',
						'container' => false
					]); ?>
				</nav>
			</div>
		</div>
	</header>
