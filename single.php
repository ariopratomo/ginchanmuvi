<?php
/**
 * The template for displaying all single posts.
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>

<div class="wrapper" id="single-wrapper">

    <div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">
        <table class="mb-2">
            <tbody>

                <tr>
                    <th style="text-align:center; padding: 1px; ">
                        <?php if(get_option('ads_1')): ?>
                        <?= get_option('ads_1'); ?>
                        <?php else:?>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/ads.gif" class="img-fluid" />
                        <?php endif?>
                    </th>

                </tr>
            </tbody>
        </table>

        <div class="row">

            <!-- Do the left sidebar check -->
            <?php get_template_part( 'global-templates/left-sidebar-check' ); ?>

            <main class="site-main" id="main">

                <?php while ( have_posts() ) : the_post(); ?>

                <?php get_template_part( 'loop-templates/content', 'single' ); ?>





                <?php endwhile; // end of the loop. ?>

            </main><!-- #main -->

            <!-- Do the right sidebar check -->
            <?php get_template_part( 'global-templates/right-sidebar-check' ); ?>

        </div><!-- .row -->
        <div class="container">

            <div class="row ">

                <div class="col-md-8 ">
                    <?php

if ( function_exists( 'get_related_posts' ) ) {
    $related_posts = get_related_posts( 'genre', array( 'posts_per_page' => 6) );?>
                    <div class="latest related">
                        <div class="los">
                            <?php if ( $related_posts ) {
                                foreach ( $related_posts as $post ) {
                                    setup_postdata( $post ); 
                                    // Use your template tags and html mark up as normal like
                                    ?>
                            <div class="box">
                                <div class="bx">
                                    <a class="tip" rel="2380" href="<?php the_permalink(); ?>"
                                        title="<?php the_title(); ?>" alt="<?php the_title(); ?>">
                                        <div class="limit">
                                            <div class="overlay">

                                                <div class="ttl">
                                                    <h2><?php the_title(); ?></h2>
                                                </div>
                                            </div>
                                            <?php if( get_post_meta($post->ID, 'gm_gposter', true)):?>
                                            <img src="<?= get_post_meta($post->ID, 'gm_gposter', true)?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>">
                                            <?php else:?>
                                            <img src="<?php the_post_thumbnail_url(); ?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>">
                                            <?php endif?>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <?php
                                    // etc etc
                                }
                                wp_reset_postdata();
                            }?>
                        </div>
                    </div>
                    <?php
    
}
?>
                    <div class="ikln clearfix">
                        <table class="mb-2">
                            <tbody>
                                <tr>
                                    <th style="text-align:center; padding: 1px; ">
                                        <?= get_option('ads_2'); ?>
                                    </th>

                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="cmt">

                        <?php
                // If comments are open or we have at least one comment, load up the comment template.
                if ( comments_open() || get_comments_number() ) :
                    comments_template();
                endif;
                ?>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- #content -->

</div><!-- #single-wrapper -->

<?php get_footer(); ?>