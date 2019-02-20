<?php if( wp_is_mobile() ) {
    $thumbnail = get_the_post_thumbnail_url( '', 'post-thumb-mobile' );
} else {
    $thumbnail = get_the_post_thumbnail_url( '', 'post-thumb-desktop' );
} ?>
<div class="thumb-header-post" style="background-image: url('<?php echo $thumbnail; ?>');"></div>
<div class="post-container">
    <div class="post-container__content">
        <header>
            <h1 class="titulo-h1"><?php the_title(); ?></h1>
            <h2 class="titulo-h2"><?php the_excerpt(); ?></h2>
        </header>
        <article>
            <?php if ( have_posts() ) { while ( have_posts() ) { the_post();
                the_content();
            } } ?>
        </article>
        <!-- Begin Mailchimp Signup Form -->
        <div id="mc_embed_signup">
            <form action="https://pulsemaker.us19.list-manage.com/subscribe/post?u=5fa08c1057e3a7bd173b58d21&amp;id=819a631881" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                <div id="mc_embed_signup_scroll">
                    <h3 class="titulo-newsletter">Newsletter</h2>
                    <h4 class="subtitulo-newsletter">Assine nossa newsletter e fique por dentro do Mundo da Robótica e Arduino</h3>
                    <div class="mc-field-group">
                        <input type="email" value="" name="EMAIL" class="required email newsletter-campo-email" id="mce-EMAIL" placeholder="Seu melhor e-mail">
                    </div>
                    <div id="mce-responses" class="clear">
                        <div class="response" id="mce-error-response" style="display:none"></div>
                        <div class="response" id="mce-success-response" style="display:none"></div>
                    </div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_5fa08c1057e3a7bd173b58d21_819a631881" tabindex="-1" value=""></div>
                    <div class="clear">
                        <input type="submit" value="cadastrar" name="subscribe" id="mc-embedded-subscribe" class="button newsletter-enviar">
                    </div>
                </div>
            </form>
        </div>
        <script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
        <!--End mc_embed_signup-->
        <h3 class="titulo-h1">Comentários</h3>
        <?php comments_template(); ?>

    </div>
</div>


