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
    </div>
</div>


