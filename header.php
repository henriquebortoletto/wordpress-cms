<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
	<title><?php bloginfo( 'name' ); ?> | <?php bloginfo( 'description' ); ?></title>
	<meta name="description" content="Compre a sua bicicleta personalizada na Bikcraft. Possuímos modelos Passeio, Retrô e Esporte.">
	<meta name="theme-color" content="#fec63e">
	<meta property="og:type" content="website">
	<meta property="og:title" content="<?php bloginfo( 'name' ); ?> | Bicicletas Personalizadas">
	<meta property="og:description" content="Compre sua bicicleta personalizada na Bikcraft. Possuímos modelos Passeio, Retrô e Esporte.">
	<meta property="og:url" content="https://bikcraft.com">
	<meta property="og:image" content="https://bikcraft.com/img/og-image.png">
	<link rel="shortcut icon" href="<?= get_template_directory_uri(); ?>/favicon.ico">
	<link rel="stylesheet" href="<?= get_stylesheet_directory_uri(); ?>/css/style.css">
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
				<a href="/bikcraft/">
					<img src="<?= get_template_directory_uri(); ?>/img/bikcraft.svg" alt="Logo Bikcraft">
				</a>
			</div>
			<div class="grid-12">
				<nav class="header-menu">
					<ul>
						<li><a href="./sobre/">Sobre</a></li>
						<li><a href="./produtos/">Produtos</a></li>
						<li><a href="./portfolio/">Portfólio</a></li>
						<li><a href="./contato/">Contato</a></li>
					</ul>
				</nav>
			</div>
		</div>
	</header>
