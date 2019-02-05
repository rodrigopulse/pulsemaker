<?php function card($titulo, $link, $thumb) { ?>
    <div class="card">
        <div class="card__thumb">
            <img src="<?php echo $thumb; ?>" alt="<?php echo $titulo; ?>">
        </div>
        <div class="card__conteudo">
            <a href="<?php echo $link; ?>">
                <h3 class="card__titulo"><?php echo $titulo; ?></h3>
            </a>
        </div>
        <div class="container">
            <a class="card__botao-leia-mais" href="<?php echo $link; ?>">Leia Mais</a>
        </div>
    </div>
<?php }