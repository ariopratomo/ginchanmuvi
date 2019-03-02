<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

$container = get_theme_mod( 'understrap_container_type' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <style type="text/css">
    .navbar-brand.mb-0.font-weight-bold a {

        text-decoration: none;

    }

    .site-main {
        padding-left: 15px;
    }

    .bg-anu {
        background: #3498db;
        box-shadow: 0 2px 8px rgba(0, 0, 0, .5);
    }

    .ann {
        padding: 15px;
        font-weight: 700;
        border-radius: 5px;
        color: #FFF;
        background: #2196f3;
        text-align: center;
        line-height: 21px;
    }

    .latest {
        margin-bottom: 20px
    }

    .latest>h2,
    .latest>h1,
    .latest .more h2 {
        font-size: medium;
        color: #FFF;
        background: #FF6F00;
        padding: 10px 18px;
        border-radius: 5px;
        display: inline-block;
        font-weight: bold;
        margin-top: 15px;
        margin-bottom: 15px
    }

    .latest h2 i.fa {
        height: auto;
        font-size: 16px;
        margin-right: 2px;
        width: auto
    }

    .fa,
    .dashicons-before::before {
        display: inline-block;
        width: 20px;
        height: 20px;
        font-size: 20px;
        line-height: 1;
        font-family: dashicons;
        text-decoration: inherit;
        font-weight: 400;
        font-style: normal;
        vertical-align: top;
        text-align: center;
        transition: color .1s ease-in 0;
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;

    }

    .latest .more a {
        float: right;
        background: #FFF;
        color: #333;
        padding: 5px 10px;
        margin-left: 2px;
        margin-right: 5px;
        font-weight: 400;
        border-radius: 22px;
        font-size: medium
    }

    .latest .los {
        overflow: hidden;
        margin: 0 -5px
    }

    .latest .los .box {
        width: 14.28%;
        float: left;
        overflow: hidden
    }

    .latest.related .los .box {
        width: 14.28%
    }

    .latest .los .box .bx {
        margin: 5px;
        overflow: hidden
    }

    .latest .los .box .bx .limit {
        overflow: hidden;
        position: relative;
        padding: 0 0 145%;
        border-radius: 5px
    }

    .latest .los .box .bx .limit img {
        width: 100%;
        height: auto;
        position: absolute
    }

    .latest .los .box .bx .limit .overlay {
        position: absolute;
        z-index: 1;
        width: 100%;
        height: 100%
    }

    .latest .los .box .bx .limit .overlay .quality {
        background: #3498db !important;
        color: #fff;
        font-size: 11px;
        font-weight: bold;
        text-transform: uppercase;
        height: auto;
        line-height: normal;
        padding: 4px 6px;
        position: absolute;
        right: 2px;
        top: 2px;
        border-radius: 3px;
        width: auto;
        border: 1px solid #fff;
    }

    .latest .los .box .bx .limit .overlay .scr {
        position: absolute;
        top: 8px;
        border-radius: 3px;
        left: 8px;
        background: rgba(31, 31, 33, 0.3);
        color: #FFF;
        padding: 0 3px;
        font-size: 11px;
        font-weight: 400;
        line-height: 20px
    }

    .latest .los .box .bx .limit .overlay .scr .dashicons {
        width: auto;
        height: auto;
        font-size: 11px;
        color: #ffd700;
        line-height: 20px
    }

    .latest .los .box .bx .limit .overlay .eps {
        background: rgba(33, 150, 243, 0.73) none repeat scroll 0 0;
        color: #fff;
        font-size: 11px;
        text-align: center;
        width: 34px;
        text-transform: uppercase;
        height: 30px;
        border-radius: 50%;
        position: absolute;
        top: 8px;
        right: 8px;
        padding: 5px 2px 2px
    }

    .latest .los .box .bx .limit .overlay .eps span {
        display: block;
        font-weight: 700;
        margin-top: 2px;
        font-size: 16px;
        font-style: normal
    }

    .latest .los .box .bx .limit .overlay .ttl {
        position: absolute;
        width: 100%;
        bottom: 0;
        background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0.3), rgb(52, 152, 219));
    }

    .latest .los .box .bx .limit .overlay .ttl h2 {
        padding: 7px;
        padding-bottom: 5px;
        text-align: center;
        line-height: 17px;
        font-size: 13px;
        font-weight: 400;
        color: #FFF
    }

    .latest .los.carousel {
        margin: 0
    }

    .latest .los.carousel .box {
        width: 14.5%
    }

    @media only screen and (max-width:1200px) {
        .latest .los .box {
            width: 14.25%
        }
    }

    @media only screen and (max-width:1060px) {
        .latest .los .box {
            width: 16.6%
        }
    }

    @media only screen and (max-width:1000px) {
        .latest.related .los .box {
            width: 16.65%
        }
    }

    @media only screen and (max-width:920px) {

        .latest .los .box,
        .latest .los.carousel .box {
            width: 20%
        }
    }

    @media only screen and (max-width:840px) {
        .latest.related .los .box {
            width: 20%
        }
    }

    @media only screen and (max-width:770px) {

        .latest .los .box,
        .latest .los.carousel .box {
            width: 25%
        }
    }

    @media only screen and (max-width:700px) {
        .latest.related .los .box {
            width: 25%
        }
    }

    @media only screen and (max-width:610px) {

        .latest .los .box,
        .latest .los.carousel .box {
            width: 33.3333333%
        }
    }

    @media only screen and (max-width:555px) {
        .latest.related .los .box {
            width: 33.3333333%
        }

        .dl-box .dl-item a span i {
            display: none
        }

    }

    @media only screen and (max-width:465px) {
        .latest .los .box {
            width: 50%
        }

    }

    @media only screen and (max-width:875px) {
        .infodb .left {
            float: none;
            text-align: center
        }

        .infodb .right span {
            float: none;
            line-height: 21px;
            width: auto;
            margin-bottom: 7px;
            white-space: unset;
            text-overflow: unset
        }

        .infodb .infl {
            width: auto;
            float: none
        }

        .infodb .right {
            margin: 0;
            border: 0;
            padding: 0
        }

        .infodb .right .mgn .l {
            float: none;
            width: auto
        }

        .infodb .right span {
            margin-bottom: 3px
        }

        .infodb .infr {
            width: auto;
            float: none
        }
    }

    /* Single Content */

    .clearfix:before,
    .clearfix:after {
        content: "";
        display: table;
    }

    .clearfix:after {
        clear: both;
    }

    .clearfix {
        *zoom: 1;
    }

    /* Anu */
    .bread {
        background: #2c3549;

        padding-left: 15px;

        font-size: 15px;

        color: #fff;
    }

    .sinopsis {
        background-color: #fff;
        padding: 15px;
        padding-bottom: 15px;
        padding-bottom: 1px;
        border-bottom: 1px solid #ddd;
    }

    .download {
        margin-bottom: 15px;
    }

    .download .btn.btn-danger {
        display: block;
    }


    .infodb {
        overflow: hidden;
        background: #fff;
        padding: 20px;
        border-bottom: 1px solid #ddd;
        margin-top: 15px;
    }

    .infodb .infl {

        float: left;
    }

    .left,
    .alignleft {
        float: left;
    }

    .limage {
        margin-right: 15px;
    }

    .infodb img {
        max-width: 150px;
    }

    .infodb .right {
        overflow: hidden;
    }

    .infodb h1 {
        font-size: 20px;
        line-height: 28px;
        padding: 0;
        color: #333;
        margin: 0;
        background: none;
        font-weight: 700;
    }

    .trl {
        overflow: hidden;
        margin-top: 5px;
    }

    .trl a {
        display: block;
        float: left;
        padding: 6px 15px;
        color: #FFF;
        font-size: 13px;
        border-radius: 15px;
        background: #2196f3;
        margin-right: 5px;
        border-bottom: 3px solid #1c7fce !important;
    }

    .infodb .right .mgn {
        width: 100%;
        overflow: hidden;
        position: relative;
    }

    .infodb .right .mgn .l {
        float: left;
        width: 60%;
    }

    .infodb .right span {
        display: block;
        color: #333;
        font-size: 13px;
        line-height: 18px;
        list-style: outside none none;
        margin-right: 10px;
        margin-bottom: 2px;
    }

    i.imdbx {

        display: inline-block;
        font-size: 11px;
        text-transform: uppercase;
        color: #fff;
        padding: 2px 5px;
        border-radius: 3px;
        background: #f9a302;
        font-style: normal;

    }

    i.qua {

        display: inline-block;
        font-size: 11px;
        text-transform: uppercase;
        color: #fff;
        padding: 2px 5px;
        border-radius: 3px;
        background: #282c35;
        font-style: normal;

    }

    .dl-box {
        padding: 20px;
        border-top: 1px solid #ebebeb;
        background: #FFF;
        border-bottom: 1px solid #ddd;
    }

    .dl-box .dlhead {
        display: table;
        width: 100%;
        table-layout: fixed;
        border-collapse: separate;
    }

    .dl-box .dlhead span {
        background: #e0e3ed;
        background-image: none;
        padding: 10px;
        border-right: 1px solid #fff;
        margin-right: 3px;
        padding: 8px 12px;
        margin-bottom: 0;
        font-size: 13px;
        font-weight: 400;
        line-height: 1.42857143;
        text-align: center;
        white-space: nowrap;
        vertical-align: middle;
        -ms-touch-action: manipulation;
        touch-action: manipulation;
        text-overflow: ellipsis;
        overflow: hidden;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        background-image: none;
        border-radius: 2px;
        color: #333;
        display: table-cell;
        border-radius: 0;
    }

    .dl-box .dl-item a {
        display: table;
        width: 100%;
        table-layout: fixed;
        border-collapse: separate;
        border-left: 1px solid #f1f1f1;
        border-bottom: 1px solid #f1f1f1;
    }

    .dl-box .dl-item a span {
        margin-right: 3px;
        padding: 7px 12px;
        margin-bottom: 0;
        font-size: 12px;
        font-weight: 400;
        line-height: 1.42857143;
        text-align: center;
        white-space: nowrap;
        vertical-align: middle;
        touch-action: manipulation;
        text-overflow: ellipsis;
        overflow: hidden;
        -moz-user-select: none;
        background-image: none;
        border: 1px solid transparent;
        display: table-cell;
        border-radius: 0;
        color: #525252;
        border-right: 1px solid #e5e5e5;
    }

    .dl-box .dl-item a:hover span {
        text-decoration: none;
    }

    .dl-box .dl-item a span.dlxxx {
        background: #2196f3;
        color: #FFF;
    }

    .cmt {

        font-size: 14px;
        line-height: normal;
        background: #FFF;
        padding: 20px;
        border-top: 1px solid #ebebeb;
        margin-bottom: 15px;
        line-height: 20px;

    }


    /* Single Content End*/
    .widget-title {
        background: #2c3549;
        display: block;
    }

    .widget {

        border: solid #3498db;
        border-top: 3px;
        border-bottom: 3px;
        border-bottom-left-radius: 10px;
        border-bottom-right-radius: 10px;
        margin: 15px;
        background-color: #fff;

    }

    .widget h3 {
        color: #fff;
        text-align: center;
    }

    .widget ul {
        list-style: none;
    }

    .widget ul li a {
        color: #1abc9c;
        text-decoration: none;
    }

    #wrapper-footer a {
        color: #1abc9c;
        text-decoration: none;
    }

    #wrapper-footer {
        background: #2c3549;
        text-align: center;
        color: #fff;
    }
    </style>
    <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

    <div class="site" id="page">

        <!-- ******************* The Navbar Area ******************* -->
        <div id="wrapper-navbar" itemscope itemtype="http://schema.org/WebSite">

            <a class="skip-link sr-only sr-only-focusable"
                href="#content"><?php esc_html_e( 'Skip to content', 'understrap' ); ?></a>

            <nav class="navbar navbar-expand-md navbar-dark bg-anu ">

                <?php if ( 'container' == $container ) : ?>
                <div class="container">
                    <?php endif; ?>

                    <!-- Your site title as branding in the menu -->
                    <?php if ( ! has_custom_logo() ) { ?>

                    <?php if ( is_front_page() && is_home() ) : ?>

                    <h1 class="navbar-brand mb-0 font-weight-bold"><a rel="home"
                            href="<?php echo esc_url( home_url( '/' ) ); ?>"
                            title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"
                            itemprop="url"><?php bloginfo( 'name' ); ?></a></h1>

                    <?php else : ?>

                    <a class="navbar-brand font-weight-bold" rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>"
                        title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"
                        itemprop="url"><?php bloginfo( 'name' ); ?></a>

                    <?php endif; ?>


                    <?php } else {
						the_custom_logo();
					} ?>
                    <!-- end custom logo -->

                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
                        aria-controls="navbarNavDropdown" aria-expanded="false"
                        aria-label="<?php esc_attr_e( 'Toggle navigation', 'understrap' ); ?>">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <!-- The WordPress Menu goes here -->
                    <?php wp_nav_menu(
					array(
						'theme_location'  => 'primary',
						'container_class' => 'collapse navbar-collapse',
						'container_id'    => 'navbarNavDropdown',
						'menu_class'      => 'navbar-nav mr-auto ',
						'fallback_cb'     => '',
						'menu_id'         => 'main-menu',
						'depth'           => 2,
						'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
					)
				); ?>

                    <form method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>" role="search"
                        style="margin-top: 2px">
                        <label class="sr-only" for="s"><?php esc_html_e( 'Search', 'understrap' ); ?></label>
                        <div class="input-group">
                            <input class="field form-control" id="s" name="s" type="text"
                                placeholder="<?php esc_attr_e( 'Search &hellip;', 'understrap' ); ?>"
                                value="<?php the_search_query(); ?>">
                            <span class="input-group-append">
                                <input class="submit btn btn-primary" id="searchsubmit" name="submit" type="submit"
                                    value="<?php esc_attr_e( 'Search', 'understrap' ); ?>">
                            </span>
                        </div>
                    </form>
                    <?php if ( 'container' == $container ) : ?>
                </div><!-- .container -->
                <?php endif; ?>

            </nav><!-- .site-navigation -->

        </div><!-- #wrapper-navbar end -->