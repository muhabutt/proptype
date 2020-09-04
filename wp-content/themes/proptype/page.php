<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>

<main id="main">
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-5 mb-5">
	            <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
		            the_content();
	            endwhile; else: ?>
		            <p>Sorry, no posts matched your criteria.</p>
	            <?php endif; ?>
            </div>
        </div>
    </div>
</main><!-- End #main -->

<?php get_footer(); ?>
