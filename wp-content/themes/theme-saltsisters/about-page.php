<?php

/*
	Template Name: About-page
*/

get_header();  ?>

<div class="main">

  <div class="about-page-hero"></div>
	<div class="container">
		<div class="about-section container-margin">
			<h1>Lorem ipsum.</h1>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores culpa, aut eaque et suscipit reiciendis. Nisi quo nobis quam quos sit quasi minus dolorem voluptas ipsum, repellat laborum, dolor, voluptatibus itaque? Ipsum, accusamus sint atque, doloremque reprehenderit ratione alias, ut repellendus perferendis id eius. Explicabo laboriosam nesciunt, omnis molestiae et optio, accusamus soluta nemo, illum atque, aliquid tenetur natus. Voluptatibus eligendi ratione ipsa, expedita fugiat aliquid consectetur. Soluta nisi, tempora quia voluptatem et eaque adipisci odio consectetur, praesentium tempore ex!</p>
		</div>
	</div>
		<div class="filler-image-sunset"></div>
		<div class="container">
		<div class="sisters-container">

		<div class="sister-image">
			<img src="<?php bloginfo('template_directory') ?>/img/sisters.jpg" alt="">
		</div>
	
			<div class="sister-header">
				<h1>The Sisters</h1>
			</div>
			<div class="sister-paragraph">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate unde culpa iure consequatur magni, similique tempore totam, architecto sint excepturi deserunt ipsa iusto voluptatibus nulla voluptatum eum molestiae minus illo deleniti. Eos voluptatum nostrum quasi facere et dolore ab deleniti excepturi iste consectetur deserunt quis neque, quaerat assumenda, cumque rem in expedita animi inventore non. Voluptatum quas quidem, ea sed odio deserunt commodi reprehenderit quia obcaecati quae, quasi aspernatur excepturi nam hic magnam facilis vero totam cum est iure accusamus sunt repudiandae! Dolor vero, reiciendis sed fugit facere illum inventore doloribus totam ratione atque, officiis libero eligendi, aperiam tempora itaque!</p>

				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate unde culpa iure consequatur magni, similique tempore totam, architecto sint excepturi deserunt ipsa iusto voluptatibus nulla voluptatum eum molestiae minus illo deleniti. Eos voluptatum nostrum quasi facere et dolore ab deleniti excepturi iste consectetur deserunt quis neque, quaerat assumenda, cumque rem in expedita animi inventore non. Voluptatum quas quidem, ea sed odio deserunt commodi reprehenderit quia obcaecati quae, quasi aspernatur excepturi nam hic magnam facilis vero totam cum est iure accusamus sunt repudiandae! Dolor vero, reiciendis sed fugit facere illum inventore doloribus totam ratione atque, officiis libero eligendi, aperiam tempora itaque!</p>
			</div>
		</div>
</div>
	<div class="filler-image"></div>
	<div class="container">
		<div class="about-section">
		<h1>Lorem ipsum dolor.</h1>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti enim optio iure! Sed suscipit, sequi nihil praesentium ad iure dolor.</p>
		</div>
	</div>
	<div class="container">
    <?php // Start the loop ?>
    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

      <!-- <h2><?php the_title(); ?></h2> -->
      <?php the_content(); ?>

    <?php endwhile; // end the loop?>
  </div> <!--/.containter -->
</div> <!-- /.main -->

<?php get_footer(); ?>