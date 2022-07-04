<?php

get_header();
?>
<div class="container">
    <div class="row">
        <div class="col">
<?php
if (have_posts()):

    the_post();
    ?>
        <article>
            <h2><?php the_title() ?></h2>
            <div><?php the_time( get_option( 'date_format' ) ); ?></div>
            <!-- <?php if (has_post_thumbnail() ): ?>
            <div>
                <?php the_post_thumbnail( 'medium' ); ?>
            </div>
            <?php endif ?> -->
            <p><?php the_content() ?></p>
            <!-- Affichage des catégories en bas d'article -->
            <?php the_terms( $post->ID, 'category', '<ul><li>', '</li><li>', '</li></ul>' ); ?>
            Affichage des tags
            <?php the_terms( $post->ID, 'post_tag', '<ul><li>', '</li><li>', '</li></ul>' ); ?>
        </article>
    <?php

endif;
?>
        </div>
    </div>
</div>
<?php
get_footer();

// indentation optionnelle
