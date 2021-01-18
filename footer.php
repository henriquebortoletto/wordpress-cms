	<!-- QUOTE FOOTER -->
	<section class="quote-footer">
		<div class="container">
			<blockquote class="quote-wrapper">
				<p>“o verdadeiro segredo da felicidade está em ter um genuíno interesse por todos os detalhes da vida cotidiana”</p>
				<cite>Willian Morris</cite>
			</blockquote>
		</div>
	</section>

	<!-- FOOTER -->
	<footer>
		<div class="footer-wrapper">
			<div class="container">
				<div class="grid-8 footer-historia">
					<h3>Nossa história</h3>
					<p>Quando iniciamos a Bikcraft queriamos apenas um produto que adoraríamos utilizar. Eramos apaixonados por pedalar e também por fazer as coisa em que nossas próprias mãos. Asssim surigiu um sonho na garagem da nossa casa.</p>
				</div>
				<div class="grid-4 footer-contato">
					<h3>Contato</h3>
					<ul>
						<li><a href="tel:+2199999999">- 21 9999-9999</a></li>
						<li><a href="mailto:contato@bikcraft.com">- contato@bikcraft.com</a></li>
						<li>- São Paulo - SP</li>
					</ul>
				</div>
				<div class="grid-4 footer-redes-sociais">
					<h3>Redes Sociais</h3>
					<ul>
						<li><a href="#" target="_blank"><img src="<?= get_template_directory_uri(); ?>/img/redes-sociais/facebook.svg" alt="Bickraft - Veja nosso perfil no Facebook"></a></li>
						<li><a href="#" target="_blank"><img src="<?= get_template_directory_uri(); ?>/img/redes-sociais/instagram.svg" alt="Bikcraft - Veja nosso perfil no Instagram"></a></li>
						<li><a href="#" target="_blank"><img src="<?= get_template_directory_uri(); ?>/img/redes-sociais/twitter.svg" alt="Bikcraft - Veja nosso perfil no Twitter"></a></li>
					</ul>
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
