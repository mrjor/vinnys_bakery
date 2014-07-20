<?php
/**
 * @package WordPress
 * @subpackage Adamantium - Starter Kit
 * @author Alan Gabriel Dawidowicz - www.alandawi.com.ar
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

<meta charset="utf-8">

<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

<meta name="HandheldFriendly" content="True">
<meta name="viewport" content="width=1000, initial-scale=1.0"/>

<meta name="description" content="<?php bloginfo('description'); ?>" />
<meta name="author" content="Vinny's bakery">

<title><?php if ( is_category() ) {
		echo 'Category Archive for &quot;'; single_cat_title(); echo '&quot; | '; bloginfo( 'name' );
	} elseif ( is_tag() ) {
		echo 'Tag Archive for &quot;'; single_tag_title(); echo '&quot; | '; bloginfo( 'name' );
	} elseif ( is_archive() ) {
		wp_title(''); echo ' Archive | '; bloginfo( 'name' );
	} elseif ( is_search() ) {
		echo 'Search for &quot;'.wp_specialchars($s).'&quot; | '; bloginfo( 'name' );
	} elseif ( is_home() ) {
		bloginfo( 'name' ); echo ' | '; bloginfo( 'description' );
	} elseif ( is_front_page() ) {
		bloginfo( 'name' ); echo ' | '; bloginfo( 'description' );
	}  elseif ( is_404() ) {
		echo 'Error 404 Not Found | '; bloginfo( 'name' );
	} elseif ( is_single() ) {
		wp_title('');
	} else {
		echo wp_title(''); echo ' | '; bloginfo( 'name' );
	} ?></title>

<link rel="icon" href="<?php bloginfo('template_url'); ?>/favicon.ico" />  
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/normalize.min.css">
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/main.css">

<!--[if lt IE 9]>
	<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <script>window.html5 || document.write('<script src="<?php bloginfo('template_url'); ?>/js/vendor/html5shiv.js"><\/script>')</script>
<![endif]-->


<?php wp_head(); /* this is used by many Wordpress features and plugins to work proporly */ ?>

<!-- Google Analytics -->
<!-- end Google Analytics -->
</head>

<body <?php body_class(); ?>>
<article class="website-wrapper">
<!-- HEADER -->
        <header class="container"> 
                <a href="/" class="logo"><img src="<?php bloginfo('template_url'); ?>/img/logo.png" alt=""></a>
                <nav class="menu">
					<?php 
						$args = array(
							'theme_location'  => 'header-menu',
							'menu'            => '',
							'container'       => '',
							'container_class' => '',
							'container_id'    => '',
							'menu_class'      => '',
							'menu_id'         => '',
							'echo'            => true,
							'before'          => '',
							'after'           => '',
							'link_before'     => '',
							'link_after'      => '',
							'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
							'depth'           => 0,
							'walker'          => ''
						);

						wp_nav_menu( $args );

						
					?>
                </nav>

                 <div class="social">
                    blijf op de hoogte <a href="#" class="icon-facebook"></a>
                </div>

              
                	    
			    
               <?php if (have_posts()) : ?>
			   <?php while (have_posts()) : the_post(); ?>    
                
               <?php if(!is_page_template ( 'page-assortiment-overzicht.php' ) && !is_page_template ( 'page-product-info.php' ) && !is_page_template ( 'page-product-info.php' ) && !is_page_template ( 'page-assortiment.php' ) && !is_page_template ( 'page-taart-op-maat.php' )): ?>
						
                <div class="header-vis">
                    <h1 class="hide"><?php the_title(); ?></h1>
                    <img src="<?= get_field('header_image'); ?>" alt="">
                    <?php if(is_page_template ( 'page-home.php' )): ?>
						<div class="header-shadow-main"></div>
                	<?php endif; ?>
                </div>

                	<?php endif; ?>

                 <?php endwhile; ?>
			     <?php endif; ?>
        </header>
<!-- HEADER -->
<!-- CONTENT -->
        <section class="container"> 
