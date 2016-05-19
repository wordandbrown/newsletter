<nav id="left">

    <a id="logo" href="index.htm">
        <h1>IT Newsletter</h1>
        <!-- <h2>#WeAreIT</h2> -->
    </a>

    <ul>

    <!-- <?php debug_to_console( $post->$GET ); ?> -->

    <?php while ( have_posts() ) : the_post(); ?>

        <?php if (in_category('newsletter') ) : ?>


                 <?php


$fields = get_fields();

if( $fields )
{
    foreach( $fields as $field_name => $value )
    {
        // get_field_object( $field_name, $post_id, $options )
        // - $value has already been loaded for us, no point to load it again in the get_field_object function
        $field = get_field_object($field_name, false, array('load_value' => false));

        echo '<div>';
            echo '<h3>' . $field['label'] . '</h3>';
        echo '</div>';
    }
}

?>

                 
                <!-- <li onclick="window.location='<?php the_permalink(); ?>'" ><h2><?php the_title(); ?></h2></li> -->
       
        <?php endif; ?>      

    <?php endwhile; // end of the loop. ?>
    

    </ul>


<!--     <ul>
        <li id="curr-month" onclick="window.location='april.htm'">
            <h2>April 2016</h2>
        </li>
        <li onclick="window.location='march.htm'">
            <h2>March 2016</h2>
        </li>
        <li onclick="window.location='february.htm'">
            <h2>February 2016</h2>
        </li>
        <li onclick="window.location='january.htm'">
            <h2>January 2016</h2>
        </li>
        <li onclick="window.location='december.htm'">
            <h2>December 2015</h2>
        </li>
        <li onclick="window.location='november.htm'">
            <h2>November 2015</h2>
        </li>
        <li onclick="window.location='october.htm'">
            <h2>October 2015</h2>
        </li>
        <li onclick="window.location='september.htm'">
            <h2>September 2015</h2>
        </li>
        <li onclick="window.location='august.htm'">
            <h2>August 2015</h2>
        </li>
        <li onclick="window.location='july.htm'">
            <h2>July 2015</h2>
        </li>
    </ul> -->
</nav>



