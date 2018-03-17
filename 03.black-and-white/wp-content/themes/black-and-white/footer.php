<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Black&White
 */

?>

        </div>
        <!-- Footer -->
        <footer class="footer_wrapper">

            <div class="footer">
                <div class="footer__copyright">
                    <p>&copy; Footer content <a href="http://psd-html-css.ru">Link footer</a></p>
                </div>

                <?php if ( is_active_sidebar('blackwhite_sidebar_footer') ) : ?>
                    <div class="footer__sidebar">
                            <?php dynamic_sidebar('blackwhite_sidebar_footer'); ?>
                    </div>
                <?php endif; ?>

                <div class="footer__menu">
                    <?php
                        if ( has_nav_menu( 'footer' ) ) {
                            wp_nav_menu( [
                                'theme_location' => 'footer',
                                'container' => false
                            ] );
                        }
                    ?>
                </div>
            </div>
        </footer>
    </div>

<?php wp_footer(); ?>

</body>
</html>
