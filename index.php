<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php if ( is_front_page() && is_home() ) : ?>
<?php get_template_part( 'global-templates/hero' ); ?>
<?php endif; ?>

<div class="wrapper" id="index-wrapper">

    <div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

        <!-- Do the left sidebar check and opens the primary div -->


        <main class="site-main" id="main">
            <table class="mb-2">
                <tbody>

                    <tr>
                        <th style="text-align:center; padding: 1px; ">
                            <?= get_option('ads_1'); ?>
                        </th>

                    </tr>
                </tbody>
            </table>

            <div class="ann"><?php echo get_option('config_infoweb'); ?></div>
            <div class="latest  ">
                <h2><i class="fa fa-film"></i> Latest Movies</h2>
                <div class="los bg-white p-2 rounded shadow-sm">
                    <?php if ( have_posts() ) : ?>

                    <?php while ( have_posts() ) : the_post(); ?>
                    <?php

                            /*
                            * Include the Post-Format-specific template for the content.
                            * If you want to override this in a child theme, then include a file
                            * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                            */
                            get_template_part( 'loop-templates/content', get_post_format() );
                            ?>

                    <?php endwhile; ?>

                    <?php else : ?>

                    <?php get_template_part( 'loop-templates/content', 'none' ); ?>

                    <?php endif; ?>
                </div>
                <?php understrap_pagination(); ?>
            </div>
        </main><!-- #main -->
        <!-- The pagination component -->


    </div><!-- #content -->

</div><!-- #index-wrapper -->

<?php get_footer(); ?>