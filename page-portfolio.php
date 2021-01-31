<?php /* Template Name: Pagina Portfolio */ ?>

<?php get_header(); ?>

<?php if ( have_posts() ): ?>
	<?php while( have_posts() ): ?>
		<?php the_post(); ?>

		<?php include 'inc/pages-intro.php'; ?>

		<!-- DEPOIMENTOS -->
		<section class="container" data-slide="quote" data-anime="1200">
			<blockquote class="quote-clientes">
				<p>“Pedalar sempre foi minha paixão, o que o pessoal da Bikcraft fez foi intensificar o meu amor por esta atividade. Recomendo á todos que amo.”</p>
				<cite>Barbara Moss</cite>
			</blockquote>
			<blockquote class="quote-clientes">
				<p>“Nada melhor do que dar um rolê com a minha Bikcraft na orla. Essa é a minha companheira mais fiel, nunca me traiu e está sempre a minha disposição”</p>
				<cite>Jhonny Rato</cite>
			</blockquote>
			<blockquote class="quote-clientes">
				<p>“Aqueles que ainda não possuem uma Bikcraft, não sabem o que estão perdendo. A precisão é absurda e a velocidade transcendental.”</p>
				<cite>Bernardo</cite>
			</blockquote>
		</section>

		<!-- PORTFOLIO -->
		<section class="portfolio page-portfolio" data-anime="1600">
			<div class="container">
				<?php include 'inc/slide-portfolio.php'; ?>
			</div>
		</section>

	<?php endwhile; ?>
<?php else: ?>
	<p><?php esc_html_e( 'Desculpe, nenhum post corresponde aos seus critérios.' ); ?></p>
<?php endif; ?>

<?php get_footer(); ?>
