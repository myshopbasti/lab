<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
  
get_header(); ?>
  
    <div id="primary" class="content-area">
        <div class="container" role="main">
  
        <?php
        // Start the loop.
        while ( have_posts() ) : the_post(); ?>

            <h2><?php the_title(); ?></h2>

            <p><?php the_content(); ?></p>
                
                <?php
            
  
        // End the loop.
        endwhile;
        ?>
  
        </div><!-- .site-main -->
    </div><!-- .content-area -->
  
<?php get_footer(); ?>