<?php get_header(); ?>

<div class="container my-5">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        
        <div class="row">
            <div class="col-md-5">
                <?php if ( has_post_thumbnail() ) : ?>
                    <?php the_post_thumbnail('large', ['class' => 'img-fluid rounded shadow mb-4']); ?>
                <?php endif; ?>
            </div>
            
            <div class="col-md-7">
                <h1 class="display-4"><?php the_title(); ?></h1>
                <h3 class="text-primary h4"><?php the_field('job_title'); ?></h3>
                
                <p class="mb-0"><strong>Email:</strong></p>
                <p class="text-muted mb-4"><?php the_field('email_address'); ?></p>
                
                <hr>
                
                <div class="my-4">
                    <?php the_content(); ?>
                </div>
                
                <div class="d-flex align-items-center gap-3">
                    <a href="mailto:<?php the_field('email_address'); ?>" class="btn btn-primary px-4">
                        Send Email
                    </a>
                    <a href="<?php echo get_post_type_archive_link('staff_member'); ?>" class="btn btn-outline-secondary">
                        ← Back to Directory
                    </a>
                </div>
            </div>
        </div>

    <?php endwhile; endif; ?>
</div>

<?php get_footer(); ?>