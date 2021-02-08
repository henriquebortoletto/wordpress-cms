<?php get_header(); ?>

<?php if ( have_posts() ): ?>
	<?php while( have_posts() ): ?>
		<?php the_post(); ?>
		<section class="introducao-single-blog" data-anime="800">
			<div class="container">
				<h1 data-anime="1200"><?php the_title(); ?></h1>
			</div>
		</section>
		<section class="container-single-post" data-anime="1600">
			<div class="container">
				<span class="single-post-category"><?= get_the_category()[0]->cat_name; ?></span>
				<?php the_content(); ?>
			</div>
		</section>
	<?php endwhile; ?>
<?php else: ?>
	<p><?php esc_html_e( 'Desculpe, nenhum post corresponde aos seus critérios.' )?></p>
<?php endif; ?>

<?php get_footer(); ?>
