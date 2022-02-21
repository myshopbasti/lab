<?php get_header(); ?>

<div class="container">

	<h1><?php the_title(); ?></h1>

	<?php the_post_thumbnail(); ?>

	<p><?php the_content(); ?></p>

</div>

<?php get_footer(); ?>