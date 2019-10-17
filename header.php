<!-- <!DOCTYPE html>
<html lang="fr" dir="ltr"> -->

<html <?php language_attributes(); ?>>

<head>
  <!-- <meta charset="utf-8"> -->
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="author" lang="fr" content="jlc">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- <title>Voyages</title> -->
  <title><?php bloginfo('name'); ?> &raquo; <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <link rel="icon" type="image/png" href="<?php bloginfo('template_directory');?>/img/development.png">

  <link rel="stylesheet" href="<?php bloginfo('template_directory');?>/css/style.css">
  <link rel="stylesheet" href="<?php bloginfo('template_directory');?>/css/flexslider.css" type="text/css" media="screen">

  <!-- <script type="text/javascript" async="" src="https://www.google-analytics.com/analytics.js"></script><script async="" src="//www.google-analytics.com/  analytics.js"></script> -->
  <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
  <script src="js/jquery.min.js"></script>
  <link rel="stylesheet" href="css/jquery.bxslider.css" type="text/css">
  <script src="js/jquery.bxslider.js"></script>
  <script type="text/javascript" src="js/jquery-1.6.2.min.js"></script>
  <script type="text/javascript" src="js/jquery.flexslider.js"></script>
  <!-- <script type="text/javascript" src="js/smooth_scroll.js"></script> -->
 <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
