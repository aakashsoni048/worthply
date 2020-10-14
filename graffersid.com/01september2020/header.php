<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package alfyi_graffersid
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta property="og:title" content="Web & Mobile App Development Services | Hire Dedicated Developer | Graffersid">
	<meta property="og:site_name" content="Graffersid">
	<meta property="og:url" content="https://graffersid.com/">
	<meta property="og:description" content="We are a team of skilled developers who craft products that engage the audience and help you achieve your business goals. Talk to our expert if future-product & the intuitive product is what you need.">
	<meta property="og:type" content="website">
	<meta property="og:image" content="https://graffersid.com/wp-content/uploads/2020/03/logo.jpg">

	<link rel="profile" href="https://gmpg.org/xfn/11">

  <?php wp_head(); ?>
  <!-- Start of HubSpot Embed Code -->
  <!-- <script type="text/javascript" id="hs-script-loader" async defer src="//js.hs-scripts.com/5081125.js"></script> -->
<!-- End of HubSpot Embed Code -->
</head>

<body <?php body_class(); ?>>

		

		<nav class="navbar navbar-expand-lg">
      <div class="container">
        <a class="navbar-brand" href="https://graffersid.com/" title="Graffersid">
            <img src="https://graffersid.com/wp-content/uploads/2020/03/graffersid-logo.png" alt="Graffersid" title="Graffersid"/>
          </a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive"
          aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <?php 

               

                
                $argsMenu = array(
                  'menu'            => '',
                  'container'       => 'div',
                  'container_class' => 'collapse navbar-collapse',
                  'container_id'    => '',
                  'menu_class'      => 'navbar-nav ml-auto',
                  'menu_id'         => '',
                  'echo'            => true,
                  'fallback_cb'     => 'wp_page_menu',
                  'before'          => '',
                  'after'           => '',
                  'link_before'     => '',
                  'link_after'      => '',
                  'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                  'item_spacing'    => 'preserve',
                  'depth'           => 0,
                  'walker'          => '',
                  'theme_location'  => '',
              );

              wp_nav_menu( $argsMenu );
          
          
          
          ?>
          <!-- <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link" title="Contact" href="https://graffersid.com/services.html">Services</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" title="Process" href="https://graffersid.com/process.html">Process</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" title="Case" href="https://graffersid.com/blogs/case-study">Case Studies</a>
              </li>            
              <li class="nav-item">
                <a class="nav-link" title="Blogs" href="https://graffersid.com/blogs">Blogs</a>
              </li>            
              <li class="nav-item">
                <a class="nav-link" title="Contact" href="https://graffersid.com/contact.html">Contact</a>
              </li>
          </ul> -->
        </div>
      </div>
    </nav>
	</header><!-- #masthead -->

	

	<div id="content" class="site-content">
