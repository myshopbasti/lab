<?php get_header(); ?>

<section class="banner_area">
	<img src="<?php echo get_template_directory_uri(); ?>/images/third.jpg" alt="Banner" class="banner_image">
	<h1><?php the_title(); ?></h1>
</section>


<div class="show_details">
	<div class="container">

		<div class="row">
			<div class="col-md-4">
				<div class="thumbhnail_product">
					<?php the_post_thumbnail(); ?>
				</div>
			</div>
			<div class="col-md-8">
				<h2><?php the_title(); ?></h2>
				<p><?php the_field('info_para'); ?></p>
				<h5>Available Colors</h5>
				<p><?php the_field('colors'); ?></p>
					
				<!-- tabs start -->
				<ul class="nav nav-tabs" id="myTab" role="tablist">
					<li class="nav-item" role="presentation">
						<a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Details</a>
					</li>
					<li class="nav-item" role="presentation">
						<a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Benefits & Usage</a>
					</li>
				</ul>
				<div class="tab-content" id="myTabContent">
					<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
						<p><?php the_field('product_details'); ?></p>
					</div>
					<div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
						<?php if(have_rows('benefits_usage')): ?>
							<?php while( have_rows('benefits_usage')): the_row();  ?>
								<p><?php the_sub_field('benefits_usage_data'); ?></p>
							<?php endwhile; ?>
						<?php endif; ?>		
					</div>
				</div>
				<!-- tabs ends -->

			</div>
		</div>

	</div>
</div>


<div class="related_products">
	<div class="container">

			<div class="row">
				<div class="col-md-12">
					<h3>Related <span style="color:#ab1e32;">Products</span></h3>
				</div>
			</div>
	
			<div class="row">				
				
			    <div class="col-md-12">
					<?php

					//get the taxonomy terms of custom post type
					$customTaxonomyTerms = wp_get_object_terms( $post->ID, 'types', array('fields' => 'ids') );

					//query arguments
					$args = array(
						'post_type' => 'products',
						'post_status' => 'publish',
						'posts_per_page' => 4,
						'orderby' => 'rand',
						'tax_query' => array(
							array(
								'taxonomy' => 'types',
								'field' => 'id',
								'terms' => $customTaxonomyTerms
							)
						),
						'post__not_in' => array ($post->ID),
					);

					//the query
					$relatedPosts = new WP_Query( $args );

					//loop through query
					if($relatedPosts->have_posts()){
						echo '<div class="owl-carousel owl-theme">';
						while($relatedPosts->have_posts()){ 
							$relatedPosts->the_post();
					?>
							<div class="item">
								<a href="<?php the_permalink(); ?>">
									<div class="card">
										<?php the_post_thumbnail(); ?>
										<div class="card-body">
											<h5 class="card-title"><?php the_title(); ?></h5>								
										</div>
									</div>
								</a>
							</div>
					<?php
						}
						echo '</div>';
					}else{
						//no posts found
					}

					//restore original post data
					wp_reset_postdata();

					?>
				
				</div>

    	    </div>		

	</div>

</div>	

<?php get_footer(); ?>