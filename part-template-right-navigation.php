<nav class="right">


<?php if (have_posts()) : while (have_posts()) : the_post(); $current_post = get_the_ID(); ?>

<?php endwhile; endif; ?>



    <?php $myPosts = new WP_Query( 'posts_per_page = 50' ); while ( $myPosts-> have_posts() ) : $myPosts-> the_post(); ?>

        <?php if (in_category('newsletter') ) : ?>



            <?php if ( $post->ID == $current_post ) { ?>
                <div id="curr-month-top" onclick="window.location='<?php the_permalink(); ?>'" ><h2><?php the_title(); ?></h2></div>
            <?php } ?>


                
       
        <?php endif; ?>      

    <?php endwhile; // end of the loop. ?>
    
    <ul>



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



