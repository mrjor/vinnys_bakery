<?php
/**
 * @package WordPress
 * @subpackage Adamantium - Starter Kit
 * @author Alan Gabriel Dawidowicz - www.alandawi.com.ar
 */
?>

</section>
<!-- CONTENT -->
<!-- FOOTER -->
    <footer class="container">
        <nav>
            <ul>
                <li><a href="#">disclaimer</a></li>
                <li><a href="#">copyright vinnys bakery 2014</a></li>
                <li><a href="#">contact</a></li>
            </ul>
        </nav>
    </footer>
<!-- FOOTER -->
</article>
            

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.0.min.js"><\/script>')</script>

        <script src="<?php bloginfo('template_url'); ?>js/plugins.js"></script>
        <script src="<?php bloginfo('template_url'); ?>js/main.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X');ga('send','pageview');
        </script>

        <?php wp_footer(); /* this is used by many Wordpress features and plugins to work properly */ ?>
    </body>
</html>