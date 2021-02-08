<?php $contato = get_page_by_title( 'contato' ); ?>
<?php $produtos = get_page_by_title( 'produto' ); ?>

<!-- ORÇAMENTO -->
<section class="orcamento">
	<div class="container">
		<h2 class="subtitulo">Orçamento</h2>
		<div class="grid-8">
			<form action="<?php bloginfo( 'url' ); ?>/enviar.php" method="POST" id="form-orcamento" class="form form-php">
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
			<span><?php the_field( 'telefone', $contato ); ?></span>
			<span><?php the_field( 'email', $contato ); ?></span>
			<?php the_field( 'items_orcamento', $produtos ); ?>
		</div>
	</div>
</section>
