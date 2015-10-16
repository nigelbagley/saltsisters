<?php get_header(); ?>

<div class="main">
<div class="home-page-hero"></div>
  <div class="container">
    <div class="blog-container">
  
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
    <!-- My code -->

    <div class="blog-post">
      <div class="blogger-info">
        <div class="blogger-image">
          <?php echo get_avatar( get_the_author_email(), '132' ); ?>
        </div>
        <div class="blogger-content">
        <!-- <h2><?php the_author_posts_link(); ?></h2> -->
          
          <!-- <p><?php echo get_the_date(); ?></p> -->
        </div>
    </div>
    <div class="blog-main-content">
          <h2><?php the_title(); ?></h2>
          <h3>By:<?php the_author(); ?></h3>
          <h4><?php echo get_the_date(); ?></h4>
          <p><?php the_content(); ?></p>
    </div>
    </div>

        <div id="nav-below" class="navigation">
          <p class="nav-previous"><?php previous_post_link('%link', '&larr; %title'); ?></p>
          <p class="nav-next"><?php next_post_link('%link', '%title &rarr;'); ?></p>
        </div><!-- #nav-below -->

        <?php comments_template( '', true ); ?>

      <?php endwhile; // end of the loop. ?>
    </div>


    <!-- <?php get_sidebar(); ?> -->

  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>