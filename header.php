<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="<?php bloginfo('description'); ?>">
	<meta name="author" content="Michael Johnson">
  <meta property="og:title" content="Derby City Design Lab" />
  <meta property="og:type" content="website" />
  <meta property="og:url" content="http://www.derbycitydesignlab.com" />
  <meta property="og:image" content="http://www.derbycitydesignlab.com" />

	<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>
  <link href="<?php echo get_bloginfo('template_directory'); ?>/css/style.min.css" rel="stylesheet">
	<link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">

	<?php wp_head();?>
</head>

<body <?php if(!is_page_template( 'splash.php')) { body_class('page'); } else { body_class(); } ?>>
  <?php if(is_page_template( 'splash.php' ))
  {

  } else {
  ?>
  <!-- header -->
  <header class="header clear" role="banner">
    <div class="upper">
      <div class="content-wrap">
        <!-- logo -->
        <?php
        if(is_active_sidebar('logo')){
          dynamic_sidebar('logo');
        }
        ?>
        <!-- /logo -->

        <!-- nav -->
        <button type="button" id="nav-toggle"><i class="fa fa-navicon"></i></button>
        <nav class="nav" role="navigation">
          <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
        </nav>
      </div>
      <!-- /nav -->
    </div>
    <div class="banner">
      <?php
      if(is_active_sidebar('banner_img')){
        dynamic_sidebar('banner_img');
      }
      ?>
    </div>
  </header>
  <!-- /header -->

<?php } ?>
