<?php get_header(); ?>

<?php if ( have_posts() ): ?>
	<?php while ( have_posts() ): ?>
		<?php the_post(); ?>

		<!-- INTRO -->
		<section class="introducao">
			<div class="container">
				<h1 data-anime="400"><?php the_field( 'titulo_introducao' ); ?></h1>
				<blockquote class="quote-externo" data-anime="800">
					<?php the_field( 'quote' ); ?>
					<cite><?php the_field( 'quote_autor' ); ?></cite>
				</blockquote>
				<a href="./produtos/" class="btn btn-primario" data-anime="1200">Orçamento</a>
			</div>
		</section>

		<!-- PRODUTOS -->
		<section class="container produtos" data-anime="1600">
			<h2 class="subtitulo">Produtos</h2>
			<ul class="produtos-lista">
				<li class="grid-1-3">
					<div class="produtos-icone">
						<img src="<?= get_template_directory_uri(); ?>/img/produtos/passeio.svg" alt="Bikcraft - Bicicleta Passeio">
					</div>
					<h3>Passeio</h3>
					<p>Muito melhor do que passear pela orla a vidros fechados.</p>
				</li>
				<li class="grid-1-3">
					<div class="produtos-icone">
						<img src="<?= get_template_directory_uri(); ?>/img/produtos/esporte.svg" alt="Bikcraft - Bicicleta Esporte">
					</div>
					<h3>Esporte</h3>
					<p>Mais rápida do que Forrest Gump, ninguém vai pegar você.</p>
				</li>
				<li class="grid-1-3">
					<div class="produtos-icone">
						<img src="<?= get_template_directory_uri(); ?>/img/produtos/retro.svg" alt="Bikcraft - Bicicleta Retrô">
					</div>
					<h3>Retrô</h3>
					<p>O passado volta para lembrarmos o que devemos fazer no futuro.</p>
				</li>
			</ul>
			<div class="call">
				<p>clique aqui e veja detalhes do produto</p>
				<a href="./produtos/" class="btn btn-secundario">Produtos</a>
			</div>
		</section>

		<!-- PORTFOLIO -->
		<section class="portfolio" data-anime="2200">
			<div class="container" >
				<h2 class="subtitulo">Portfólio</h2>
				<?php include __DIR__ . '/inc/slide-portfolio.php'; ?>
			</div>
		</section>

		<?php include __DIR__ . '/inc/qualidade.php'; ?>

	<?php endwhile; ?>
<?php else: ?>
	<p><?php esc_html_e( 'Desculpe, nenhum post corresponde aos seus critérios.' ); ?></p>
<?php endif; ?>

<?php get_footer(); ?>
