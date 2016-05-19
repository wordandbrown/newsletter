get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php
		while ( have_posts() ) : the_post();
			echo get_field('whats_new');
			echo get_field('spotlighted_projects');
			echo get_field('process_updates');
			echo get_field('it_transformation_updates');
			echo get_field('shout_outs');
			echo get_field('upcoming_events');
			// get_template_part( 'template-parts/content', get_post_format() );

			// the_post_navigation();

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();