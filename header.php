<!DOCTYPE html>
<html lang='ja'>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <title>
    <?php
    if ( is_single() ){
      wp_title('::', true, 'right');
    }
    bloginfo('name');
    ?>
  </title>
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url');echo'?'.filemtime(get_stylesheet_directory().'/style.css');?>" media="screen" />
  <link href="http://fonts.googleapis.com/css?family=Josefin+Sans:400,600,700" rel="stylesheet" />
  <?php
  if ( is_singular() ) {
    wp_enqueue_script( "comment-reply" );
  }
  //comments_popup_script();
  ?>
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<header>
  <h1 id="siteTitle"><a href="<?php echo home_url('/'); ?>"><span><?php bloginfo('name'); ?></span></a></h1>
  <p id="description"><?php bloginfo('description'); ?></p>
</header>

<nav id="siteNavigator">
<?php wp_nav_menu( 'theme_location = header-navi' ); ?>
</nav>
