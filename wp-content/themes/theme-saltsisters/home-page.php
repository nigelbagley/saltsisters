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

     <div class="container">
     	<div class="about-section container-margin">
     		<h1><?php the_field('about_us') ?></h1>
     		<p><?php the_field('about_us_paragraph') ?></p>
     		<a href="#">Read More</a>
     	</div>
     </div>

    <?php endwhile; // end the loop?>
    <div class="filler-image-sunset"></div>
    <div class="container">
    	<div class="dates-rates">
    		<h1>Retreat Details</h1>
    		<div class="dates-rates-container">
    			<div class="dates-rates-image-winter box">
    				<div class="dates-rates-content">
    					<div class="content-title">
    						<h3>Accomodations</h3>
    						<!-- <h4>$$$$</h4> -->
    					</div>
    					<div class="days">
    						<!-- <h4>8 Days</h4> -->
    					</div>
    				</div>
    			</div>
    			<div class="dates-rates-image-spring box">
    				
    				<div class="dates-rates-content">
    					<a href="http://localhost:8888/saltsisters/?page_id=46">
    						<div class="content-title">
    							<h3>Lessons</h3>
    							<!-- <h4>$$$$</h4> -->
    						</div>
    					</a>
    					<div class="days">
    						<!-- <h4>8 Days</h4>-->
    					</div>
    				</div>
    			</div>
    			<div class="dates-rates-image-summer box">
    				<div class="dates-rates-content">
    					<div class="content-title">
    						<h3>Activities</h3>
    						<!-- <h4>$$$$</h4> -->
    					</div>
    					<div class="days">
    						<!-- <h4>8 Days</h4> -->
    					</div>
    				</div>
    			</div>
    			<div class="dates-rates-image-fall box">
    				<div class="dates-rates-content">
    					<div class="content-title">
    						<h3>Menu</h3>
    						<!-- <h4>$$$$</h4> -->
    					</div>
    					<div class="days">
    						<!-- <h4>8 Days</h4> -->
    					</div>
    				</div>
    			</div>
    		</div>
    	</div>
    </div>
    <div class="filler-image"></div>
    <div class="container">
    	<div class="main-items ">
    		<div class="item">
    			<i class="fa fa-calendar-plus-o fa-3x"></i>
    			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam, voluptatum!</p>
    			<a href="#">Learn More</a>
    		</div>
    		<div class="item">
    			<i class="fa fa-heart fa-3x"></i>
    			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit, autem.</p>
    			<a href="#">Learn More</a>
    		</div>
    		<div class="item">
    			<i class="fa fa-cutlery fa-3x"></i>
    			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius, quos!</p>
    			<a href="#">Learn More</a>
    		</div>
    		<div class="item">
    			<i class="fa fa-plane fa-3x"></i>
    			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi, id.</p>
    			<a href="#">Learn More</a>
    		</div>
    	</div>
    </div>
  <!-- </div> --> <!--/.containter -->
</div> <!-- /.main -->

<?php get_footer(); ?>