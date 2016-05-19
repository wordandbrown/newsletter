<?php get_header(); ?>

	<?php get_template_part('part-template-left-navigation'); ?>

	<?php get_template_part('part-template-right-navigation'); ?>

	<div class="wrapper">

		<?php
		while ( have_posts() ) : the_post(); ?>

		    <?php

		        $fields = get_fields();

		        if( $fields )
		        {
		            foreach( $fields as $field_name => $value )
		            {
		                // get_field_object( $field_name, $post_id, $options )
		                // - $value has already been loaded for us, no point to load it again in the get_field_object function
		                $field = get_field_object($field_name, false, array('load_value' => false));

		                $currfiels = get_field($field_name);

		                if ($currfiels) {

		                echo '<section id="' . $field_name . '">';
		                    echo '<div class="section">';
		                    	echo '<h1>' . $field['label'] . '</h1>';
		                    	echo get_field($field_name);
		                    echo '</div>';
		                echo '</section>';

		            	}
		            }
		        }

		    ?>

		<?php
		endwhile; // End of the loop.
		?>

	</div><!-- .wrapper -->

<?php

get_footer();



