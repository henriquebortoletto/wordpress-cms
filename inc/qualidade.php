<?php $sobre = get_page_by_title( 'sobre' ); ?>

<section class="container qualidade">
	<h2 class="subtitulo"><?php the_field( 'titulo_qualidade', $sobre ); ?></h2>
	<img src="<?= get_template_directory_uri(); ?>/img/bikcraft-qualidade.svg" alt="Logo Bikcraft">
	<?php if ( have_rows( 'lista_qualidade', $sobre ) ): ?>
		<ul class="qualidade-lista">
			<?php while ( have_rows( 'lista_qualidade', $sobre ) ): ?>
				<?php the_row(); ?>
				<li class="grid-1-3">
					<h3><?php the_sub_field( 'titulo_lista', $sobre ); ?></h3>
					<p><?php the_sub_field( 'conteudo_lista', $sobre ); ?></p>
				</li>
			<?php endwhile; ?>
		</ul>
	<?php else: ?>
		<p><?php esc_html_e( 'Não foram encontrados nenhuma lista de qualidade' ); ?></p>
	<?php endif; ?>
	<?php if ( !is_page( 'sobre' ) ): ?>
		<div class="call">
			<p><?php the_field( 'call_to_action_qualidade', $sobre ); ?></p>
			<a href="<?php bloginfo( 'url' ); ?>/sobre/" class="btn btn-secundario">Sobre</a>
		</div>
	<?php endif; ?>
</section>
