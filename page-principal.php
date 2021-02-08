<?php /* Template Name: Pagina Principal */ ?>

<?php get_header(); ?>

<?php if ( have_posts() ): ?>

<?php
	$imagemId = get_field( 'background_home' );
	$backgroundLarge = wp_get_attachment_image_src( $imagemId, 'large' );
	$backgroundMedium =  wp_get_attachment_image_src( $imagemId, 'medium' );
?>

<style>
	.introducao {
		background-image: url(<?= $backgroundLarge[0]; ?>);
	}
	@media only screen and (max-width: 787px) {
		.introducao {
			background-image: url(<?= $backgroundMedium[0]; ?>);
		}
	}
</style>

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
				<a href="<?php bloginfo( 'url' ); ?>/produtos/" class="btn btn-primario" data-anime="1200">Orçamento</a>
			</div>
		</section>

		<?php $the_query = new WP_Query([
			'post_type' => 'produtos',
			'order' => 'ASC' ]); ?>

		<?php if ( $the_query->have_posts() ): ?>
			<section class="container produtos" data-anime="1600">
				<h2 class="subtitulo">Produtos</h2>
				<ul class="produtos-lista">
					<?php while ( $the_query->have_posts() ): ?>
						<?php $the_query->the_post(); ?>
						<li class="grid-1-3">
							<a href="<?php the_permalink(); ?>">
								<div class="produtos-icone">
									<img src="<?php the_field( 'icone_produto' ); ?>" alt="Bikcraft - Bicicleta <?php the_title(); ?>">
								</div>
								<h3><?php the_title(); ?></h3>
								<p><?php the_field( 'resumo_produto_home' ); ?></p>
							</a>
						</li>
					<?php endwhile; ?>
					<?php wp_reset_query(); wp_reset_postdata(); ?>
				</ul>
				<div class="call">
					<p><?php the_field( 'call_to_action_produtos' ); ?></p>
					<a href="<?php bloginfo( 'url' ); ?>/produtos/" class="btn btn-secundario">Produtos</a>
				</div>
			</section>
		<?php else: ?>
			<p><?php esc_html_e( 'Desculpe, nenhum post corresponde aos seus critérios.' )?></p>
		<?php endif; ?>

		<!-- PORTFOLIO -->
		<section class="portfolio" data-anime="2200">
			<div class="container" >
				<h2 class="subtitulo">Portfólio</h2>
				<?php include 'inc/slide-portfolio.php'; ?>
			</div>
		</section>

		<?php include 'inc/qualidade.php'; ?>

	<?php endwhile; ?>
<?php else: ?>
	<p><?php esc_html_e( 'Desculpe, nenhum post corresponde aos seus critérios.' ); ?></p>
<?php endif; ?>

<?php get_footer(); ?>
