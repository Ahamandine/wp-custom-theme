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
            <p><?php the_content() ?></p>
            <?php if (has_post_thumbnail() ): ?>
            <div>
                <?php the_post_thumbnail( 'medium' ); ?>
            </div>
            <?php endif ?>
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
