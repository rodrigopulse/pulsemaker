<?php function destaque($titulo, $link, $thumbMobile, $thumbDesktop) {
    if ( wp_is_mobile() ) {
        $thumb = $thumbMobile;
    } else {
        $thumb = $thumbDesktop;
    } 
    ?>
    <div class="destaque">
        <div class="destaque__conteudo">
            <a href="<?php echo $link; ?>">
                <h1 class="titulo-h1"><?php echo $titulo; ?></h1>
            </a>
        </div>
        <div class="destaque__over"></div>
        <div class="destaque__thumb" style="background-image: url('<?php echo $thumb; ?>');"></div>
    </div>
<?php }