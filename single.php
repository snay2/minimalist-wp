<?php get_header(); ?>

    <?php the_post(); ?>
    <section>
    <div <?php post_class('post-single'); ?> id="post-<?php the_ID(); ?>">
        <h2 class="title"><?php the_title(); ?></h2>
        <div class="entry">
            <p><?php the_content(); ?></p>
        </div>
        <p><small>Posted on <?php the_time('F jS, Y') ?></small></p>
    </div>
    </section>

<?php get_footer(); ?>
