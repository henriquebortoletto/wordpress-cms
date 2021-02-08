<?php /* Template Name: Pagina Produtos */ ?>

<?php get_header(); ?>

<?php if ( have_posts() ): ?>
	<?php while( have_posts() ): ?>
		<?php the_post(); ?>

		<?php include 'inc/pages-intro.php'; ?>

		<?php $the_query = new WP_Query([
			'post_type' => 'produtos',
			'order' => 'asc' ]); ?>

		<?php if ( $the_query->have_posts() ): ?>
			<section class="produto-container">
				<?php while ( $the_query->have_posts() ): ?>
					<?php $the_query->the_post(); ?>
					<div class="container produto-item" data-anime="1600">
						<div class="grid-11">
							<a href="<?php the_permalink(); ?>">
								<img src="<?php the_field( 'foto_produto_1' ); ?>" alt="Bikcraft - Bicicleta <?php the_title(); ?>">
								<h2><?php the_title(); ?></h2>
							</a>
						</div>
						<div class="grid-5 produto-icone">
							<a href="<?php the_permalink(); ?>">
								<img src="<?php the_field( 'icone_produto' ); ?>" alt="Bikcraft - Bicicleta <?php the_title(); ?>">
							</a>
						</div>
					</div>
				<?php endwhile; ?>
			</section>
			<?php wp_reset_query(); wp_reset_postdata(); ?>
			<?php else: ?>
				<p><?php esc_html_e( 'Desculpe, nenhum post corresponde aos seus critérios.' ); ?></p>
		<?php endif; ?>

		<?php include 'inc/orcamento.php'; ?>

	<?php endwhile; ?>
<?php else: ?>
	<p><?php esc_html_e( 'Desculpe, nenhum post corresponde aos seus critérios.' ); ?></p>
<?php endif; ?>

<?php get_footer(); ?>
