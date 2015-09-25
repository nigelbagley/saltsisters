<?php

/*
	Template Name: Finalize Booking Page
*/

get_header();  ?>

<div class="main">

	<div class="booking-finalize-hero">
	<!-- <h1>Fill yo form out now or lose out on a once and life time trip muthafucka</h1> -->
	<div class="booking-form-container">
	<h3>Fill the form out below:</h3>
		<div class="form-trip-one">
		
		    <?php // Start the loop ?>
		    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

		      <!-- <h2><?php the_title(); ?></h2> -->
		      <?php the_content(); ?>

		    <?php endwhile; // end the loop?>
		</div>
		</div>
</div>
  <!-- </div> --> <!--/.containter -->
</div> <!-- /.main -->

<?php get_footer(); ?>