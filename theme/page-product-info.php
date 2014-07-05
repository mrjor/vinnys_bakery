<?php
/**
 * Template Name: product info
*/
 ?>
<?php get_header(); ?>

     
    <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>    
    
    <div class="product-info">
        
        <div class="item yellow closed">
            <div class="copy-container">
                <h2><span class="title"><img src="<?php bloginfo('template_url'); ?>/img/info-waarom-volkoren-brood.png" alt=""><span class="arrow"></span></span></h2>
                <p>LEES MEER OVER HET VOLKORENBROOD VAN VINNYS BAKERY </p>
                <div class="info">
                    <div class="padding">
                        <?php the_field('waarom_volkorenbrood'); ?>
                    </div>
                </div>
            </div>
            <img class="info-close" src="<?php bloginfo('template_url'); ?>/img/info-close.png" alt="">
        </div>

        <div class="item orange closed">
            <div class="copy-container">
                <h2><span class="title"><img src="<?php bloginfo('template_url'); ?>/img/info-e-nummer-vrij.png" alt=""><span class="arrow"></span></span></h2>
                <p>Bekijk welke producten van vinnys bakery e-nummer vrij zijn... </p>
                <div class="info">
                   <div class="padding">
                     <?php the_field('e_nummervrij'); ?>
                        <div class="list">
                            <div class="col-2">
                                <?php the_field('e_nummervrij_col_1'); ?>
                            </div>
                            <div class="col-2">
                               <?php the_field('e_nummervrij_col_2'); ?> 
                            </div>
                        </div>   
                   </div>
                </div>
            </div>
            <img class="info-close" src="<?php bloginfo('template_url'); ?>/img/info-close.png" alt="">
        </div>

         <div class="item blue closed">
            <div class="copy-container">
                <h2><span class="title"><img src="<?php bloginfo('template_url'); ?>/img/info-allergieeninformatie.png" alt=""><span class="arrow"></span></span></h2>
                <p>INFORMATIE over de meest voorkomende allergieën...</p>
                <div class="info">
                     <div class="padding">
                        <?php the_field('allergie'); ?>
                    </div>
                </div>
            </div>
            <img class="info-close" src="<?php bloginfo('template_url'); ?>/img/info-close.png" alt="">
        </div>

        <div class="item green closed">
            <div class="copy-container">
                <h2><span class="title"><img src="<?php bloginfo('template_url'); ?>/img/info-voedingswaarde.png" alt=""><span class="arrow"></span></span></h2>
                <p>hoeveel zout / koolhydraten ZIT ER IN HET BROOD...</p>
                <div class="info">
                     <div class="padding">
                        <?php the_field('voeding'); ?>
                    </div>
                </div>
            </div>
            <img class="info-close" src="<?php bloginfo('template_url'); ?>/img/info-close.png" alt="">
        </div>

        
    </div>


            
    <div class="clear"></div>

    <?php endwhile; ?>
    <?php endif; ?>

<?php get_footer(); ?>