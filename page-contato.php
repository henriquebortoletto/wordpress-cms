<?php /* Template Name: Pagina Contato */ ?>

<?php get_header(); ?>

<?php if ( have_posts() ): ?>
	<?php while ( have_posts() ): ?>
		<?php the_post(); ?>

		<?php include 'inc/pages-intro.php'; ?>

		<!-- ORÇAMENTO -->
		<section class="orcamento-contato" data-anime="1200">
			<div class="container">
				<div class="grid-8">
					<form action="./enviar.php" method="POST" id="form-orcamento" class="form-contato form-php">
						<div class="form-group">
							<label for="nome">Nome</label>
							<input type="text" name="nome" id="nome" autocomplete="off" required>
						</div>
						<div class="form-group">
							<label for="email">E-mail</label>
							<input type="email" name="email" id="email" autocomplete="off" required>
						</div>
						<div class="form-group">
							<label for="telefone">Telefone</label>
							<input type="text" name="telefone" id="telefone" autocomplete="off" required>
						</div>
						<div class="form-group no-robot">
							<label for="no-robot-frase" class="no-robot">Se você não é um robô, deixe em branco.</label>
							<input type="text" id="no-robot-frase" class="no-robot" name="leaveblank">
						</div>
						<div class="form-group no-robot">
							<label for="no-robot-frase" class="no-robot">Se você não é um robô, não mude este campo.</label>
							<input type="text" id="no-robot-frase" class="no-robot" name="dontchange" value="https://">
						</div>
						<div class="form-group">
							<label for="especificacoes">Especificações</label>
							<textarea name="especificacoes" id="especificacoes" cols="30" rows="10" required></textarea>
						</div>
						<button type="submit" id="enviar" name="enviar" class="btn btn-enviar">Enviar</button>
					</form>
				</div>
				<div class="grid-8 orcamento-redes">
					<h3>Dados</h3>
					<span>+55 21 99999-9999</span>
					<span>orcamento@bikcraft.com</span>
					<span>Rua Ali perto, Barueri</span>
					<span>São Paulo - Brasil</span>
					<h3>Redes sociais</h3>
					<ul>
						<li><a href="#" target="_blank"><img src="<?= get_template_directory_uri(); ?>/img/redes-sociais/facebook.svg" alt="Bickraft - Veja nosso perfil no Facebook"></a></li>
						<li><a href="#" target="_blank"><img src="<?= get_template_directory_uri(); ?>/img/redes-sociais/instagram.svg" alt="Bikcraft - Veja nosso perfil no Instagram"></a></li>
						<li><a href="#" target="_blank"><img src="<?= get_template_directory_uri(); ?>/img/redes-sociais/twitter.svg" alt="Bikcraft - Veja nosso perfil no Twitter"></a></li>
					</ul>
				</div>
			</div>
		</section>

		<!-- MAPA -->
		<section class="mapa" data-anime="1600">
			<div class="container">
				<div class="grid-16">
					<a href="https://google.com.br/maps" target="_blank"><img src="<?= get_template_directory_uri(); ?>/img/endereco-bikcraft.jpg" alt="Endereço Bikcraft"></a>
				</div>
			</div>
		</section>

	<?php endwhile; ?>
<?php else: ?>
	<p><?php esc_html_e( 'Desculpe, nenhum post corresponde aos seus critérios.' ); ?></p>
<?php endif; ?>

<?php get_footer(); ?>
