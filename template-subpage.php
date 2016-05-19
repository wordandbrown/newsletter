<?php 
/* Template Name: Subpage */ 

get_header();
?>

<main role="main" id="one-column-content">

<h1><?php the_title(); ?></h1>

<?php if (have_posts()): while (have_posts()) : the_post(); ?>
					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						<?php the_content(); ?>
					</article>
				<?php endwhile; else: 
					echo '<p>Sorry, no posts matched your criteria.</p>';
					endif; ?>


</main>	

<?php 
get_footer();
?>

