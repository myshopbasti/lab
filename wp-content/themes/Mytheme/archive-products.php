<?php get_header(); ?>

<div class="container">



<?php

        while ( have_posts() ) : the_post(); ?>

            <h2><?php the_title(); ?></h2>

            <p><?php the_content(); ?></p>
                
            <a href="<?php the_permalink(); ?>">Read More</a>
                
            <?php endwhile; ?>

	

</div>

<?php get_footer(); ?>