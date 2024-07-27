## :rocket: Sobre

Construção de um cms gerenciável utilizando recursos do wordpress e campos dinâmicos adicionados utilizando os `custom fields`.

### :package: Plugins

Para conteúdo totalmente gerenciável, o plugin principal para trazer esses recursos foi `acf`, que tem
versões gratuita e pro. Em algumas estruturas usadas neste modelo, a versão pro é necessária para funcionar,
como loops em campos personalizados. Exemplo:

```php
	<?php if ( have_rows( 'field_rows' ) ): ?>
			<?php while ( have_rows( 'field_rows' ) ): ?>
				<?php the_row(); ?>
				<?php the_sub_field( 'field', ); ?>
			<?php endwhile; ?>
	<?php else: ?>
		<p><?php esc_html_e( 'No items found' ); ?></p>
	<?php endif; ?>
```
