<?php get_header(); ?>

<div class="outer_section">
    <div class="container">

    <div class="row">
                
                    
                <?php

                while ( have_posts() ) : the_post(); ?>

                <div class="col-md-4">

                    <a href="<?php the_permalink(); ?>">
                            <div class="card">
                                <?php the_post_thumbnail(); ?>
                                    <div class="card-body">
                                        <h5 class="card-title"><?php the_title(); ?></h5>								
                                </div>
                            </div>
                    </a>
                    
                </div>

                <?php endwhile; ?>


    </div>

    </div>
</div>

<?php get_footer(); ?>








<a href="<?php the_permalink(); ?>">Read More</a>