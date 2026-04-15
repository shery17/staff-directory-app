<?php get_header(); ?>
<div class="staff-profile">
    <h1><?php the_title(); ?></h1>
    <h3>Role: <?php echo get_field('job_title'); ?></h3>
    <div class="bio"><?php the_content(); ?></div>
</div>
<?php get_footer(); ?>