<?php

/*
	Template Name: Dates & Itineray Page
*/

get_header();  ?>

<div class="main">

  <div class="dates-hero">
</div>
  </div>
    <?php // Start the loop ?>
    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
    	<div class="container">
    		<div class="paradise-container">
    			<h1><?php the_field('video_title'); ?></h1>
    			<p><?php the_field('video_paragraph'); ?></p>
    			<!-- <iframe src="https://player.vimeo.com/video/76984499" width="700" height="394" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe> -->
    		</div>
    	</div>

    	<div class="paradise-filler-image"></div>
    	<?php the_content(); ?>
    	<div class="paradise-filler-image">
    		<h1><?php the_field('quote'); ?></h1>
    	</div>
    <?php endwhile; // end the loop?>
  <!-- </div> --> <!--/.containter -->
</div> <!-- /.main -->

<?php get_footer(); ?>
