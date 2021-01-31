<?php /* Template Name: Pagina Portfolio */ ?>

<?php get_header(); ?>

<?php if ( have_posts() ): ?>
	<?php while( have_posts() ): ?>
		<?php the_post(); ?>

		<?php include 'inc/pages-intro.php'; ?>

		<?php if ( have_rows( 'quote' ) ): ?>
			<section class="container" data-slide="quote" data-anime="1200">
				<?php while ( have_rows( 'quote' ) ): ?>
					<?php the_row(); ?>
					<blockquote class="quote-clientes">
						<?php the_sub_field( 'frase_quote' ); ?>
						<cite><?php the_sub_field( 'nome_cliente' ); ?></cite>
					</blockquote>
				<?php endwhile; ?>
			</section>
		<?php else: ?>
			<p class="container"><?php esc_html_e( 'Desculpe, nenhum comentário corresponde aos seus critérios.' ); ?></p>
		<?php endif; ?>

		<!-- PORTFOLIO -->
		<section class="portfolio page-portfolio" data-anime="1600">
			<div class="container">
				<?php include 'inc/slide-portfolio.php'; ?>
			</div>
		</section>

	<?php endwhile; ?>
<?php else: ?>
	<p><?php esc_html_e( 'Desculpe, nenhum post corresponde aos seus critérios.' ); ?></p>
<?php endif; ?>

<?php get_footer(); ?>
