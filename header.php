<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="apple-touch-icon" sizes="180x180" href="<?php bloginfo( 'template_url' ); ?>/assets/imagens/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="<?php bloginfo( 'template_url' ); ?>/assets/imagens/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="<?php bloginfo( 'template_url' ); ?>/assets/imagens/favicon-16x16.png">
	<link rel="manifest" href="<?php bloginfo( 'template_url' ); ?>/site.webmanifest">
	<link rel="mask-icon" href="<?php bloginfo( 'template_url' ); ?>/assets/imagens/safari-pinned-tab.svg" color="#472462">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="theme-color" content="#472462">
	<?php wp_head(); ?>
	<!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
		new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
		j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
		'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
		})(window,document,'script','dataLayer','GTM-M7SNNDT');</script>
	<!-- Google Adsense -->
	<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
</head>
<body <?php body_class(); ?>>
<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-M7SNNDT"
	height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<header class="header-principal">
	<div class="container">
		<div class="header-principal__hamburguer">
			<nav role="navigation">
			<div id="menuToggle">
				<input type="checkbox" />
				<span></span>
				<span></span>
				<span></span>
				<?php wp_nav_menu( array( 
					'theme_location' 	=> 'header-menu',
					'container'			=> 'ul',
					'menu_id'		=> 'menu'
				) ); ?>
			</div>
			</nav>
		</div>
		<div class="header-principal__logo">
			<a href="<?php bloginfo('url'); ?>">
				<img src="<?php bloginfo( 'template_url' ); ?>/assets/imagens/logo-pulse-branco.svg" alt="Pulse Maker">
			</a>
		</div>
	</div><!--.container-->
</header>
