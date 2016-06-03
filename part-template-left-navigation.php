<nav id="left">

    <a id="logo" href="index.htm">
        <h1>IT Newsletter</h1>
        <!-- <h2>#WeAreIT</h2> -->
    </a>

    <ul>


<?php if (have_posts()) : while (have_posts()) : the_post(); $current_post = get_the_ID(); ?>

<?php endwhile; endif; ?>



    <?php $myPosts = new WP_Query( 'posts_per_page = 50' ); while ( $myPosts-> have_posts() ) : $myPosts-> the_post(); ?>

        <?php if (in_category('newsletter') ) : ?>

            <?php if ( $post->ID == $current_post ) { ?>
                <li id="curr-month" onclick="window.location='<?php the_permalink(); ?>'" ><h2><?php the_title(); ?></h2></li>
            <?php } else { ?>
                <li onclick="window.location='<?php the_permalink(); ?>'" ><h2><?php the_title(); ?></h2></li>
            <?php } ?>


                
       
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



