<?php get_header(); ?>

	<?php get_template_part('part-template-left-navigation'); ?>

	<?php get_template_part('part-template-right-navigation'); ?>

	<div class="wrapper">

		<?php
		while ( have_posts() ) : the_post(); ?>

		    <section id="whats_new">
		        <div class="section">

					<?php echo get_field('whats_new'); ?>

				</div>
			</section>
			<section id="spotlighted_projects">
		        <div class="section">

					<?php echo get_field('spotlighted_projects'); ?>

				</div>
			</section>
			<section id="process_updates">
		        <div class="section">

					<?php echo get_field('process_updates'); ?>

				</div>
			</section>

		    <section id="it_transformation_updates">
		        <div class="section">

					<?php echo get_field('it_transformation_updates'); ?>

				</div>
			</section>
			<section id="shout_outs">
		        <div class="section">

					<?php echo get_field('shout_outs'); ?>

				</div>
			</section>
			<section id="upcoming_events">
		        <div class="section">

					<?php echo get_field('upcoming_events'); ?>

				</div>
			</section>


			

<!-- 			echo get_field('spotlighted_projects');
			echo get_field('process_updates');
			echo get_field('it_transformation_updates');
			echo get_field('shout_outs');
			echo get_field('upcoming_events');
			// get_template_part( 'template-parts/content', get_post_format() );

			// the_post_navigation(); -->

		<?php
		endwhile; // End of the loop.
		?>

	</div><!-- .wrapper -->

<?php

get_footer();



