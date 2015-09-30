<?php

/*
	Template Name: Contact-page
*/

get_header();  ?>

<div class="main">

  <div class="about-page-hero">
  	
  </div>
	<div class="container">
	<div class="contact-container">
		<div class="contact-map">
			<h2>You could be here:</h2>
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30038.848256327936!2d-70.424198!3d19.7612704!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8eae1d6fd62fb20b%3A0x3400209e5bc29d24!2sCabarete%2C+Dominican+Republic!5e0!3m2!1sen!2sca!4v1443230536016" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
		</div>
		<div class="contact-info">
		
		
    <?php // Start the loop ?>
    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
	
      <!-- <h2><?php the_title(); ?></h2> -->
      <?php the_content(); ?>

    <?php endwhile; // end the loop?>
    </div>
    </div>
  </div> <!--/.containter -->
</div> <!-- /.main -->

<?php get_footer(); ?>