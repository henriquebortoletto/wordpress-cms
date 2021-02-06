<?php get_header(); ?>

<?php if ( have_posts() ): ?>
	<?php while( have_posts() ): ?>
		<?php the_post(); ?>

		<section class="container produto-item produto-single" data-anime="1200">
			<div class="grid-11">
				<img src="<?php the_field( 'foto_produto_1' ); ?>" alt="Bikcraft - Bicicleta <?php the_title(); ?>">
				<h2><?php the_title(); ?></h2>
			</div>
			<div class="grid-5 produto-icone">
				<img src="<?php the_field( 'icone_produto' ); ?>" alt="Bikcraft - Bicicleta <?php the_title(); ?>">
			</div>
			<div class="grid-8">
				<img src="<?php the_field( 'foto_produto_2' ); ?>" alt="Bickraft - Bicicleta <?php the_title(); ?>">
			</div>
			<div class="grid-8 produto-info">
				<?php the_content(); ?>
			</div>
		</section>

		<?php include 'inc/orcamento.php'; ?>

	<?php endwhile; ?>
<?php else: ?>
	<p><?php esc_html_e( 'Desculpe, nenhum post corresponde aos seus critérios.' ); ?></p>
<?php endif; ?>

<?php get_footer(); ?>

