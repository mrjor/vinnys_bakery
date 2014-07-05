<?php
/**
 * Template Name: assortiment
*/
 ?>
<?php get_header(); ?>

     
    <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>    
    <h1 class="title-assortiment"><span class="hide">Assortiment</span></h1>
        <ul class="assortiment-container">
            <li class="red first"><a href="<?php the_field('product_1'); ?>"><img src="<?php bloginfo('template_url'); ?>/img/ass-broodjes.png" alt="broodjes"></a></li>
            <li class="green"><a href="<?php the_field('product_2'); ?>"><img src="<?php bloginfo('template_url'); ?>/img/ass-gebak.png" alt="gebak"></a></li>
            <li class="orange"><a href="<?php the_field('product_3'); ?>"><img src="<?php bloginfo('template_url'); ?>/img/ass-brood.png" alt="brood"></a></li>
            <li class="blue"><a href="<?php the_field('product_4'); ?>"><img src="<?php bloginfo('template_url'); ?>/img/ass-taartje.png" alt="taartjes"></a></li>
            <li class="yellow last"><a href="<?php the_field('product_5'); ?>"><img src="<?php bloginfo('template_url'); ?>/img/ass-banket.png" alt="banket"></a></li>
        </ul>

        <h2 class="extra-title"><span class="hide">handige extra's</span></h2>
        <ul class="extra-container">
            <li><a href="<?php the_field('page_1'); ?>"><img src="<?php bloginfo('template_url'); ?>/img/extra-taart-bekleden.png" alt="taart bekleden"></a></li>
            <li><a href="<?php the_field('page_2'); ?>"><img src="<?php bloginfo('template_url'); ?>/img/extra-zelf.png" alt="zelf kapsel bakken"></a></li>
            <li><a href="<?php the_field('page_3'); ?>"><img src="<?php bloginfo('template_url'); ?>/img/extra-afbak.png" alt="afbak broodjes afbakken"></a></li>
            <li class="last"><a href="<?php the_field('page_4'); ?>"><img src="<?php bloginfo('template_url'); ?>/img/extra-creme-draaien.png" alt="creme draaien"></a></li>
        </ul>


            
    <div class="clear"></div>

    <?php endwhile; ?>
    <?php endif; ?>

<?php get_footer(); ?>