<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<?php // Load Meta ?>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php  wp_title('|', true, 'right'); ?></title>
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
  <!-- stylesheets should be enqueued in functions.php -->
  <?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>
  <div class="sectionTitle">
    <h2></h2> 
  </div>
  <header>
      <a href="<?php echo home_url( '/' );?>">
        <div class="logoContainer">
          <h1><?php bloginfo('name'); ?></h1>
          <!-- <p><?php bloginfo('description'); ?></p> -->
        </div>
      </a>
    
    <nav class="mainNav">
      <?php wp_nav_menu( array(
        'container' => false,
        'theme_location' => 'primary'
      )); ?>
    </nav>

    <nav class="socialNav">
      <?php wp_nav_menu(array(
        'container' => false,
        'theme_location' => 'social'
      )); ?>
    </nav>

    
  </header><!--/.header-->

