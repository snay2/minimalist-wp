<?php get_header(); ?>

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <section>
        <a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
        <h4>Posted on <?php the_time('F jS, Y') ?></h4>
        <p><?php the_content(__('(more...)')); ?></p>
    </section>
    <?php endwhile; else: ?>
        <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
    <?php endif; ?>

<?php get_footer(); ?>

