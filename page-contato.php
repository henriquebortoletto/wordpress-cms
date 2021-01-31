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
					<form action="<?= get_template_directory_uri(); ?>/enviar.php" method="POST" id="form-orcamento" class="form-contato form-php">
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
					<span><?php the_field( 'telefone' ); ?></span>
					<span><?php the_field( 'email' ); ?></span>
					<span><?php the_field( 'endereco' ); ?></span>
					<span><?php the_field( 'estado' ); ?></span>
					<h3>Redes sociais</h3>
					<?php include 'inc/redes-sociais.php'; ?>
				</div>
			</div>
		</section>

		<!-- MAPA -->
		<section class="mapa" data-anime="1600">
			<div class="container">
				<div class="grid-16">
					<a href="<?php the_field( 'link_mapa' ); ?>" target="_blank">
						<img src="<?php the_field( 'imagem_mapa' ); ?>" alt="<?php the_field( 'alt_mapa' ); ?>">
					</a>
				</div>
			</div>
		</section>

	<?php endwhile; ?>
<?php else: ?>
	<p><?php esc_html_e( 'Desculpe, nenhum post corresponde aos seus critérios.' ); ?></p>
<?php endif; ?>

<?php get_footer(); ?>
