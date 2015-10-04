<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<?php // Load Meta ?>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php  wp_title('|', true, 'right'); ?></title>
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

  <?php // Load our CSS ?>
  <link rel="stylesheet" type="text/css" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600|Roboto+Slab' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Raleway:400,300' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <link rel="<?php bloginfo('template_url'); ?>/jquery.flexslider-min.js">
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/flexslider.css" type="text/css" media="screen" />
  <script type='text/javascript' src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0-alpha1/jquery.js"></script>
  <?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>
<header>
<!-- <div class="container"> -->
  <div class="mobile-nav">
    <input type="checkbox" id="toggle" name="toggle">
     <label class="mobile"for="toggle">☰</label> 
  </div>
  <!-- </div> -->
  <div class="logo">
    <h1>
      <a href="<?php echo home_url( '/' ); ?>" title="<?php bloginfo( 'name', 'display' ); ?>" rel="home">
        <!-- <?php bloginfo( 'name' ); ?> -->
        <img src="<?php echo get_template_directory_uri();?>/img/saltsisters-logo-transparent-1.png" alt="">
      </a>
    </h1>
    </div>
    <div class="container"> 
    <?php wp_nav_menu( array(
      'container' => false,
      'theme_locations' => 'primary'
    )); ?>
 
  </div> <!-- /.container -->
  <div class="bg transition"></div>
</header><!--/.header-->
