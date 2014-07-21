<?php
/**
 * Template Name: contact
*/
 ?>

<?php get_header(); ?>

     

	<div class="col-3 first">  
        <?php the_content(); ?>
    </div>

    <div class="col-3 middle">
        <?php the_field('content_colunm_2') ?> 
    </div>

     <div class="col-3 last">
        <?php the_field('content_colunm_3') ?> 
    </div>

   
    <div class="clear"></div>



<?php get_footer(); ?>