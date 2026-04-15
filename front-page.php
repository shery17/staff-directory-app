<?php get_header(); ?>

<header class="bg-dark text-white py-5">
    <div class="container py-5 text-center">
        <h1 class="display-4 fw-bold">Staff Directory <span class="text-primary">App</span></h1>
        <p class="lead mb-4">A custom-built WordPress solution for managing and displaying corporate team structures.</p>
        <a href="<?php echo get_post_type_archive_link('staff_member'); ?>" class="btn btn-primary btn-lg px-5">Launch App</a>
    </div>
</header>

<section class="py-5">
    <div class="container">
        <div class="row g-4 text-center">
            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-sm p-4">
                    <div class="h1 mb-3 text-primary">⚙️</div>
                    <h4>Custom Post Types</h4>
                    <p class="text-muted small">Registered a 'Staff' CPT and 'Department' taxonomy for structured data management.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-sm p-4">
                    <div class="h1 mb-3 text-primary">💎</div>
                    <h4>ACF Integration</h4>
                    <p class="text-muted small">Implemented Advanced Custom Fields for job titles and direct contact information.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-sm p-4">
                    <div class="h1 mb-3 text-primary">🎨</div>
                    <h4>Bootstrap 5</h4>
                    <p class="text-muted small">Built with a fully responsive mobile-first grid and customized WordPress templates.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="bg-light py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <h2 class="text-center mb-4">How it works</h2>
                <ul class="list-group list-group-flush shadow-sm rounded">
                    <li class="list-group-item p-3">✅ <strong>Dynamic Archives:</strong> Automatic listing of all staff members using custom PHP loops.</li>
                    <li class="list-group-item p-3">✅ <strong>Filtered Views:</strong> Departments automatically group team members using Taxonomy logic.</li>
                    <li class="list-group-item p-3">✅ <strong>Profile Detail:</strong> Dedicated single-post templates for deep dives into staff bios.</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>