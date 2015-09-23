<?php

/*
	Template Name: Winter Page
*/

get_header();  ?>

<div class="main">

  <div class="winter-page-hero">
  	<div class="dates">
  		<div class="date">
  			<h3>Date</h3>
  			<h4>DEC - DEC</h4>
  		</div>
  		<div class="days">
  			<h3>Days</h3>
  			<h4>8</h4>
  		</div>
  		<div class="price">
  			<h3>Price</h3>
  			<h4>$$$$</h4>
  		</div>
  		<div class="availabilty">
  			<h3>Availability</h3>
  			<h4>1</h4>
  		</div>
  		<div class="book-now">
  			<a href="http://localhost:8888/saltsisters/?page_id=34">Book Now</a>
  		</div>	
  	</div>
  </div>

	<div class="container">
		<div class="dates-container">
			<h1>Lorem ipsum dolor sit amet.</h1>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga mollitia laborum possimus ullam eaque architecto consequatur saepe voluptates et dolorum, eveniet amet enim omnis, consequuntur vero autem, dolores debitis beatae!</p>
			<iframe src="https://player.vimeo.com/video/76984499" width="700" height="394" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
		</div>

	</div>
	<div class="filler-image"></div>
	<div class="container">
		<h1>Lorem ipsum dolor sit.</h1>
		<!-- <p>Lorem ipsum dolor sit amet, consectetur.</p> -->
			<div class="day-content">
				<div class="day-containers">
					<h3>Days 1-2</h3>
					<h2>Lorem ipsum dolor.</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum aliquid omnis odio numquam cupiditate quasi laboriosam eligendi quas neque itaque.</p>
				</div>
				<div class="day-containers">
					<h3>Days 3-4</h3>
					<h2>Lorem ipsum dolor.</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum aliquid omnis odio numquam cupiditate quasi laboriosam eligendi quas neque itaque.</p>
				</div>
				<div class="day-containers">
					<h3>Days 5-6</h3>
					<h2>Lorem ipsum dolor.</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum aliquid omnis odio numquam cupiditate quasi laboriosam eligendi quas neque itaque.</p>
				</div>
				<div class="day-containers">
					<h3>Days 7-8</h3>
					<h2>Lorem ipsum dolor.</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum aliquid omnis odio numquam cupiditate quasi laboriosam eligendi quas neque itaque.</p>
				</div>
			</div>
	</div>
	<div class="filler-image">
		<h1>"Do or do not. There is no try!"</h1>
	</div>


    <?php // Start the loop ?>
    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

      <!-- <h2><?php the_title(); ?></h2> -->
      <?php the_content(); ?>

    <?php endwhile; // end the loop?>
  <!-- </div> --> <!--/.containter -->
</div> <!-- /.main -->

<?php get_footer(); ?>