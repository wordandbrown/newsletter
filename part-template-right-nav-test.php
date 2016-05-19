<nav id="left">

    <a id="logo" href="index.htm">
        <h1>IT Newsletter</h1>
        <!-- <h2>#WeAreIT</h2> -->
    </a>

    <ul>

    <!-- <?php debug_to_console( $post->$GET ); ?> -->

    <?php while ( have_posts() ) : the_post(); ?>

        <?php if (in_category('newsletter') ) : ?>

                
                 
                 <?php $postid = get_the_ID(); ?>

                 <?php echo $postid ?>


                 <?php

  $mykey = get_post_custom_values($postid);
  


$arrlength = count($mykey);

for($x = 0; $x < $arrlength; $x++) {
    echo $mykey[$x];
    echo "<br>";
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



