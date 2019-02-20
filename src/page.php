<?php get_header(); ?>
<div class="post-container post-container--sem-topo">
    <div class="post-container__content">
        <header>
            <h1 class="titulo-h1"><?php the_title(); ?></h1>
        </header>
        <article>
            <?php if ( have_posts() ) { while ( have_posts() ) { the_post();
                the_content();
            } } ?>
        </article>
    </div>
</div>
<?php get_footer(); ?>


