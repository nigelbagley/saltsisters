<?php

/*
	Template Name: Prices & Inclusions Page
*/

get_header();  ?>

<div class="main">

  <div class="price-hero">
    <div class="booking-container">
      	<div class="dates">
      		<div class="date">
      			<h3><?php the_field('date_label'); ?></h3>
      			<h4><?php the_field('date'); ?></h4>
      		</div>
      		<div class="days">
      			<h3><?php the_field('days_label'); ?></h3>
      			<h4><?php the_field('days_number'); ?></h4>
      		</div>
      		<div class="availabilty">
      			<h3><?php the_field('availability'); ?></h3>
      			<h4><?php the_field('availability_number'); ?></h4>
      		</div>
      		<div class="book-now">
      			<a href="http://localhost:8888/saltsisters/?page_id=34">Book Now</a>
      		</div>	
      	</div>
      </div>
  </div>
    <?php // Start the loop ?>
    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
    	<div class="container">
    		<div class="dates-container">
        	 <div class="room-option">
           <div class="room-header">
             <h2><?php the_field('option_one'); ?></h2>
           </div>
            
              <?php 

              $image = get_field('option_one_image');

              if( !empty($image) ): ?>

                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

              <?php endif; ?>
          
             <div class="room-option-content">
               <h3><?php the_field('option_one_price'); ?></h3>
               <p><?php the_field('option_one_paragraph'); ?></p>
             </div>
             <div class="room-button">
               <a href="#">Book Now</a>
             </div>
           </div>
             <div class="room-option">
             <div class="room-header">
               <h2><?php the_field('option_two_header'); ?></h2>
             </div>
               
                 <?php 

                 $image = get_field('option_two_image');

                 if( !empty($image) ): ?>

                  <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

                 <?php endif; ?>
              
                <div class="room-option-content">
                  <h3><?php the_field('option_two_price'); ?></h3>
                  <p><?php the_field('option_two_paragraph'); ?></p>
                </div>
                <div class="room-button">
                  <a href="#">Book Now</a>
                </div>
              </div>
    		</div>
    	</div>

    	<div class="price-filler-image"></div>
    	<?php the_content(); ?>
    	<div class="price-filler-image">
    		<h1><?php the_field('quote'); ?></h1>
    	</div>
    <?php endwhile; // end the loop?>
  <!-- </div> --> <!--/.containter -->
</div> <!-- /.main -->

<?php get_footer(); ?>
    