<?php

/*
	Template Name: Blog Page
*/

get_header();  ?>

<div class="main">
<div class="home-page-hero"></div>
  <div class="container">

    	<?php 
    		if(have_posts()){
    			while(have_posts()){
    				the_post();
    				?>

        <?php  
        $blogArgs = array('post_type' => 'blog');
        $blogQuery = new WP_Query($blogArgs);

        if($blogQuery->have_posts()){
        	while($blogQuery->have_posts()){
        		$blogQuery->the_post();
        		?>
			<div class="blog-container">
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
			</div>
     		<?php
     	}
     	// End of while loop
     	wp_reset_postdata();
     } // End of custom query


     ?>
    			<?php
    		}
    	}

     ?>
  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>