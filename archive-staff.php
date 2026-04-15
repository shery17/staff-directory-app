<?php get_header(); ?>
<main class="staff-grid">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <article class="staff-card">
            <?php the_post_thumbnail('thumbnail'); ?>
            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <p><strong><?php echo get_field('job_title'); ?></strong></p>
        </article>
    <?php endwhile; endif; ?>
</main>
<?php get_footer(); ?>