<?php
/**
 * Template Name: home
*/
 ?>
<?php get_header(); ?>

     
    <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>    
    <div class="highlights">
        <a class="left" href="#"><img src="img/highlight-gratis-gebak.jpg" alt=""></a>
                    <a class="middle" href="#"><img src="img/highlight-reclames.png" alt=""></a>
                    <a class="right" href="#"><img src="img/highlight-taart-op-maat.jpg" alt=""></a>
                    <div class="clear"></div>
                </div>

                <div class="highlights-footer">
                    <a href="#"><img src="img/highlights-assortiment.jpg" alt=""></a>
                    <a class="middle" href="#"><img src="img/highlights-locaties.jpg" alt=""></a>
                    <a href="#"><img src="img/highlights-delivery.jpg" alt=""></a>
                </div>
            
    <div class="clear"></div>

    <?php endwhile; ?>
    <?php endif; ?>

<?php get_footer(); ?>