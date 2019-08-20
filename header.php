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
    <link href="https://vjs.zencdn.net/7.5.4/video-js.css" rel="stylesheet">

    <!-- If you'd like to support IE8 (for Video.js versions prior to v7) -->
    <script src="https://vjs.zencdn.net/ie8/1.1.2/videojs-ie8.min.js"></script>

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

    .gm-ul {
        display: flex;
        margin: 0;
        padding: 0;
        list-style: none;
        white-space: nowrap;
        text-overflow: ellipsis;
        overflow: hidden;
        width: 100%;
        padding-right:15px;
        font-size:13px;
    }

    #site-genre {
        background: #ff1744;
        margin: 0;
        padding:3px 10px;
    }

    .gm-ul li {
        padding: 0 7px;
        margin: 5px 0;
        margin-right: 4px;
        border-radius: 3px;
    }
.stream-pager ul li{
color:#fff;

}
    

    .genfirst {
        background: #fff;
    }

    .gm-ul li a {
       
        color: #fff;
    }
    .gm-ul li a:hover {
       text-decoration:underline;
       color: #ffc107;
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

    /* Stream Mode */
    .stream-pager ul {
        list-style: none
    }

    .stream-pager li {
        display: inline-block;
        margin-right: 5px
    }

    .stream-pager li a {
        display: block;
        padding: 2px 11px 3px;
        border-radius: 3px;
        color: #fff;
        border: 1px solid #d0cbcb;
        font-weight: 700;
        letter-spacing: .3px;
        background: #008cff;
    }

    .stream-pager li a:hover,
    .stream-pager li a.active {
        background: #c4001d;
        border-color: transparent;
        color: #fff
    }

    .stream-pager {
        margin: 0 auto 5px
    }

    .stream-pager-title b {
        display: block;
        line-height: 27px
    }

    .stream-server {
        position: relative;
        padding-bottom: 56.25%;
        height: 0;
        overflow: hidden
    }

    .stream-server iframe {

        border: 0;
        outline: none;
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        margin: auto;
        width: 100%;
        height: 100%;
        background: #3498db url(https://www.pam-techno.co.id/home/img/asset/ajax-loader.gif) no-repeat center
    }

    .bread_crumb {
        margin: 0;
        border-bottom: 1px solid #eee;
        clear: both;
        height: 20px;
        background: #f8f8f8;
    }

    .bread_crumb li {
        font-size: 12px;
        color: rgb(180, 180, 180);
        float: left;
        /*margin-right:1em;*/
        list-style: none outside none;
    }

    .bread_crumb li:after {
        content: '>';
        padding-left: 10px;
        margin-right: 10px;
    }

    .bread_crumb li:last-child:after {
        content: '';
    }

    .bread_crumb li a {
        color: rgb(120, 120, 120);
    }

    .bread_crumb li.current {}

    .stream-combine {
        margin-bottom: 10px
    }

    .stream-pagi {
        background: #4f5358;
        background: #35383c
    }

    .stream-pagi a {
        display: inline-block;
        color: #fff
    }

    .stream-pagi span {
        display: inline-block;
        width: 33.3%;
        padding: 8px 11px 10px
    }

    .stream-pagi span:hover a {
        color: #5dbdea
    }

    .stream-pagi i {
        font-weight: 700
    }

    .stream-pagi .pagi-toc {
        text-align: center
    }

    .stream-pagi .pagi-toc i {
        padding-right: 4px;
        font-weight: 400
    }

    .stream-pagi .pagi-next {
        text-align: right
    }



    .stream-submenu ul {
        list-style: none;
        margin-right: -1px
    }

    .stream-submenu li {
        float: left;
        padding: 0 12px;
        line-height: 35px;
        text-align: center;
        background: #2a2c2f;
        width: 33.3%
    }

    .stream-submenu li a {
        color: #fff;
        display: block;
    }

    .stream-submenu li a i,
    .stream-submenu li i {
        padding-right: 3px
    }

    .stream-submenu-select {
        padding: 0 !important
    }

    .stream-submenu-report {
        float: left;
        width: 50%
    }

    .stream-submenu-report:hover {
        background: #DC3545
    }

    .stream-submenu-focus {
        float: left;
        color: #fff !important;
        font-weight: 700;
        cursor: pointer;
        width: 50%
    }

    .stream-submenu-focus:hover {
        background: #e0a12f
    }

    .stream-submenu-download {
        background: #57afd8 !important
    }

    .stream-submenu-credit {
        white-space: nowrap;
        color: #fff
    }

    .stream-submenu-credit .fa {
        position: relative;
        top: 0
    }

    #reports p {
        color: #721c24;
        background-color: #fde2e4;
        border: 1px solid #d6a3a9;
        padding: 10px 15px;
        margin: 0 0 5px;
        border-radius: 3px;
        font-size: 13px
    }

    .bawahnyaplayer {
        position: relative;
        color: #ddd;
        background: #1d1d1d;
    }

    .bawahside {
        height: 19px;
        padding: 9px 0 7px;
        float: left;
        text-align: center;
        background: #1d1d1d;
        width: 30%;
        font-size: 13px;
        position: relative;
    }

    .bawahmid {
        height: 19px;
        padding: 9px 0 7px;
        float: left;
        text-align: center;
        background: #1a77d0;
        width: 40%;
        font-size: 14px;
        text-transform: uppercase;
        transition: all .2s;
        -webkit-transition: all .2s;
        -moz-transition: all .2s;
    }

    .bawahside {
        height: 19px;
        padding: 9px 0 7px;
        float: left;
        text-align: center;
        background: #1d1d1d;
        width: 30%;
        font-size: 13px;
        position: relative;
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


    .video {
        position: relative;
        padding-bottom: 56.25%;
        /* 16:9 */
        height: 0;
    }

    .video img {
        position: absolute;
        display: block;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: 20;
        cursor: pointer;
    }

    .video:after {
        content: "";
        position: absolute;
        display: block;
        background: url(play-button.png) no-repeat 0 0;
        top: 45%;
        left: 45%;
        width: 46px;
        height: 36px;
        z-index: 30;
        cursor: pointer;
    }

    .video iframe {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
    }

    /* image poster clicked, player class added using js */
    .video.player img {
        display: none;
    }

    .video.player:after {
        display: none;
    }
    </style>
    <?php wp_head(); ?>
    <?php if (is_singular()){ ?><script type="text/javascript">
    /* Turnoflights */
    $(function() {
        $('.stream-server iframe').allofthelights({
            'opacity': '0.9'
        })
    });
    </script><?php } ?>
    <!-- Safelinku.com Full Page Script Exclude-->

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

                    
                    <?php if ( 'container' == $container ) : ?>
                </div><!-- .container -->
                <?php endif; ?>

            </nav><!-- .site-navigation -->

        </div><!-- #wrapper-navbar end -->
        <div class="container ">
            <div class="shadow-sm">
                <form method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>" role="searchstyle="margin-top: 2px">
                    <label class="sr-only" for="s"><?php esc_html_e( 'Cari', 'understrap' ); ?></label>
                    <div class="input-group">
                        <input class="field form-control" id="s" name="s" type="text"
                            placeholder="<?php esc_attr_e( 'Cari Film &hellip;', 'understrap' ); ?>"
                            value="<?php the_search_query(); ?>">
                        <span class="input-group-append">
                            <input class="submit btn btn-warning" id="searchsubmit"  name="submit" type="submit"
                                value="<?php esc_attr_e( 'Cari', 'understrap' ); ?>">
                        </span>
                    </div>
                </form>    
            </div>
           
        </div>
        <?php if(get_option('country_list') == true){?>
        <div class="mt-2">
        <div id="site-genre">
            <?php echo gm_navgenre(); ?>
        </div>
        <?php }?>
            
        </div>