<?php

get_header();
?>
<div class="container">
    <div class="grid grid-rows-1">
        <div class="grid grid-cols-2">
<?php
if (have_posts()):
    while (have_posts()):
        the_post();
        ?>
            <article>
                <h2><a href="<?= get_permalink() ?>"><?php the_title() ?></a></h2>
                <div><?php the_time( get_option( 'date_format' ) ); ?></div>
                <?php if (has_post_thumbnail() ): ?>
            <div>
                <?php the_post_thumbnail( 'medium' ); ?>
            </div>
            <div class="post-excerpt"><?php the_excerpt(); ?></div>
            <?php endif ?>
            </article>
        <?php
    endwhile;

else:
    ?> 
        <p>Aucun post n'a été trouvé</p>
    <?php
endif;
?>
        </div>
    </div>
</div>
<?php
get_footer();

// indentation optionnelle
