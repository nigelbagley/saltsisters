<?php

/*
	Template Name: Home-page
*/

get_header();  ?>

<div class="main">

  <div class="home-page-hero"></div>
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
	<div class="filler-image"></div>
	<div class="container">
		<div class="about-section container-margin">
			<h1>About Us</h1>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores culpa, aut eaque et suscipit reiciendis. Nisi quo nobis quam quos sit quasi minus dolorem voluptas ipsum, repellat laborum, dolor, voluptatibus itaque? Ipsum, accusamus sint atque, doloremque reprehenderit ratione alias, ut repellendus perferendis id eius. Explicabo laboriosam nesciunt, omnis molestiae et optio, accusamus soluta nemo, illum atque, aliquid tenetur natus. Voluptatibus eligendi ratione ipsa, expedita fugiat aliquid consectetur. Soluta nisi, tempora quia voluptatem et eaque adipisci odio consectetur, praesentium tempore ex!</p>
			<a href="#">Read More</a>
		</div>
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
						<div class="content-title">
							<h3>Lessons</h3>
							<!-- <h4>$$$$</h4> -->
						</div>
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

    <?php // Start the loop ?>
    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

      <!-- <h2><?php the_title(); ?></h2> -->
      <?php the_content(); ?>

    <?php endwhile; // end the loop?>
  <!-- </div> --> <!--/.containter -->
</div> <!-- /.main -->

<?php get_footer(); ?>