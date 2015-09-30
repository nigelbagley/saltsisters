<?php

/*
	Template Name: Dates & Itineray Page
*/

get_header();  ?>

<div class="main">

  <div class="winter-page-hero">
  	<div class="dates">
  		<div class="date">
  			<h3>Date</h3>
  			<h4>DEC - DEC</h4>
  		</div>
  		<div class="days">
  			<h3>Days</h3>
  			<h4>8</h4>
  		</div>
  		<div class="price">
  			<h3>Price</h3>
  			<h4>$$$$</h4>
  		</div>
  		<div class="availabilty">
  			<h3>Availability</h3>
  			<h4>1</h4>
  		</div>
  		<div class="book-now">
  			<a href="http://localhost:8888/saltsisters/?page_id=34">Book Now</a>
  		</div>	
  	</div>
  </div>
    <?php // Start the loop ?>
    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
    	<div class="container">
    		<div class="dates-container">
    			<h1><?php the_field('video_title'); ?></h1>
    			<p><?php the_field('video_paragraph'); ?></p>
    			<iframe src="https://player.vimeo.com/video/76984499" width="700" height="394" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
    		</div>
    	</div>

    	<div class="filler-image"></div>
    	<?php the_content(); ?>
    	<div class="filler-image-sunset">
    		<h1><?php the_field('quote'); ?></h1>
    	</div>
    <?php endwhile; // end the loop?>
  <!-- </div> --> <!--/.containter -->
</div> <!-- /.main -->

<?php get_footer(); ?>