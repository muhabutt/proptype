<?php
get_header();
?>

<main id="main">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
		the_content();
	endwhile; else: ?>
        <p>Sorry, no posts matched your criteria.</p>
	<?php endif; ?>
</main><!-- End #main -->

<?php get_footer() ?>
