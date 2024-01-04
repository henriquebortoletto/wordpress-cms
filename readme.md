## :rocket: Sobre

Construção de um cms gerenciável através de funcionalidades do <a href="https://worpdress.org" target="_blank">wordpress</a> e campos dinâmicos adicionados na interface feito com plugin <a href="https://www.advancedcustomfields.com/" target="_blank">Advanced Custom Fields</a>.

### :bike: Primeiros passos

1. Baixar o <a href="https://worpdress.org" target="_blank">wordpress</a> e descompactar todos os arquivos em um servidor local ou dentro de uma hospedagem.

2. Criar um banco de dados no seu phpmyadmin do seu serviço para o wordpress ter acesso a essa base, para isso precisará criar um(a):

- `Nome do banco`

- `Usuário do banco`

- `Senha do banco`

3. Acessar a endereço do site (https://localhost) do servidor onde está o projeto e iniciar os passos de instalação colocando as credenciais do banco
   definidos anteriormente.

4. Criar um usuário e senha para logar no painel do dashboard.

5. Clonar o repositório com `git clone` colocando todos esse arquivos dentro da estrutura do wordpress, no caminho até themes.

```txt
/wp-content/themes/rest
```

6. Com os arquivos dentro de themes, basta ativá-lo o tema dentro do painel do <a href="https://worpdress.org" target="_blank">wordpress</a> em

```txt
Aparência > Temas > Ativar Tema.
```

---

### :file_folder: Gerar páginas e posts

Para esse template funcionar além dos arquivos é preciso importar dentro do <a href="https://worpdress.org" target="_blank">wordpress</a> todas as páginas,
post e custom post types, para isso faça os passos abaixo:

1. Na raíz do projeto dentro da pasta dump contem um arquivo xml com todas as nossas importações para subir no painel do wordpress;

2. Para ativa-lo entre no painel do wordpress, instale o importador nos passos abaixo;

   ```txt
   Ferramentas > Importar > Wordpress (Instalar agora)
   ```

3. Depois de instalar clique em `Rodar importador`, `escolher arquivo` e `Enviar arquivo e importar`;

4. Para finalizar verifique se a página principal e página de post estão setadas corretamente como;

   ```txt
   Configurações > Leitura > Uma página estática (selecionar abaixo)
   ```

5. `Página inicial` deve estar setada como `Página Principal`;

6. `Página de posts` deve estar setada como `Blog`;

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

by [Henrique Bortoletto](https://github.com.br) :wave:
