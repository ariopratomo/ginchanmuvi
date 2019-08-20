<?php
/**
 * Post rendering content according to caller of get_template_part.
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>


<div class="box">
    <div class="bx">
        <article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
            <a class="tip" rel="4001" href="<?php the_permalink() ?>" title="<?php the_title();?>"
                alt="<?php the_title();?>">
                <div class="limit">
                    <div class="overlay">
                         <?php 
						
						$qlt= get_post_meta($post->ID, 'gm_quality', true);
						if(!empty($qlt) && $qlt != "-" ){

							echo ' <span class="quality">'.$qlt.'</span>
							';

                    }

                    ?>
                        <div class="ttl">
                            <h2><?php the_title();?></h2>
                        </div>
                    </div>
                    <img src="<?php the_post_thumbnail_url(); ?>">
                </div>
            </a>
        </article><!-- #post-## -->
    </div>
</div>