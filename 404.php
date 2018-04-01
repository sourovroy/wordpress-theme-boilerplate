<?php
/**
 * The template for displaying 404 pages (not found)
 */

get_header(); ?>

<section class="error-404-section-wrap">
        <div class="container">
            <div class="clearfix">
                <div class="title">
                    <h1 class="error">
                        <span class="error-code">404</span>
                        <span class="error-text">NOT<br>FOUND</span>
                    </h1>
                </div>
                <div class="error-text">
                    <p>Sorry, it appears the page you ware looking for doesn't exit anymore or might have been
                        moved.<br> Please go to <a href="<?= home_url(); ?>">HOME</a> page</p>
                </div>
            </div>
        </div>
    </section>
<?php get_footer();
