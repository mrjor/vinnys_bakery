<?php
/**
 * @package WordPress
 * @subpackage Adamantium - Starter Kit
 * @author Alan Gabriel Dawidowicz - www.alandawi.com.ar
 */
?>

<?php get_header(); ?>

     
    <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>    
    <?php if(get_field('2_columns') == 2) : ?>
	<div class="col-2">  
        <?php the_content(); ?>
    </div>

    <div class="col-2">
        <?php the_field('content_colunm_2') ?> 
    </div>

    <?php else : ?>

    <div class="col-1">
        <?php the_content(); ?> 
    </div>

    <?php endif; ?>
            
    <div class="clear"></div>

    <?php endwhile; ?>
    <?php endif; ?>

<?php get_footer(); ?>