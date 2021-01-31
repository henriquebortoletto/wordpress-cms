<?php /* Template Name: Pagina Sobre */ ?>

<?php get_header(); ?>

<?php if ( have_posts() ): ?>
	<?php while( have_posts() ): ?>
		<?php the_post(); ?>

		<?php include 'inc/pages-intro.php'; ?>

		<!-- MISSÃO, VISAO, VALORES -->
		<section class="missao" data-anime="1200">
			<div class="container">
				<div class="grid-10 historia-missao-visao">
					<h2>História, missão e visão</h2>
					<?php the_field( 'missao' ); ?>
				</div>
				<div class="grid-6 valores">
					<h2>Valores</h2>
					<?php the_field( 'valores' ); ?>
				</div>
			</div>
		</section>

		<!-- EQUIPE -->
		<section class="equipe" data-anime="1600">
			<div class="container">
				<div class="grid-16">
					<img src="<?php the_field( 'equipe_bikcraft_imagem' ); ?>" alt="Equipe Bikcraft">
				</div>
			</div>
		</section>

		<?php include 'inc/qualidade.php'; ?>

	<?php endwhile; ?>
<?php else: ?>
	<p><?php esc_html_e( 'Desculpe, nenhum post corresponde aos seus critérios.' ); ?></p>
<?php endif; ?>

<?php get_footer(); ?>
