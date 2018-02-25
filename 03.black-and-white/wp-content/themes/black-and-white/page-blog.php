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

get_header(); ?>

<!--Основная часть-->
<div class="main">
    <h1>Blog</h1>
    <p>Lorem ipsum dolor sit amet, <a href="#" title="link">consectetur adipisicing elit</a>, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in <b title="bold">reprehenderit in voluptate velit</b> esse cillum dolore eu fugiat nulla pariatur. <i title="italic">Excepteur sint occaecat</i> cupidatat non proident, sunt in culpa qui officia deserunt.</p>

    <!--Списки и определения-->
    <h2>Lists and Descriptions</h2>
    <div class="row">
        <div class="col">
            <ul>
                <li>Sed ut perspiciatis unde omnis iste natus</li>
                <li>Lorem ipsum dolor sit amet, consectetur</li>
                <li>At vero eos et accusamus et iusto odio</li>
                <li>Et harum quidem rerum facilis est</li>
            </ul>
        </div>
        <div class="col">
            <ol>
                <li>Sed ut perspiciatis unde omnis iste natus</li>
                <li>Lorem ipsum dolor sit amet, consectetur</li>
                <li>At vero eos et accusamus et iusto odio</li>
                <li>Et harum quidem rerum facilis est</li>
            </ol>
        </div>
        <div class="col">
            <dl>
                <dt>Sed ut perspiciatis unde omnis iste natus</dt>
                <dd>Lorem ipsum dolor sit amet, consectetur</dd>
                <dt>At vero eos et accusamus et iusto odio</dt>
                <dd>Et harum quidem rerum facilis est</dd>
            </dl>
        </div>
    </div>

</div>

<?php get_footer(); ?>
