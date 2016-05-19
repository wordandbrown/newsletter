<nav class="dots">
    <div class="nav-wrapper">
        <ul class="nav">

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

                echo '<li>';
                    echo '<a href="#' . $field_name . '"><span>' . $field['label'] . '</span></a>';
                echo '</li>';

                }
            }
        }

    ?>

<?php
endwhile; // End of the loop.
?>

        </ul>
    </div>
</nav>


<!-- <nav class="dots">
    <div class="nav-wrapper">
        <ul class="nav">
            <li class="active">
                <a href="#welcome"><span>What's New</span></a>
            </li>
            <li class="">
                <a href="#projects"><span>Spotlighted Projects</span></a>
            </li>
            <li class="">
                <a href="#processupdates"><span>Process Updates</span></a>
            </li>
            <li class="">
                <a href="#transformation"><span>IT Transformation Updates</span></a>
            </li>
            <li class="">
                <a href="#shoutouts"><span>Shout Outs</span></a>
            </li>
            <li class="">
                <a href="#events"><span>Upcoming Events</span></a>
            </li>
        </ul>
    </div>
</nav> -->



