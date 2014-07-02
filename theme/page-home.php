<?php
/**
 * Template Name: home
*/
 ?>
<?php get_header(); ?>

     
    <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>    
    <div class="highlights">
        <a class="left" href="<?php the_field('highlight_left_url'); ?>"><img src="<?php the_field('highlight_left'); ?>" alt=""></a>
        <a class="middle" href="<?php the_field('highlight_middle_url'); ?>"><img src="<?php the_field('highlight_middle'); ?>" alt=""></a>
        <a class="right" href="<?php the_field('highlight_right_url'); ?>"><img src="<?php the_field('highlight_right'); ?>" alt=""></a>
        <div class="clear"></div>
    </div>

    <div class="highlights-footer">
        <a href="<?php the_field('footer_left_url'); ?>"><img src="<?php the_field('footer_left'); ?>" alt=""></a>
        <a class="middle" href="<?php the_field('footer_middle_url'); ?>"><img src="<?php the_field('footer_middle'); ?>" alt=""></a>
        <a href="<?php the_field('footer_right_url'); ?>"><img src="<?php the_field('footer_right'); ?>" alt=""></a>
    </div>
            
    <div class="clear"></div>

    <?php endwhile; ?>
    <?php endif; ?>

<?php get_footer(); ?>