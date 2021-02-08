<?php $portfolio = get_page_by_title( 'portfolio' ); ?>

<?php if( have_rows( 'slide_lista', $portfolio ) ): ?>
	<div data-slide="portfolio">
			<?php while( have_rows( 'slide_lista', $portfolio ) ): ?>
				<?php the_row(); ?>
				<ul class="portfolio-lista">
					<li class="grid-8"><img src="<?php the_sub_field( 'imagem_01', $portfolio ); ?>" alt="<?php the_sub_field( 'imagem_descricao_01', $portfolio ); ?>"></li>
					<li class="grid-8"><img src="<?php the_sub_field( 'imagem_02', $portfolio); ?>" alt="<?php the_sub_field( 'imagem_descricao_02', $portfolio ); ?>"></li>
					<li class="grid-16"><img src="<?php the_sub_field( 'imagem_03', $portfolio ); ?>" alt="<?php the_sub_field( 'imagem_descricao_03', $portfolio ); ?>"></li>
				</ul>
			<?php endwhile; ?>
	</div>
<?php else: ?>
	<p><?php esc_html_e( 'Não foram encontrados nenhuma lista de slide' ); ?></p>
<?php endif; ?>

<?php if ( !is_page( 'portfolio' ) ): ?>
	<div class="call">
		<p><?php the_field( 'call_to_action_portfolio', $portfolio ); ?></p>
		<a href="<?php bloginfo( 'url' ); ?>/portfolio/" class="btn btn-primario">Portfólio</a>
	</div>
<?php endif; ?>
