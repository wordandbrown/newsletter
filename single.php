<?php get_header(); ?>

	<?php get_template_part('part-template-left-navigation'); ?>

	<?php get_template_part('part-template-right-navigation'); ?>

	<div class="wrapper">

		<?php
		while ( have_posts() ) : the_post();

	        $fields = get_fields();

	        if( $fields['whats_new'] != "" || $fields['spotlighted_projects'] != "" ) {
	            foreach( $fields as $field_name => $value ) {

	                // get_field_object( $field_name, $post_id, $options )
	                // $value has already been loaded for us, no point to load it again in the get_field_object function
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
	        } else {
			        	echo '<section style="min-height:400px;">';
			        	    echo '<div class="section">';
			        	    	echo '<h1>' . get_the_title() . '</h1>';
			        	    	echo '<p style="margin-top:30px;">Coming soon...</p>';
			        	    echo '</div>';
			        	echo '</section>';
			        }

		endwhile; // End of the loop.
		?>



<?php

get_footer();



