<?php

/*
	Template Name: FAQ-page
*/

get_header();  ?>

<div class="main">

  <div class="about-page-hero"></div>
	<div class="container">
	<div class="faq-container">
	<h1>FAQs:</h1>
	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat maiores vitae quam molestiae expedita velit a, id obcaecati corrupti iste?</p>
	<!-- <?php echo do_shortcode("[accordions id='41' ]"); ?> -->
    <?php // Start the loop ?>
    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

      <!-- <h2><?php the_title(); ?></h2> -->
      <?php the_content(); ?>

    <?php endwhile; // end the loop?>

    </div> <!--about-container-->
  </div> <!--/.containter -->
  <div class="filler-image-sunset"></div>
</div> <!-- /.main -->

<?php get_footer(); ?>