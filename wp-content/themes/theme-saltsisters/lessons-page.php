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
            <img src="<?php bloginfo('template_directory') ?>/img/kitesurfer.jpg" alt="">
          </div>
          <div class="lesson-content">
            <h1>Lorem ipsum dolor.</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut tempore sit, soluta totam. Deserunt voluptatum dolorem temporibus atque necessitatibus voluptatibus iure debitis asperiores quia ullam culpa, porro ab sit quidem ad cupiditate. Natus possimus quasi, magnam enim voluptates aliquid asperiores, voluptatum eum voluptate culpa molestiae! Facilis veniam tempora vel nobis dolor fuga, id doloribus sed, possimus ad quaerat, numquam impedit perspiciatis esse totam sunt dolorem quas modi voluptatem mollitia nesciunt soluta expedita doloremque perferendis tenetur? Vitae, at! Aliquam facilis voluptates, deserunt praesentium optio fugit facere sequi minima ullam. Quam inventore voluptatibus quidem repellendus aliquam quo placeat illum amet omnis autem!</p>
          </div>
      </div>
      </li>
      <li>
      <div class="lesson-container">
          <div class="lesson-img">
            <img src="<?php bloginfo('template_directory') ?>/img/kitesurfer.jpg" alt="">
          </div>
          <div class="lesson-content">
            <h1>Lorem ipsum dolor.</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut tempore sit, soluta totam. Deserunt voluptatum dolorem temporibus atque necessitatibus voluptatibus iure debitis asperiores quia ullam culpa, porro ab sit quidem ad cupiditate. Natus possimus quasi, magnam enim voluptates aliquid asperiores, voluptatum eum voluptate culpa molestiae! Facilis veniam tempora vel nobis dolor fuga, id doloribus sed, possimus ad quaerat, numquam impedit perspiciatis esse totam sunt dolorem quas modi voluptatem mollitia nesciunt soluta expedita doloremque perferendis tenetur? Vitae, at! Aliquam facilis voluptates, deserunt praesentium optio fugit facere sequi minima ullam. Quam inventore voluptatibus quidem repellendus aliquam quo placeat illum amet omnis autem!</p>
          </div>
      </div>
      </li>
      <li>
    <div class="lesson-container">
        <div class="lesson-img">
          <img src="<?php bloginfo('template_directory') ?>/img/kitesurfer.jpg" alt="">
        </div>
        <div class="lesson-content">
          <h1>Lorem ipsum dolor.</h1>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut tempore sit, soluta totam. Deserunt voluptatum dolorem temporibus atque necessitatibus voluptatibus iure debitis asperiores quia ullam culpa, porro ab sit quidem ad cupiditate. Natus possimus quasi, magnam enim voluptates aliquid asperiores, voluptatum eum voluptate culpa molestiae! Facilis veniam tempora vel nobis dolor fuga, id doloribus sed, possimus ad quaerat, numquam impedit perspiciatis esse totam sunt dolorem quas modi voluptatem mollitia nesciunt soluta expedita doloremque perferendis tenetur? Vitae, at! Aliquam facilis voluptates, deserunt praesentium optio fugit facere sequi minima ullam. Quam inventore voluptatibus quidem repellendus aliquam quo placeat illum amet omnis autem!</p>
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
