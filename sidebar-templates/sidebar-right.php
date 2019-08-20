<?php
/**
 * The right sidebar containing the main widget area.
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

if ( ! is_active_sidebar( 'right-sidebar' ) ) {?>
<div class="col-md-4 widget-area" id="right-sidebar" role="complementary">
    <?php  if ( is_single() ) {  ?>
    
    <!--CODE PELAJAR AUTHO STYLE -->
    <div class="container">
    
        <div class="section mt-5">
        
            <div class="area">
                <section class="postauthor boxs" style="width: 100%; overflow: hidden;">
                    <div class="authorava opacity80">
                        <!--<img src="<?php //echo get_avatar( $id_or_email, $size, $default, $alt, $args ); ?> " alt="Code Pelajar">-->
                        <img src="<?php echo get_option('url_img'); ?>" />
                    </div>
                    <div class="authorright">
                        <h4>Posted By</h4>
                        <h2><?php the_author() ?></h2>
                        <h3>at <?php the_date() ?></h3>
                    </div>
                </section>
            </div>
        </div>
        <?php if(get_option('ads_side')!=''):?>
        <center><?php echo get_option('ads_side');?></center>
    <?php endif?>
        
    </div>
    
    <style>
    .section {
        margin-bottom: 10px;
        overflow: hidden;
        box-shadow: 0 1px 5px rgba(0, 0, 0, .25);
        border-radius: 3px
    }

    .postauthor {
        background: url(img/bg2.jpg);
        position: relative
    }

    .authorava {
        height: 97px;
        width: auto;
        overflow: hidden;
        float: left
    }

    .authorava img {
        margin: 5px;
        height: 85px;
        border: 3px solid #008cff;
        border-radius: 99px;
        width: auto
    }

    .authorright {
        position: absolute;
        top: 0;
        right: 0;
        width: 135px;
        height: 0;
        float: left;
        padding-right: 15px;
        border-bottom: 100px solid #008cff;
        border-left: 50px solid transparent
    }

    .authorright h4 {
        line-height: 12px;
        color: #eee;
        text-align: left;
        float: right;
        margin-top: 20px;
        font-size: 9px
    }

    .authorright h2 {
        color: #fff;
        text-align: right;
        float: right;
        width: auto;
        font-size: initial;
        margin: -8px auto;
        text-transform: lowercase
    }

    .section h3 {
        font-size: 14px;
        padding: 10px;
        font-weight: bold;
        background: #008cff;
        color: #fff
    }

    .authorright h3 {
        line-height: 15px;
        text-align: right;
        border-radius: 3px;
        width: 150px;
        float: right;
        margin-top: 5px;
        border: none
    }

    .postauthor {
        background: url(https://3.bp.blogspot.com/-rB5dxJs56W0/XFFXUkVGXRI/AAAAAAAAARs/LkKJK9BGV60PDqledWn4vu1_SvIkkY1HQCLcBGAs/s1600/coeeg.jpg);
        position: relative
    }
    </style>
    </b:if>
    <?php } ?>
</div>
<?php return; }


// when both sidebars turned on reduce col size to 3 from 4.
$sidebar_pos = get_theme_mod( 'understrap_sidebar_position' );
?>

<?php if ( 'both' === $sidebar_pos ) : ?>
<div class="col-md-3 widget-area" id="right-sidebar" role="complementary">
    <?php else : ?>
    <div class="col-md-4 widget-area" id="right-sidebar" role="complementary">
        <?php endif; ?>
        <?php  if ( is_single() ) {  ?>
        <!--CODE PELAJAR AUTHO STYLE -->
        <div class="container">
            <div class="section">
                <div class="area">
                    <section class="postauthor boxs" style="width: 100%; overflow: hidden;">
                        <div class="authorava opacity80">
                            <!--<img src="<?php //echo get_avatar( $id_or_email, $size, $default, $alt, $args ); ?> " alt="Code Pelajar">-->
                            <img src="<?php echo get_option('url_img'); ?>" />
                        </div>
                        <div class="authorright">
                            <h4>Posted By</h4>
                            <h2><?php the_author() ?></h2>
                            <h3>at <?php the_date() ?></h3>
                        </div>
                    </section>
                </div>
            </div>
        </div>
        <style>
        .section {
            margin-bottom: 10px;
            overflow: hidden;
            box-shadow: 0 1px 5px rgba(0, 0, 0, .25);
            border-radius: 3px
        }

        .postauthor {
            background: url(img/bg2.jpg);
            position: relative
        }

        .authorava {
            height: 97px;
            width: auto;
            overflow: hidden;
            float: left
        }

        .authorava img {
            margin: 5px;
            height: 85px;
            border: 3px solid #008cff;
            border-radius: 99px;
            width: auto
        }

        .authorright {
            position: absolute;
            top: 0;
            right: 0;
            width: 135px;
            height: 0;
            float: left;
            padding-right: 15px;
            border-bottom: 100px solid #008cff;
            border-left: 50px solid transparent
        }

        .authorright h4 {
            line-height: 12px;
            color: #eee;
            text-align: left;
            float: right;
            margin-top: 20px;
            font-size: 9px
        }

        .authorright h2 {
            color: #fff;
            text-align: right;
            float: right;
            width: auto;
            font-size: initial;
            margin: -8px auto;
            text-transform: lowercase
        }

        .section h3 {
            font-size: 14px;
            padding: 10px;
            font-weight: bold;
            background: #008cff;
            color: #fff
        }

        .authorright h3 {
            line-height: 15px;
            text-align: right;
            border-radius: 3px;
            width: 150px;
            float: right;
            margin-top: 5px;
            border: none
        }

        .postauthor {
            background: url(https://3.bp.blogspot.com/-rB5dxJs56W0/XFFXUkVGXRI/AAAAAAAAARs/LkKJK9BGV60PDqledWn4vu1_SvIkkY1HQCLcBGAs/s1600/coeeg.jpg);
            position: relative
        }
        </style>
        </b:if>
        <?php } ?>
        <?php dynamic_sidebar( 'right-sidebar' ); ?>


    </div><!-- #right-sidebar -->