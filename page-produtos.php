<?php /* Template Name: Pagina Produtos */ ?>

<?php get_header(); ?>

<?php if ( have_posts() ): ?>
	<?php while( have_posts() ): ?>
		<?php the_post(); ?>

		<?php // include __DIR__ . "/inc/intro.php"; ?>

		<!-- INTRO -->
		<section class="introducao-padrao produto-banner">
			<div class="container">
				<h1 data-anime="400">Produtos</h1>
				<p data-anime="800">conheça todos os nossos produtos</p>
			</div>
		</section>

		<!-- PRODUTO PASSEIO -->
		<section class="container produto-item" data-anime="1200">
			<div class="grid-11">
				<img src="<?= get_template_directory_uri(); ?>/img/produtos/bikcraft-passeio-1.jpg" alt="Bikcraft - Bicicleta Passeio">
				<h2>Passeio</h2>
			</div>
			<div class="grid-5 produto-icone">
				<img src="<?= get_template_directory_uri(); ?>/img/produtos/passeio.svg" alt="Bikcraft - Bicicleta Passeio">
			</div>
			<div class="grid-8">
				<img src="<?= get_template_directory_uri(); ?>/img/produtos/bikcraft-passeio-2.jpg" alt="Bickraft - Bicicleta Passeio">
			</div>
			<div class="grid-8 produto-info">
				<p>Muito melhor do que passear pela orla a vidros fechados. A Bikcraft Passeio é uma bicicleta que une conforto e praticidade para o seu dia a dia. Você nunca mais vai querer saber de outra.</p>
				<ul>
					<li>Conforto</li>
					<li>Velocidade</li>
					<li>Design</li>
					<li>Versatilidade</li>
				</ul>
			</div>
		</section>

		<!-- PRODUTO ESPORTE -->
		<section class="container produto-item" data-anime="1600">
			<div class="grid-11">
				<img src="<?= get_template_directory_uri(); ?>/img/produtos/bikcraft-esporte-1.jpg" alt="Bikcraft - Bicicleta Esporte">
				<h2>Esporte</h2>
			</div>
			<div class="grid-5 produto-icone">
				<img src="<?= get_template_directory_uri(); ?>/img/produtos/esporte.svg" alt="Bikcraft - Bicicleta Esporte">
			</div>
			<div class="grid-8">
				<img src="<?= get_template_directory_uri(); ?>/img/produtos/bikcraft-esporte-2.jpg" alt="Bickraft - Bicicleta Esporte">
			</div>
			<div class="grid-8 produto-info">
				<p>Muito melhor do que passear pela orla a vidros fechados. A Bikcraft Passeio é uma bicicleta que une conforto e praticidade para o seu dia a dia. Você nunca mais vai querer saber de outra.</p>
				<ul>
					<li>Conforto</li>
					<li>Velocidade</li>
					<li>Design</li>
					<li>Versatilidade</li>
				</ul>
			</div>
		</section>

		<!-- PRODUTO RETRÔ -->
		<section class="container produto-item">
			<div class="grid-11">
				<img src="<?= get_template_directory_uri(); ?>/img/produtos/bikcraft-retro-1.jpg" alt="Bikcraft - Bicicleta Retrô">
				<h2>Retrô</h2>
			</div>
			<div class="grid-5 produto-icone">
				<img src="<?= get_template_directory_uri(); ?>/img/produtos/retro.svg" alt="Bikcraft - Bicicleta Retrô">
			</div>
			<div class="grid-8">
				<img src="<?= get_template_directory_uri(); ?>/img/produtos/bikcraft-retro-2.jpg" alt="Bickraft - Bicicleta Retrô">
			</div>
			<div class="grid-8 produto-info">
				<p>Muito melhor do que passear pela orla a vidros fechados. A Bikcraft Passeio é uma bicicleta que une conforto e praticidade para o seu dia a dia. Você nunca mais vai querer saber de outra.</p>
				<ul>
					<li>Conforto</li>
					<li>Velocidade</li>
					<li>Design</li>
					<li>Versatilidade</li>
				</ul>
			</div>
		</section>

		<!-- ORÇAMENTO -->
		<section class="orcamento">
			<div class="container">
				<h2 class="subtitulo">Orçamento</h2>
				<div class="grid-8">
					<form action="./enviar.php" method="POST" id="form-orcamento" class="form form-php">
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
						<button type="submit" id="enviar" name="enviar" class=" btn btn-enviar">Enviar</button>
					</form>
				</div>
				<div class="grid-8 orcamento-dados">
					<h3>Dados</h3>
					<span>+55 21 99999-9999</span>
					<span>orcamento@bikcraft.com</span>
					<h3>Monte sua Bikcraft</h3>
					<p>Escolha as especificações</p>
					<ul>
						<li>- Cores</li>
						<li>- Estilo</li>
						<li>- Acessórios</li>
						<li>- Medidas</li>
						<li>- E outros</li>
					</ul>
				</div>
			</div>
		</section>

	<?php endwhile; ?>
<?php else: ?>
	<p><?php esc_html_e( 'Desculpe, nenhum post corresponde aos seus critérios.' ); ?></p>
<?php endif; ?>

<?php get_footer(); ?>
