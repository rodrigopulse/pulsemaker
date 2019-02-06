<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="theme-color" content="#472462">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header class="header-principal">
	<div class="container">
		<div class="header-principal__hamburguer">
			<button class="header-principal__hamburguer-botao">
				<i class="material-icons">menu</i>
			</button>
		</div>
		<div class="header-principal__logo">
			<img src="<?php bloginfo( 'template_url' ); ?>/assets/imagens/logo-pulse-branco.svg" alt="Pulse Maker">
		</div>
		<?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
	</div><!--.container-->
</header>
