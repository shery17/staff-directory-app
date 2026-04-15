<?php get_header(); ?>
<div class="container my-5">
    <h1 class="mb-4 text-center">Our Team</h1>
    <div class="row">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow-sm text-center">
                    <?php the_post_thumbnail('medium', ['class' => 'card-img-top', 'style' => 'height:200px; object-fit:cover;']); ?>
                    <div class="card-body">
                        <h5 class="card-title"><?php the_title(); ?></h5>
                        <p class="text-primary mb-1"><?php the_field('job_title'); ?></p>
                        <p class="badge bg-secondary"><?php echo strip_tags(get_the_term_list(get_the_ID(), 'department', '', ', ')); ?></p>
                        <div class="mt-3">
                            <a href="<?php the_permalink(); ?>" class="btn btn-sm btn-outline-dark">View Profile</a>
                        </div>
                    </div>
                </div>
            </div>
        <?php endwhile; endif; ?>
    </div>
</div>
<?php get_footer(); ?>