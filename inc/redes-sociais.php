<?php $contato = get_page_by_title( 'contato' ); ?>

<?php if( have_rows( 'redes_sociais', $contato ) ): ?>
	<ul>
		<?php while( have_rows( 'redes_sociais', $contato ) ): ?>
			<?php the_row(); ?>
			<li>
				<a href="<?php the_sub_field( 'link_rede_social', $contato ); ?>" target="_blank">
					<img src="<?php the_sub_field( 'icone_rede_social', $contato ); ?>" alt="<?php the_sub_field( 'alt_icone_rede_social', $contato ); ?>">
				</a>
			</li>
		<?php endwhile; ?>
	</ul>
<?php else: ?>
	<p><?php esc_html_e( 'Desculpe, nenhum post corresponde aos seus critérios.' ); ?></p>
<?php endif; ?>
