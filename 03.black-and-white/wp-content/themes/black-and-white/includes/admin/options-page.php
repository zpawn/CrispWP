<?php
/**
 * @link https://github.com/zpawn/CrispWP
 * @author Ilia Makarov <ilia.makarov@me.com>
 */

function blackwhite_theme_options_page () {

    $options = get_option( 'blackwhite_options' );

    ?>
	<div class="wrap">
		<h1>Black & White Page Options</h1>

        <form method="post" action="admin-post.php">
            <input type="hidden" name="action" value="blackwhite_save_options">
	        <?php wp_nonce_field( 'blackwhite_options_verify' ); ?>

            <table>
                <tbody>
                <tr>
                    <th scope="row">
                        <label for="blackwhite_google_maps_api_key"><?= __( 'Google Maps Api Key', 'blackwhite' ) ?>:</label>
                    </th>
                    <td>
                        <input class="regular-text" id="blackwhite_google_maps_api_key" type="text" name="google_maps_api_key" value="<?= $options['google_maps_api_key'] ?>">
                    </td>
                </tr>
                </tbody>
            </table>

            <p class="submit">
                <button class="button button-primary" id="submit" type="submit" name="submit"><?= __( 'Save Changes', 'blackwhite' ) ?></button>
            </p>
        </form>
	</div>
<?php }
