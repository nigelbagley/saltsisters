<?php

/*
	Template Name: Lessons-page
*/

get_header();  ?>

<div class="main">

  <div class="about-page-hero"></div>
  <div class="flexslider">
    <ul class="slides">
      <li>
      <div class="lesson-container">
          <div class="lesson-img">
            <?php 

            $image = get_field('lessons_image');

            if( !empty($image) ): ?>

              <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

            <?php endif; ?>
          </div>
          <div class="lesson-content">
            <h1><?php the_field('lesson_title') ?></h1>
            <p><?php the_field('lessons_paragraph') ?></p>
          </div>
      </div>
      </li>
      <li>
      <div class="lesson-container">
          <div class="lesson-img">
            <?php 

            $image = get_field('accomodations_image');

            if( !empty($image) ): ?>

              <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

            <?php endif; ?>
          </div>
          <div class="lesson-content">
            <h1><?php the_field('accomodations_title') ?></h1>
            <p><?php the_field('accomodations_paragraph') ?></p>
          </div>
      </div>
      </li>
      <li>
    <div class="lesson-container">
        <div class="lesson-img">
          <?php 

            $image = get_field('activities_image');

            if( !empty($image) ): ?>

              <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

            <?php endif; ?>
        </div>
        <div class="lesson-content">
          <h1><?php the_field('activities_title') ?></h1>
          <p><?php the_field('activities_paragraph') ?></p>
        </div>
    </div>
      </li>
      <li>
      <div class="lesson-container">
          <div class="lesson-img">
            <?php 

            $image = get_field('menu_image');

            if( !empty($image) ): ?>

              <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

            <?php endif; ?>
          </div>
          <div class="lesson-content">
            <h1><?php the_field('menu_title') ?></h1>
            <p><?php the_field('menu_paragraph') ?></p>
          </div>
      </div>
      </li>
    </ul>
  </div>
  	<div class="container">
 

        <?php // Start the loop ?>
        <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

          <!-- <h2><?php the_title(); ?></h2> -->
          <?php the_content(); ?>

        <?php endwhile; // end the loop?>

     
    </div> <!--/.containter -->
  <div class="filler-image-sunset"></div>
</div> <!-- /.main -->

<?php get_footer(); ?>
