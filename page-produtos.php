<?php /* Template Name: Pagina Produtos */ ?>

<?php get_header(); ?>

<?php if ( have_posts() ): ?>
	<?php while( have_posts() ): ?>
		<?php the_post(); ?>

		<?php include 'inc/pages-intro.php'; ?>

		<!-- PRODUTO PASSEIO -->
		<section class="container produto-item" data-anime="1200">
			<div class="grid-11">
				<img src="<?= get_template_directory_uri(); ?>/img/produtos/bikcraft-passeio-1.jpg" alt="Bikcraft - Bicicleta Passeio">
				<h2>Passeio</h2>
			</div>
			<div class="grid-5 produto-icone">
				<img src="<?= get_template_directory_uri(); ?>/img/produtos/passeio.svg" alt="Bikcraft - Bicicleta Passeio">
			</div>
			<div class="grid-8">
				<img src="<?= get_template_directory_uri(); ?>/img/produtos/bikcraft-passeio-2.jpg" alt="Bickraft - Bicicleta Passeio">
			</div>
			<div class="grid-8 produto-info">
				<p>Muito melhor do que passear pela orla a vidros fechados. A Bikcraft Passeio é uma bicicleta que une conforto e praticidade para o seu dia a dia. Você nunca mais vai querer saber de outra.</p>
				<ul>
					<li>Conforto</li>
					<li>Velocidade</li>
					<li>Design</li>
					<li>Versatilidade</li>
				</ul>
			</div>
		</section>

		<!-- PRODUTO ESPORTE -->
		<section class="container produto-item" data-anime="1600">
			<div class="grid-11">
				<img src="<?= get_template_directory_uri(); ?>/img/produtos/bikcraft-esporte-1.jpg" alt="Bikcraft - Bicicleta Esporte">
				<h2>Esporte</h2>
			</div>
			<div class="grid-5 produto-icone">
				<img src="<?= get_template_directory_uri(); ?>/img/produtos/esporte.svg" alt="Bikcraft - Bicicleta Esporte">
			</div>
			<div class="grid-8">
				<img src="<?= get_template_directory_uri(); ?>/img/produtos/bikcraft-esporte-2.jpg" alt="Bickraft - Bicicleta Esporte">
			</div>
			<div class="grid-8 produto-info">
				<p>Muito melhor do que passear pela orla a vidros fechados. A Bikcraft Passeio é uma bicicleta que une conforto e praticidade para o seu dia a dia. Você nunca mais vai querer saber de outra.</p>
				<ul>
					<li>Conforto</li>
					<li>Velocidade</li>
					<li>Design</li>
					<li>Versatilidade</li>
				</ul>
			</div>
		</section>

		<!-- PRODUTO RETRÔ -->
		<section class="container produto-item">
			<div class="grid-11">
				<img src="<?= get_template_directory_uri(); ?>/img/produtos/bikcraft-retro-1.jpg" alt="Bikcraft - Bicicleta Retrô">
				<h2>Retrô</h2>
			</div>
			<div class="grid-5 produto-icone">
				<img src="<?= get_template_directory_uri(); ?>/img/produtos/retro.svg" alt="Bikcraft - Bicicleta Retrô">
			</div>
			<div class="grid-8">
				<img src="<?= get_template_directory_uri(); ?>/img/produtos/bikcraft-retro-2.jpg" alt="Bickraft - Bicicleta Retrô">
			</div>
			<div class="grid-8 produto-info">
				<p>Muito melhor do que passear pela orla a vidros fechados. A Bikcraft Passeio é uma bicicleta que une conforto e praticidade para o seu dia a dia. Você nunca mais vai querer saber de outra.</p>
				<ul>
					<li>Conforto</li>
					<li>Velocidade</li>
					<li>Design</li>
					<li>Versatilidade</li>
				</ul>
			</div>
		</section>

		<?php include 'inc/orcamento.php'; ?>

	<?php endwhile; ?>
<?php else: ?>
	<p><?php esc_html_e( 'Desculpe, nenhum post corresponde aos seus critérios.' ); ?></p>
<?php endif; ?>

<?php get_footer(); ?>
