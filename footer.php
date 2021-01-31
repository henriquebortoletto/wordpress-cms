<?php $contato = get_page_by_title( 'contato' ); ?>

<style>
	.quote-footer {
		background-image: url(<?php the_field( 'bg_footer_quote', $contato ); ?>);
	}
</style>

	<!-- QUOTE FOOTER -->
	<section class="quote-footer">
		<div class="container">
			<blockquote class="quote-wrapper">
				<?php the_field( 'citacao_footer', $contato ); ?>
				<cite><?php the_field( 'autor_citacao_footer', $contato ); ?></cite>
			</blockquote>
		</div>
	</section>

	<!-- FOOTER -->
	<footer>
		<div class="footer-wrapper">
			<div class="container">
				<div class="grid-8 footer-historia">
					<h3>Nossa história</h3>
					<?php the_field( 'historia', $contato ); ?>
				</div>
				<div class="grid-4 footer-contato">
					<h3>Contato</h3>
					<ul>
						<li><a href="tel:<?php the_field( 'telefone', $contato ); ?>">- <?php the_field( 'telefone', $contato ); ?></a></li>
						<li><a href="mailto:<?php the_field( 'email', $contato ); ?>">- <?php the_field( 'email', $contato ); ?></a></li>
						<li>- <?php the_field( 'endereco', $contato ); ?></li>
					</ul>
				</div>
				<div class="grid-4 footer-redes-sociais">
					<h3>Redes Sociais</h3>
					<?php include 'inc/redes-sociais.php'; ?>
				</div>
			</div>
		</div>
		<div class="footer-copy">
			<div class="container">
				<span class="grid-16"><?php bloginfo( 'name' ); ?> &copy;&nbsp;<?= Date('Y'); ?> - Alguns direitos reservados.</span>
			</div>
		</div>
	</footer>

	<?php wp_footer(); ?>

	<script src="<?= get_template_directory_uri(); ?>/js/libs/simple-anime.js"></script>
	<script src="<?= get_template_directory_uri(); ?>/js/libs/simple-slide.js"></script>
	<script src="<?= get_template_directory_uri(); ?>/js/libs/simple-form.js"></script>
	<script src="<?= get_template_directory_uri(); ?>/js/script.js"></script>
</body>

</html>
