## :rocket: About

Construction of a manageable cms using wordpress features and dynamic fields added to the interface using the `Advanced Custom Fields`.

### :package: Plugins

For fully manageable content, the main plugin to bring these features was `acf`, which has
free and pro versions. In some structures used in this template, the pro version is needed to work,
like loop's in custom fields. Example:

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
