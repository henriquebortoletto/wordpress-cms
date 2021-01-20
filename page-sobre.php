<?php /* Template Name: Pagina Sobre */ ?>

<?php get_header(); ?>

<?php if ( have_posts() ): ?>
	<?php while( have_posts() ): ?>
		<?php the_post(); ?>

		<?php include __DIR__ . "/inc/pages-intro.php"; ?>

		<!-- MISSÃO, VISAO, VALORES -->
		<section class="missao" data-anime="1200">
			<div class="container">
				<div class="grid-10 historia-missao-visao">
					<h2>História, missão e visão</h2>
					<p>Quando iniciamos a Bikcraft queriamos apenas um produto que adoraríamos utilizar. Eramos apaixonados por pedalar e também por fazer coisas com as nossas próprias mãos. Assim surgiu um sonho na garagem de casa.</p>
					<p>Conheça os nossos produtos, pergunte para os nossos clientes e descubra a maravilha de ter uma Bikcraft na sua casa.</p>
				</div>
				<div class="grid-6 valores">
					<h2>Valores</h2>
					<ul>
						<li>- Qualidade no processo com</li>
						<li>- Foco no cliente sem perder a</li>
						<li>- Diversão, preservando a</li>
						<li>- Natureza com sustentabilidade</li>
					</ul>
				</div>
			</div>
		</section>

		<!-- EQUIPE -->
		<section class="equipe" data-anime="1600">
			<div class="container">
				<div class="grid-16">
					<img src="<?= get_template_directory_uri(); ?>/img/equipe-bikcraft.jpg" alt="Equipe Bikcraft">
				</div>
			</div>
		</section>

		<?php include __DIR__ . '/inc/qualidade.php'; ?>

	<?php endwhile; ?>
<?php else: ?>
	<p><?php esc_html_e( 'Desculpe, nenhum post corresponde aos seus critérios.' ); ?></p>
<?php endif; ?>

<?php get_footer(); ?>
