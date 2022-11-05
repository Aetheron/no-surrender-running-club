<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package No_Surrender_Running_Club
 */

?>

<footer id="colophon" class="site-footer">
    <div class="footer-bar"></div>
    <div class="site-info">
        <nav id="site-navigation" class="main-navigation">
            <?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				)
			);
			?>
    </div>

    </nav>
    </div><!-- .site-info -->
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
</body>

</html>