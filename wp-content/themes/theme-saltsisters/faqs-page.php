<?php

/*
	Template Name: FAQ-page
*/

get_header();  ?>

<div class="main">

  <div class="faqs-page-hero"></div>
	<div class="container">
	<div class="faq-container">
	
	
    <?php // Start the loop ?>
    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

      <!-- <h2><?php the_title(); ?></h2> -->
      <?php the_content(); ?>

    <?php endwhile; // end the loop?>

    </div> <!--about-container-->
  </div> <!--/.containter -->
  <div class="faqs-filler"></div>
</div> <!-- /.main -->

<?php get_footer(); ?>
