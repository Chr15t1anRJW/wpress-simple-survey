<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package CoursePress
 */
?>


</div><!-- #content -->

<div class="push"></div>
</div><!-- #page -->

<footer id="colophon" class="site-footer" role="contentinfo">
    <nav id="footer-navigation" class="footer-navigation wrap" role="navigation">
        <span class="menu_footer"style="float:left;width:100%;"><span style="float:left;">Copyright © 2015 Amy Morin, LCSW | </span><span><a style="float:left;" href="/privacy-policy/"> Privacy Policy</a><span style="float:left;"> | </span>  <a style="float:left;" href="/website-use/"> Website Use</a><span style="float:left;"> | </span><a style="float:left;" href="/affiliate-area/"> Affiliate Dashboard</a><span style="float:left;"> | </span> <a style="float:left;" href="mailto:support@choosegrowth.com?subject=Tech Support request from:<?php echo site_url(); ?>&body=Please describe the issue in detail and attach any relevant URLs and screenshots if applicable.">Technical Support</a>
        <?php wp_nav_menu( array( 'theme_location' => 'secondary' ) ); ?>
    </nav><!-- #site-navigation -->
</footer><!-- #colophon -->

<?php wp_footer(); ?>

</body>
</html>
