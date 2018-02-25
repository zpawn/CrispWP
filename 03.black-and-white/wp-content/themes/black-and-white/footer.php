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
        <div class="footer">
            <div class="footer__copyright">
                <p>&copy; Footer content <a href="http://psd-html-css.ru">Link footer</a></p>
            </div>
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
    </div>

<?php wp_footer(); ?>

</body>
</html>
