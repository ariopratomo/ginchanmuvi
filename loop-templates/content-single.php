<?php
/**
 * Single post partial template.
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>
<table class="mb-2">
    <tbody>
        <tr>
            <td style="text-align:right; padding: 1px;"><a href="mailto:yutubku456@gmail.com" target="_blank"><img
                        src="<?php echo get_template_directory_uri();?>/img/iklan.gif" alt="Pasang Iklan"
                        title="Pasang Iklan"></a>
            </td>
        </tr>
    </tbody>
</table>
<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
    <div class="bread mb-1">
        <?php the_breadcrumb(); ?>
    </div>
    <div class="entry-content">
        <div class="sinopsis">
            <i class="mb-2">
                <strong>Sinopsis</strong>
            </i>
            <?php the_content(); ?>
            <?php
if(!empty($fhd1) || !empty($hd1) || !empty($pahe1) || !empty($mini1) || !empty($fhd2) || !empty($hd2) || !empty($pahe2) || !empty($mini2) || !empty($fhd3) || !empty($hd3) || !empty($pahe3) || !empty($mini3) || !empty($fhd4) || !empty($hd4) || !empty($pahe4) || !empty($mini4)){
echo'            <div class="download">
<a class="btn btn-danger" href="#dl" role="button">
    <i class="fa fa-cloud-download" aria-hidden="true"></i> Download <i class="fa fa-cloud-download"
        aria-hidden="true"></i>
</a>
</div>';
}
        ?>

        </div>
        <?php
		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'understrap' ),
				'after'  => '</div>',
			)
		);
		?>

    </div><!-- .entry-content -->
    <div class="infodb clearfix">
        <div class="infl">
            <div class="left">
                <div class="limage">
                    <img src="<?php the_post_thumbnail_url()?>">
                </div>
            </div>
            <div class="right" id="dl">
                <h1><?php the_title()?></h1>
                <div class="mgn">
                    <div class="l">

                        <span><b>Genre</b>: <?php echo get_the_term_list( $post->ID, 'genre', '', ', ', '' ); ?></span>
                        <span><b>Director</b>: <?= get_post_meta($post->ID, 'gm_director', true); ?></span>
                        <span><b>Actors</b>: <?= get_post_meta($post->ID, 'gm_actor', true); ?></span>
                        <span><b>Country</b>:
                            <?php echo get_the_term_list( $post->ID, 'country', '', ', ', '' ); ?></span>
                        <span><b>Released</b>: <?= get_post_meta($post->ID, 'gm_released', true); ?></span>
                    </div>
                    <div class="r">
                        <span><b>Score:</b> <i
                                class="imdbx"><?= get_post_meta($post->ID, 'gm_score', true); ?></i></span>
                        <span><b>Duration</b>: <?= get_post_meta($post->ID, 'gm_duration', true); ?></span>
                        <span><b>Quality:</b> <i
                                class="qua"><?= get_post_meta($post->ID, 'gm_quality', true); ?></i></span>
                        <span><b>Years</b>: <?php echo get_the_term_list( $post->ID, 'year', '', ', ', '' ); ?></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="infr">
            <div class="kln"></div>
        </div>
    </div>
    <?php 
    $fhd1 = get_post_meta($post->ID, 'gm_dlbox_link1_1080', true);
    $fhd2 = get_post_meta($post->ID, 'gm_dlbox_link2_1080', true);
    $fhd3 = get_post_meta($post->ID, 'gm_dlbox_link3_1080', true);
    $fhd4 = get_post_meta($post->ID, 'gm_dlbox_link4_1080', true);
    $hd1 = get_post_meta($post->ID, 'gm_dlbox_link1_720', true);
    $hd2 = get_post_meta($post->ID, 'gm_dlbox_link2_720', true);
    $hd3 = get_post_meta($post->ID, 'gm_dlbox_link3_720', true);
    $hd4 = get_post_meta($post->ID, 'gm_dlbox_link4_720', true);
    $pahe1 = get_post_meta($post->ID, 'gm_dlbox_link1_480', true);
    $pahe2 = get_post_meta($post->ID, 'gm_dlbox_link2_480', true);
    $pahe3 = get_post_meta($post->ID, 'gm_dlbox_link3_480', true);
    $pahe4 = get_post_meta($post->ID, 'gm_dlbox_link4_480', true);
    $mini1 = get_post_meta($post->ID, 'gm_dlbox_link1_360', true);
    $mini2 = get_post_meta($post->ID, 'gm_dlbox_link2_360', true);
    $mini3 = get_post_meta($post->ID, 'gm_dlbox_link3_360', true);
    $mini4 = get_post_meta($post->ID, 'gm_dlbox_link4_360', true);
    $sfhd1 = get_post_meta($post->ID, 'gm_dlbox_server1_1080p', true);
    $sfhd2 = get_post_meta($post->ID, 'gm_dlbox_server2_1080p', true);
    $sfhd3 = get_post_meta($post->ID, 'gm_dlbox_server3_1080p', true);
    $sfhd4 = get_post_meta($post->ID, 'gm_dlbox_server4_1080p', true);
    $shd1 = get_post_meta($post->ID, 'gm_dlbox_server1_720p', true);
    $shd2 = get_post_meta($post->ID, 'gm_dlbox_server2_720p', true);
    $shd3 = get_post_meta($post->ID, 'gm_dlbox_server3_720p', true);
    $shd4 = get_post_meta($post->ID, 'gm_dlbox_server4_720p', true);
    $spahe1 = get_post_meta($post->ID, 'gm_dlbox_server1_480p', true);
    $spahe2 = get_post_meta($post->ID, 'gm_dlbox_server2_480p', true);
    $spahe3 = get_post_meta($post->ID, 'gm_dlbox_server3_480p', true);
    $spahe4 = get_post_meta($post->ID, 'gm_dlbox_server4_480p', true);
    $smini1 = get_post_meta($post->ID, 'gm_dlbox_server1_360p', true);
    $smini2 = get_post_meta($post->ID, 'gm_dlbox_server2_360p', true);
    $smini3 = get_post_meta($post->ID, 'gm_dlbox_server3_360p', true);
    $smini4 = get_post_meta($post->ID, 'gm_dlbox_server4_360p', true);
    ?>

    <?php

if(!empty($fhd1) || !empty($hd1) || !empty($pahe1) || !empty($mini1)){
    echo'<div class="dl-box mt-2 mb-4 clearfix"> <div class="dlhead"><span>Server</span><span>Quality</span><span>Links</span></div>
    <div class="dl-item">';
    
}

?>
    <?php
        if(!empty($fhd1)){
            echo '<a href="'.$fhd1.'"> <span><b>'.$sfhd1.'</b></span></span><span>1080p</span><span class="dlxxx"><b class="dashicons dashicons-download"></b> <i>Download</i></span></a>';     
        }
        if(!empty($fhd2)){
            echo '<a href="'.$fhd2.'"> <span><b>'.$sfhd2.'</b></span></span><span>1080p</span><span class="dlxxx"><b class="dashicons dashicons-download"></b> <i>Download</i></span></a>';     
        }
        if(!empty($fhd3)){
            echo '<a href="'.$fhd3.'"> <span><b>'.$sfhd3.'</b></span></span><span>1080p</span><span class="dlxxx"><b class="dashicons dashicons-download"></b> <i>Download</i></span></a>';     
        }
        if(!empty($fhd4)){
            echo '<a href="'.$fhd4.'"> <span><b>'.$sfhd4.'</b></span></span><span>1080p</span><span class="dlxxx"><b class="dashicons dashicons-download"></b> <i>Download</i></span></a>';     
        }
        if(!empty($hd1)){
            echo '<a href="'.$hd1.'"> <span><b>'.$shd1.'</b></span></span><span>720p</span><span class="dlxxx"><b class="dashicons dashicons-download"></b> <i>Download</i></span></a>';     
        }
        if(!empty($hd2)){
            echo '<a href="'.$hd2.'"> <span><b>'.$shd2.'</b></span></span><span>720p</span><span class="dlxxx"><b class="dashicons dashicons-download"></b> <i>Download</i></span></a>';     
        }
        if(!empty($hd3)){
            echo '<a href="'.$hd3.'"> <span><b>'.$shd3.'</b></span></span><span>720p</span><span class="dlxxx"><b class="dashicons dashicons-download"></b> <i>Download</i></span></a>';     
        }
        if(!empty($hd4)){
            echo '<a href="'.$hd4.'"> <span><b>'.$shd4.'</b></span></span><span>720p</span><span class="dlxxx"><b class="dashicons dashicons-download"></b> <i>Download</i></span></a>';     
        }
        if(!empty($pahe1)){
            echo '<a href="'.$pahe1.'"> <span><b>'.$spahe1.'</b></span></span><span>480p</span><span class="dlxxx"><b class="dashicons dashicons-download"></b> <i>Download</i></span></a>';     
        }
        if(!empty($pahe2)){
            echo '<a href="'.$pahe2.'"> <span><b>'.$spahe2.'</b></span></span><span>480p</span><span class="dlxxx"><b class="dashicons dashicons-download"></b> <i>Download</i></span></a>';     
        }
        if(!empty($pahe3)){
            echo '<a href="'.$pahe3.'"> <span><b>'.$spahe3.'</b></span></span><span>480p</span><span class="dlxxx"><b class="dashicons dashicons-download"></b> <i>Download</i></span></a>';     
        }
        if(!empty($pahe4)){
            echo '<a href="'.$pahe4.'"> <span><b>'.$spahe4.'</b></span></span><span>480p</span><span class="dlxxx"><b class="dashicons dashicons-download"></b> <i>Download</i></span></a>';     
        }
        if(!empty($mini1)){
            echo '<a href="'.$mini1.'"> <span><b>'.$smini1.'</b></span></span><span>360p</span><span class="dlxxx"><b class="dashicons dashicons-download"></b> <i>Download</i></span></a>';     
        }
        if(!empty($mini2)){
            echo '<a href="'.$mini2.'"> <span><b>'.$smini2.'</b></span></span><span>360p</span><span class="dlxxx"><b class="dashicons dashicons-download"></b> <i>Download</i></span></a>';     
        }
        if(!empty($mini3)){
            echo '<a href="'.$mini3.'"> <span><b>'.$smini3.'</b></span></span><span>360p</span><span class="dlxxx"><b class="dashicons dashicons-download"></b> <i>Download</i></span></a>';     
        }
        if(!empty($mini4)){
            echo '<a href="'.$mini4.'"> <span><b>'.$smini4.'</b></span></span><span>360p</span><span class="dlxxx"><b class="dashicons dashicons-download"></b> <i>Download</i></span></a>';     
        }
        ?>
    <?php
if(!empty($fhd1) || !empty($hd1) || !empty($pahe1) || !empty($mini1)){
echo'</div> </div>';
}
        ?>

    <br>
    <div class="ikln clearfix">
        <table class="mb-2">
            <tbody>
                <tr>
                    <td style="text-align:right; padding: 1px;"><a href="mailto:yutubku456@gmail.com"
                            target="_blank"><img src="<?php echo get_template_directory_uri();?>/img/iklan.gif"
                                alt="Pasang Iklan" title="Pasang Iklan"></a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="related clearfix">
        <?php example_cats_related_post() ?>
    </div>

</article><!-- #post-## -->