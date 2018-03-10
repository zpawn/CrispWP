<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Black&White
 */

get_header();

$location = get_field( 'map' );
$options = get_option( 'blackwhite_options' );
?>

<!--Основная часть-->
<div class="main">
    <h1>Contacts</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis repudiandae accusantium quae officiis voluptate saepe earum cumque! Iusto repellat minus enim voluptatibus. Optio, deleniti odit dicta minima quaerat non fugiat.</p>
    <form>
        <div class="row">
            <label>Text:</label>
            <input type="text" placeholder="Input type text">
        </div>
        <div class="row">
            <label>Select:</label>
            <select>
                <option>Option</option>
                <option>Option 1</option>
                <option>Option 2</option>
                <option>Option 3</option>
            </select>
        </div>
        <div class="row">
            <label><input type="checkbox">Sed ut perspiciatis unde omnis iste natus</label>
            <label><input type="radio" name="radiobutton" value="radiobutton">Lorem ipsum dolor sit amet, consectetur</label>
        </div>
        <div class="row">
            <label>Textarea:</label>
            <textarea></textarea>
        </div>
        <div class="row">
            <button type="submit">Button</button>
        </div>
    </form>

    <?php if( !empty($location) ): ?>
        <div class="acf-google-map__wrapper">
            <div class="acf-google-map js-acf-google-map"
                 data-google-maps-api-lat="<?php echo $location['lat']; ?>"
                 data-google-maps-api-lng="<?php echo $location['lng']; ?>"
                 data-google-maps-api-key="<?php echo $options['google_maps_api_key']; ?>"></div>
        </div>
    <?php endif; ?>

</div>

<?php get_footer(); ?>
