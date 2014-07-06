<?php
/**
 * Template Name: assortiment overzicht
*/
 ?>
<?php get_header(); ?>

     
    <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>    
    <h1 class="title-assortiment"><span class="hide">Assortiment</span></h1>
        <ul class="assortiment-container">
            
            <?php $cat_id = get_field('categorie'); ?>
            <?php $cat = get_cat_name( $cat_id ); ?>
            
            <li class="red first <?=($cat=='broodjes')? 'active' : 'deactive' ?>"><a href="<?php the_field('product_1', $post->post_parent); ?>"><img src="<?php bloginfo('template_url'); ?>/img/ass-broodjes.png" alt="broodjes"></a></li>
            <li class="green <?=($cat=='gebak')? 'active' : 'deactive' ?>"><a href="<?php the_field('product_2', $post->post_parent); ?>"><img src="<?php bloginfo('template_url'); ?>/img/ass-gebak.png" alt="gebak"></a></li>
            <li class="orange <?=($cat=='brood')? 'active' : 'deactive' ?>"><a href="<?php the_field('product_3', $post->post_parent); ?>"><img src="<?php bloginfo('template_url'); ?>/img/ass-brood.png" alt="brood"></a></li>
            <li class="blue <?=($cat=='taartjes')? 'active' : 'deactive' ?>"><a href="<?php the_field('product_4', $post->post_parent); ?>"><img src="<?php bloginfo('template_url'); ?>/img/ass-taartje.png" alt="taartjes"></a></li>
            <li class="yellow last <?=($cat=='banket')? 'active' : 'deactive' ?>"><a href="<?php the_field('product_5', $post->post_parent); ?>"><img src="<?php bloginfo('template_url'); ?>/img/ass-banket.png" alt="banket"></a></li>
        </ul>
      <?php endwhile; ?>
    <?php endif; ?>

        <div class="producten-container">
              
                

                <?php
                // The Query

                $args = array(
                    'posts_per_page'   => 0,
                    'offset'           => 0,
                    'category'         => $cat_id,
                    'orderby'          => 'post_date',
                    'order'            => 'DESC',
                    'include'          => '',
                    'exclude'          => '',
                    'meta_key'         => '',
                    'meta_value'       => '',
                    'post_type'        => 'post',
                    'post_mime_type'   => '',
                    'post_parent'      => '',
                    'post_status'      => 'publish',
                    'suppress_filters' => true 
                ); 

                $count = 0;

                $myposts = get_posts( $args );

                // The Loop
                foreach ( $myposts as $post ) : setup_postdata( $post );
                    ?>
                
                <a class="product-item <?=($count%4==3)? 'last' : '' ?>" href="#">
                    <span class="product-image" style="background-image:url(<?php the_field('product_image_thumb') ?>)"></span>
                    <h2><?php the_title(); ?></h2>
                    <img class="zoom" src="<?php bloginfo('template_url'); ?>/img/icon-zoom.png" alt="">
                    <div class="popup-content">
                        <div class="product-big-image"><img src="<?php the_field('product_image_big') ?>" alt=""></div>
                        <div class="popup-text">
                            <h2><?php the_title(); ?></h2>
                            <?php the_content(); ?>
                        </div>
                    </div>
                    </a>


                   <?php
                   $count++;
                endforeach;

                // Reset Query
               wp_reset_postdata();


                ?>




              
                
                <div class="popup-overlay">
                    
                    <div class="popup-container">
                        
                        <img class="popup-close" src="<?php bloginfo('template_url'); ?>/img/info-close.png" alt="">
                        
                        <div class="content-container">
                            
                            

                        </div>

                    </div>

                </div>

                <div class="clear"></div>
            </div>


            
    <div class="clear"></div>

  

<?php get_footer(); ?>