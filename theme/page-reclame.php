<?php
/**
 * Template Name: reclame
*/
 ?>
<?php get_header(); ?>

     
    <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>    
     <div class="img-container"> 
                <?php if(get_field('reclame_afbeelding_1') != ''): ?><img src="<?php the_field('reclame_afbeelding_1'); ?>" alt=""><?php endif; ?>
                <?php if(get_field('reclame_afbeelding_2') != ''): ?><img src="<?php the_field('reclame_afbeelding_2'); ?>" alt=""><?php endif; ?>
                <?php if(get_field('reclame_afbeelding_3') != ''): ?><img src="<?php the_field('reclame_afbeelding_3'); ?>" alt=""><?php endif; ?>
                <?php if(get_field('reclame_afbeelding_4') != ''): ?><img class="last" src="<?php the_field('reclame_afbeelding_4'); ?>" alt=""><?php endif; ?>
            </div>


            
    <div class="clear"></div>

    <?php endwhile; ?>
    <?php endif; ?>

<?php get_footer(); ?>