<?php get_header();
$the_query = new WP_Query( array(
    'posts_per_page' => 12,
));
if ( $the_query->have_posts() ) {
    $i = 0;
    while ( $the_query->have_posts() ) { $the_query->the_post();
        $i++;
        if ($i == 1) { ?>
            <div class="container container--looping">
                <h3 class="titulo-sessao">
                    <?php
                    $categoria = get_the_category();
                    echo $categoria[0]->name; ?>
                    <div class="titulo-sessao__risca"></div>
                </h3>
            </div>
        <?php } 
        if ( $i == 1 ) { echo '<div class="container"><div class="row">'; } ?>
        <div class="col-sm-12 col-md-4">
            <?php card( get_the_title(), get_the_permalink(), get_the_post_thumbnail_url( '', 'thumb-card' ) ); ?>
        </div>
        <?php if ( $i == 3 ) { echo '</div></div><div class="container"><div class="row">'; }
    }
    echo '</div></div>';
}
get_footer(); ?>
