<?php get_header(); ?>

<section class="introducao-blog" data-anime="800">
	<div class="container">
		<h1 data-anime="1200">Blog</h1>
		<p data-anime="1600">As principais notícias sobre Bicicletas</p>
	</div>
</section>

<div class="container blog-container" data-anime="2000">
	<?php if ( have_posts() ): ?>
		<?php while( have_posts() ): ?>
			<?php the_post(); ?>
			<article class="grid-1-3">
				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
					<div class="blog-thumbnail">
						<img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
					</div>
					<div class="blog-conteudo">
						<h2><?php the_title(); ?></h2>
					</div>
				</a>
			</article>
		<?php endwhile; ?>
		<?php wp_reset_query(); wp_reset_postdata(); ?>
		<div class="grid-16 blog-nav">
			<?php next_posts_link( 'Próximo' ); ?>
			<?php previous_posts_link( 'Anterior' ); ?>
		</div>
	<?php else: ?>
		<p><?php esc_html_e( 'Desculpe, nenhum post corresponde aos seus critérios.' )?></p>
	<?php endif; ?>
</div>

<?php get_footer(); ?>
