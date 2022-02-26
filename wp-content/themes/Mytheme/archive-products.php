<?php get_header(); ?>

<section class="banner_area">
	<img src="<?php echo get_template_directory_uri(); ?>/images/third.jpg" alt="Banner" class="banner_image">
    <h1> Our Products </h1>
</section>

<div class="product_archive_page">
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