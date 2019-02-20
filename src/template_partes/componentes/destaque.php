<?php function destaque($titulo, $link, $thumbMobile, $thumbDesktop) {
    if ( wp_is_mobile() ) {
        $thumb = $thumbMobile;
    } else {
        $thumb = $thumbDesktop;
    } 
    ?>
    <div class="destaque">
        <a href="<?php echo $link; ?>">
            <div class="destaque__conteudo">
                <h1 class="titulo-h1"><?php echo $titulo; ?></h1>
            </div>
            <div class="destaque__over"></div>
            <div class="destaque__thumb" style="background-image: url('<?php echo $thumb; ?>');"></div>
        </a>
    </div>
<?php }