## :rocket: Sobre

Construção de um cms gerenciável através de funcionalidades do <a href="https://worpdress.org" target="_blank">wordpress</a> e campos dinâmicos adicionados na interface feito com plugin <a href="https://www.advancedcustomfields.com/" target="_blank">Advanced Custom Fields</a>.

---

### :package: Plugins

Para o conteúdo totalmente gerenciável o plugin principal para trazer essas funcionalidades foi o `acf`, que possui
versões free e pro. Em algumas estruturas utilizados nesse template precisa-se da versão pro para o funcionamento,
como loop's em campos personalizados. Exemplo:

```php
	<?php if ( have_rows( 'field_rows' ) ): ?>
			<?php while ( have_rows( 'field_rows' ) ): ?>
				<?php the_row(); ?>
				<?php the_sub_field( 'field', ); ?>
			<?php endwhile; ?>
	<?php else: ?>
		<p><?php esc_html_e( 'Não foram encontrado nenhum item' ); ?></p>
	<?php endif; ?>
```
---
