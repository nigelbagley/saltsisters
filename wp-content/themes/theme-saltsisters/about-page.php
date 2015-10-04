<?php

/*
	Template Name: About-page
*/

get_header();  ?>

<div class="main">

  <div class="about-page-hero"></div>

	
	
    <?php // Start the loop ?>
    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
    	<div class="container">
    		<div class="about-section container-margin">
    			<h1><?php the_field('header_one') ?></h1>
    			<p><?php the_field('paragraph_one') ?></p>
                
    		</div>
    	</div>
    		<div class="filler-image-sisters"></div>
     <div class="container">
     		<div class="sisters-container">

	     		<div class="sister-image">
	     			<?php 

	     			$image = get_field('sisters_image');

	     			if( !empty($image) ): ?>

	     				<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

	     			<?php endif; ?>

	     		</div>
<!-- 
     			<div class="sister-header">
     				
     			</div> -->
     			<div class="sister-paragraph">
                    <h1><?php the_field('sisters_title') ?></h1>
                    <p><?php the_content(); ?></p>
     			</div>
     		</div>
     </div>
     <div class="filler-image-sisters"></div>
	<div class="container">
		<div class="about-section">
		<h1><?php the_field('header_two') ?></h1>
		<p><?php the_field('paragraph_two') ?></p>
		</div>
	</div>
    <?php endwhile; // end the loop?>
    <div class="filler-image-sisters"></div>
    
  </div> <!--/.containter -->
</div> <!-- /.main -->

<?php get_footer(); ?>