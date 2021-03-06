<?php

/*
	Template Name: Home-page
*/

get_header();  ?>

<div class="main">

  <div class="home-page-hero"></div>
	
	<!-- <video autoplay loop poster="img/22.jpg" id="bgvid">
        <source src="img_3494.mov" type="video/mov">
        <source src="polina.mp4" type="video/mp4">
    </video> -->

    <?php // Start the loop ?>
    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

        <?php the_content(); ?>
     		<!-- <h1><?php the_field('about_us') ?></h1> -->
     		<!-- <p><?php the_field('about_us_paragraph') ?></p> -->
     		
    

    <?php endwhile; // end the loop?>

    <div class="container">
    	<div class="dates-rates">
    		<h1>Retreat Details</h1>
    		<div class="dates-rates-container">
    			<div class="dates-rates-image-winter box">
                    <a href="http://salt-sisters.com/retreat-details/">
        				<div class="dates-rates-content">
        					<div class="content-title">
        						<h3>Accommodations</h3>
        					</div>
        				</div>
                    </a>
    			</div>
    			<div class="dates-rates-image-spring box">
    				<a href="http://salt-sisters.com/retreat-details/">
        				<div class="dates-rates-content">
        						<div class="content-title">
        							<h3>Lessons</h3>
        						</div>
        				</div>
                    </a>
    			</div>
    			<div class="dates-rates-image-summer box">
                    <a href="http://salt-sisters.com/retreat-details/">
        				<div class="dates-rates-content">
        					<div class="content-title">
        						<h3>Activities</h3>
        					</div>
        				</div>
                    </a>
    			</div>
    			<div class="dates-rates-image-fall box">
                    <a href="http://salt-sisters.com/retreat-details/">
        				<div class="dates-rates-content">
        					<div class="content-title">
        						<h3>Menu</h3>
        					</div>
        				</div>
                    </a>
    			</div>
    		</div>
    	</div>
    </div>
    <div class="filler-image"></div>
    <div class="container">
    	<div class="main-items ">
    		<div class="item">
    			<i class="fa fa-calendar-plus-o fa-3x"></i>
    			<p><?php the_field('calendar') ?></p>
    			<a href="http://salt-sisters.com/dates-itinerary/">Learn More</a>
    		</div>
    		<div class="item">
    			<i class="fa fa-phone fa-3x"></i>
    			<p><?php the_field('phone') ?></p>
    			<a href="http://salt-sisters.com/contact-us/">Learn More</a>
    		</div>
    		<div class="item">
    			<i class="fa fa-question fa-3x"></i>
    			<p><?php the_field('question') ?></p>
    			<a href="http://salt-sisters.com/faqs/">Learn More</a>
    		</div>
    		<div class="item">
    			<i class="fa fa-plane fa-3x"></i>
    			<p><?php the_field('plane') ?></p>
    			<a href="http://salt-sisters.com/prices-inclusions/">Learn More</a>
    		</div>
    	</div>
    </div>
  <!-- </div> --> <!--/.containter -->
</div> <!-- /.main -->

<?php get_footer(); ?>