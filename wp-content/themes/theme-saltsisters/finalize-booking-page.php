<?php

/*
	Template Name: Finalize Booking Page
*/

get_header();  ?>

<div class="main">

	<div class="winter-page-hero">
	<!-- <h1>Fill yo form out now or lose out on a once and life time trip muthafucka</h1> -->
		<div class="form-trip-one">
		<h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere, quam?</h3>
		    <?php // Start the loop ?>
		    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

		      <!-- <h2><?php the_title(); ?></h2> -->
		      <?php the_content(); ?>

		    <?php endwhile; // end the loop?>
		</div>
	</div>
  <!-- </div> --> <!--/.containter -->
</div> <!-- /.main -->

<?php get_footer(); ?>