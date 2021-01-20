<!-- INTRO -->
<section class="introducao-padrao <?= strtolower( get_the_title() ); ?>-banner">
	<div class="container">
		<h1 data-anime="400"><?php the_title(); ?></h1>
		<p data-anime="800"><?php the_field( 'descricao_banner_padrao' ); ?></p>
	</div>
</section>
