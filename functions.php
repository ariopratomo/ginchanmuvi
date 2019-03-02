<?php
/**
 * Understrap functions and definitions
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

$understrap_includes = array(
	'/theme-settings.php',                  // Initialize theme default settings.
	'/setup.php',                           // Theme setup and custom theme supports.
	'/widgets.php',                         // Register widget area.
	'/enqueue.php',                         // Enqueue scripts and styles.
	'/template-tags.php',                   // Custom template tags for this theme.
	'/pagination.php',                      // Custom pagination for this theme.
	'/hooks.php',                           // Custom hooks.
	'/extras.php',                          // Custom functions that act independently of the theme templates.
	'/customizer.php',                      // Customizer additions.
	'/custom-comments.php',                 // Custom Comments file.
	'/jetpack.php',                         // Load Jetpack compatibility file.
	'/class-wp-bootstrap-navwalker.php',    // Load custom WordPress nav walker.
	'/woocommerce.php',                     // Load WooCommerce functions.
	'/editor.php',                          // Load Editor functions.
	'/deprecated.php',                      // Load deprecated functions.
);

foreach ( $understrap_includes as $file ) {
	$filepath = locate_template( 'inc' . $file );
	if ( ! $filepath ) {
		trigger_error( sprintf( 'Error locating /inc%s for inclusion', $file ), E_USER_ERROR );
	}
	require_once $filepath;
}

// Custom Function

function the_breadcrumb() {
	if (!is_home()) {
		echo '<a href="';
		echo get_option('home');
		echo '">';
		bloginfo('name');
		echo "</a> » ";
		if (is_category() || is_single()) {
			the_category('title_li=');
			if (is_single()) {
				echo " » ";
				the_title();
			}
		} elseif (is_page()) {
			echo the_title();
		}
	}
}

function example_cats_related_post() {

    $post_id = get_the_ID();
    $cat_ids = array();
    $categories = wp_get_post_tags($post->ID);

    if(!empty($categories) && is_wp_error($categories)):
        foreach ($categories as $category):
            array_push($cat_ids, $category->term_id);
        endforeach;
    endif;

    $current_post_type = get_post_type($post_id);
    $query_args = array( 

        'tag__id'   => $cat_ids,
        'post_type'      => $current_post_type,
        'post_not_in'    => array($post_id),
        'posts_per_page'  => '7'


     );

	 
    $related_cats_post = new WP_Query( $query_args );

    if($related_cats_post->have_posts()):?>
<div class="latest related">
    <div class="los"><?php
		 while($related_cats_post->have_posts()): $related_cats_post->the_post(); ?>
        <div class="box">
            <div class="bx">
                <a class="tip" rel="2380" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"
                    alt="<?php the_title(); ?>">
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
                                <h2><?php the_title(); ?></h2>
                            </div>
                        </div>
                        <img src="<?php the_post_thumbnail_url(); ?>" title="<?php the_title(); ?>"
                            alt="<?php the_title(); ?>">
                    </div>
                </a>
            </div>
        </div>
        <?php endwhile;?>
    </div>
</div>
<?php
        // Restore original Post Data
        wp_reset_postdata();
     endif; 

}


// Info Movie
// Register Custom Country
function gm_country() {

	$labels = array(
		'name'                       => _x( 'Country', 'Taxonomy General Name', 'ginchanmuvi' ),
		'singular_name'              => _x( 'Country', 'Taxonomy Singular Name', 'ginchanmuvi' ),
		'menu_name'                  => __( 'Country', 'ginchanmuvi' ),
		'all_items'                  => __( 'All Country', 'ginchanmuvi' ),
		'parent_item'                => __( 'Parent Country', 'ginchanmuvi' ),
		'parent_item_colon'          => __( 'Parent Item:', 'ginchanmuvi' ),
		'new_item_name'              => __( 'New Country Name', 'ginchanmuvi' ),
		'add_new_item'               => __( 'Add CountryItem', 'ginchanmuvi' ),
		'edit_item'                  => __( 'Edit Country', 'ginchanmuvi' ),
		'update_item'                => __( 'Update Country', 'ginchanmuvi' ),
		'view_item'                  => __( 'View Country', 'ginchanmuvi' ),
		'separate_items_with_commas' => __( 'Separate Country with commas', 'ginchanmuvi' ),
		'add_or_remove_items'        => __( 'Add or remove Country', 'ginchanmuvi' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'ginchanmuvi' ),
		'popular_items'              => __( 'Popular Country', 'ginchanmuvi' ),
		'search_items'               => __( 'Search Country', 'ginchanmuvi' ),
		'not_found'                  => __( 'Not Found', 'ginchanmuvi' ),
		'no_terms'                   => __( 'No Country', 'ginchanmuvi' ),
		'items_list'                 => __( 'Country list', 'ginchanmuvi' ),
		'items_list_navigation'      => __( 'Country list navigation', 'ginchanmuvi' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => false,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'country', array( 'post' ), $args );

}
add_action( 'init', 'gm_country', 0 );

// Register Custom Genre
function gm_genre() {

	$labels = array(
		'name'                       => _x( 'Genres', 'Taxonomy General Name', 'ginchanmuvi' ),
		'singular_name'              => _x( 'Genres', 'Taxonomy Singular Name', 'ginchanmuvi' ),
		'menu_name'                  => __( 'Genres', 'ginchanmuvi' ),
		'all_items'                  => __( 'All Genre', 'ginchanmuvi' ),
		'parent_item'                => __( 'Parent Genre', 'ginchanmuvi' ),
		'parent_item_colon'          => __( 'Parent Item:', 'ginchanmuvi' ),
		'new_item_name'              => __( 'New Genre Name', 'ginchanmuvi' ),
		'add_new_item'               => __( 'Add Genre Item', 'ginchanmuvi' ),
		'edit_item'                  => __( 'Edit Genre', 'ginchanmuvi' ),
		'update_item'                => __( 'Update Genre', 'ginchanmuvi' ),
		'view_item'                  => __( 'View Genre', 'ginchanmuvi' ),
		'separate_items_with_commas' => __( 'Separate Genre with commas', 'ginchanmuvi' ),
		'add_or_remove_items'        => __( 'Add or remove Genre', 'ginchanmuvi' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'ginchanmuvi' ),
		'popular_items'              => __( 'Popular Genre', 'ginchanmuvi' ),
		'search_items'               => __( 'Search Genre', 'ginchanmuvi' ),
		'not_found'                  => __( 'Not Found', 'ginchanmuvi' ),
		'no_terms'                   => __( 'No Genre', 'ginchanmuvi' ),
		'items_list'                 => __( 'Genre list', 'ginchanmuvi' ),
		'items_list_navigation'      => __( 'Genre list navigation', 'ginchanmuvi' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => false,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'genre', array( 'post' ), $args );

}
add_action( 'init', 'gm_genre', 0 );

// Register Custom Year
function gm_year() {

	$labels = array(
		'name'                       => _x( 'years', 'Taxonomy General Name', 'ginchanmuvi' ),
		'singular_name'              => _x( 'years', 'Taxonomy Singular Name', 'ginchanmuvi' ),
		'menu_name'                  => __( 'years', 'ginchanmuvi' ),
		'all_items'                  => __( 'All year', 'ginchanmuvi' ),
		'parent_item'                => __( 'Parent year', 'ginchanmuvi' ),
		'parent_item_colon'          => __( 'Parent Item:', 'ginchanmuvi' ),
		'new_item_name'              => __( 'New year Name', 'ginchanmuvi' ),
		'add_new_item'               => __( 'Add year Item', 'ginchanmuvi' ),
		'edit_item'                  => __( 'Edit year', 'ginchanmuvi' ),
		'update_item'                => __( 'Update year', 'ginchanmuvi' ),
		'view_item'                  => __( 'View year', 'ginchanmuvi' ),
		'separate_items_with_commas' => __( 'Separate year with commas', 'ginchanmuvi' ),
		'add_or_remove_items'        => __( 'Add or remove year', 'ginchanmuvi' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'ginchanmuvi' ),
		'popular_items'              => __( 'Popular year', 'ginchanmuvi' ),
		'search_items'               => __( 'Search year', 'ginchanmuvi' ),
		'not_found'                  => __( 'Not Found', 'ginchanmuvi' ),
		'no_terms'                   => __( 'No year', 'ginchanmuvi' ),
		'items_list'                 => __( 'year list', 'ginchanmuvi' ),
		'items_list_navigation'      => __( 'year list navigation', 'ginchanmuvi' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => false,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
        'show_tagcloud'              => true,
        'rewrite'            => array( 'slug' => 'tahun', ),
	);
	register_taxonomy( 'year', array( 'post' ), $args );

}
add_action( 'init', 'gm_year', 0 );

function info_muvi( $meta_boxes ) {
	$prefix = 'gm_';

	$meta_boxes[] = array(
		'id' => 'infomuvi',
		'title' => esc_html__( 'Info Movie', 'ginchan-muvi' ),
		'post_types' => array('post' ),
		'context' => 'advanced',
		'priority' => 'default',
		'autosave' => 'false',
		'fields' => array(
			array(
				'id' => $prefix . 'director',
				'type' => 'text',
				'name' => esc_html__( 'Directors', 'ginchan-muvi' ),
				'std' => '-',
				'size' => 60,
			),
			array(
				'id' => $prefix . 'actor',
				'type' => 'text',
				'name' => esc_html__( 'Actors', 'ginchan-muvi' ),
				'std' => '-',
				'size' => 60,
			),
			array(
				'id' => $prefix . 'released',
				'type' => 'text',
				'name' => esc_html__( 'Released', 'ginchan-muvi' ),
				'std' => '-',
				'size' => 40,
			),
			array(
				'id' => $prefix . 'score',
				'type' => 'text',
				'name' => esc_html__( 'Score', 'ginchan-muvi' ),
				'std' => '-',
				'size' => 20,
			),
			array(
				'id' => $prefix . 'duration',
				'type' => 'text',
				'name' => esc_html__( 'Duration', 'ginchan-muvi' ),
				'std' => '-',
				'size' => 20,
			),
			array(
				'id' => $prefix . 'quality',
				'type' => 'text',
				'name' => esc_html__( 'Quality', 'ginchan-muvi' ),
				'std' => '-',
				'size' => 20,
			),
		),
	);

	return $meta_boxes;
}
add_filter( 'rwmb_meta_boxes', 'info_muvi' );

// Download Box Function


function dlbox_1080p( $meta_boxes ) {
	$prefix = 'gm_';

	$meta_boxes[] = array(
		'id' => 'dlbox1080p',
		'title' => esc_html__( 'Downloadbox 1080p', 'ginchan-muvi' ),
		'post_types' => array('post', 'page' ),
		'context' => 'advanced',
		'priority' => 'default',
		'autosave' => 'true',
		'fields' => array(
			array(
				'before'=>'<div style=" display: inline-block;border-right: 500px solid #2ecc71;margin: 15px;background: #f1c40f;color: #fff;font-size: 15px;font-weight: bold;"><span style="padding: 7px;">Server 1</span></div>',
				'id' => $prefix . 'dlbox_server1_1080p',
				'type' => 'text',
				'name' => esc_html__( 'Server 1', 'ginchan-muvi' ),
				'std' => 'Server 1 1080p',
				'placeholder' => esc_html__( 'Server 1', 'ginchan-muvi' ),
				'size' => 30,
				'max_clone' => 5,
				'add_button' => esc_html__( 'Tambah Link Server', 'ginchan-muvi' ),
			),
			array(
				'id' => $prefix . 'dlbox_link1_1080',
				'type' => 'text',
				'name' => esc_html__( 'Link 1', 'ginchan-muvi' ),
				'placeholder' => esc_html__( 'http://server1.com', 'ginchan-muvi' ),
				'size' => 70,
				'max_clone' => 5,
				'add_button' => esc_html__( 'Tambah Link Server', 'ginchan-muvi' ),
			),
			array(
				'before'=>'<div style=" display: inline-block;border-right: 500px solid #2ecc71;margin: 15px;background: #f1c40f;color: #fff;font-size: 15px;font-weight: bold;"><span style="padding: 7px;">Server 2</span></div>',
				'id' => $prefix . 'dlbox_server2_1080p',
				'type' => 'text',
				'name' => esc_html__( 'Server 2', 'ginchan-muvi' ),
				'std' => 'Server 2 1080p',
				'placeholder' => esc_html__( 'Server 2', 'ginchan-muvi' ),
				'size' => 30,
				'max_clone' => 5,
				'add_button' => esc_html__( 'Tambah Link Server', 'ginchan-muvi' ),
			),
			array(
				'id' => $prefix . 'dlbox_link2_1080',
				'type' => 'text',
				'name' => esc_html__( 'Link 2', 'ginchan-muvi' ),
				'placeholder' => esc_html__( 'http://server2.com', 'ginchan-muvi' ),
				'size' => 70,
				'max_clone' => 5,
				'add_button' => esc_html__( 'Tambah Link Server', 'ginchan-muvi' ),
			),
			array(
				'before'=>'<div style=" display: inline-block;border-right: 500px solid #2ecc71;margin: 15px;background: #f1c40f;color: #fff;font-size: 15px;
                font-weight: bold;"><span style="padding: 7px;">Server 3</span></div>',
				'id' => $prefix . 'dlbox_server3_1080p',
				'type' => 'text',
				'name' => esc_html__( 'Server 3', 'ginchan-muvi' ),
				'std' => 'Server 3 1080p',
				'placeholder' => esc_html__( 'Server 3', 'ginchan-muvi' ),
				'size' => 30,
				'max_clone' => 5,
				'add_button' => esc_html__( 'Tambah Link Server', 'ginchan-muvi' ),
			),
			array(
				'id' => $prefix . 'dlbox_link3_1080',
				'type' => 'text',
				'name' => esc_html__( 'Link 3', 'ginchan-muvi' ),
				'placeholder' => esc_html__( 'http://server3.com', 'ginchan-muvi' ),
				'size' => 70,
				'max_clone' => 5,
				'add_button' => esc_html__( 'Tambah Link Server', 'ginchan-muvi' ),
			),
            array(
				'before'=>'<div style=" display: inline-block;border-right: 500px solid #2ecc71;margin: 15px;background: #f1c40f;color: #fff;font-size: 15px;
                font-weight: bold;"><span style="padding: 7px;">Server 4</span></div>',
				'id' => $prefix . 'dlbox_server4_1080p',
				'type' => 'text',
				'name' => esc_html__( 'Server 4', 'ginchan-muvi' ),
				'std' => 'Server 4 1080p',
				'placeholder' => esc_html__( 'Server 4', 'ginchan-muvi' ),
				'size' => 30,
				'max_clone' => 5,
				'add_button' => esc_html__( 'Tambah Link Server', 'ginchan-muvi' ),
			),
			array(
				'id' => $prefix . 'dlbox_link4_1080',
				'type' => 'text',
				'name' => esc_html__( 'Link 4', 'ginchan-muvi' ),
				'placeholder' => esc_html__( 'http://server4.com', 'ginchan-muvi' ),
				'size' => 70,
				'max_clone' => 5,
				'add_button' => esc_html__( 'Tambah Link Server', 'ginchan-muvi' ),
			),
		),
	);

	return $meta_boxes;
}
add_filter( 'rwmb_meta_boxes', 'dlbox_1080p' );

function dlbox_720p( $meta_boxes ) {
	$prefix = 'gm_';

	$meta_boxes[] = array(
		'id' => 'dlbox720p',
		'title' => esc_html__( 'Downloadbox 720p', 'ginchan-muvi' ),
		'post_types' => array('post', 'page' ),
		'context' => 'advanced',
		'priority' => 'default',
		'autosave' => 'true',
		'fields' => array(
			array(
				'before'=>'<div style=" display: inline-block;border-right: 500px solid #2ecc71;margin: 15px;background: #f1c40f;color: #fff;font-size: 15px;font-weight: bold;"><span style="padding: 7px;">Server 1</span></div>',
				'id' => $prefix . 'dlbox_server1_720p',
				'type' => 'text',
				'name' => esc_html__( 'Server 1', 'ginchan-muvi' ),
				'std' => 'Server 1 720p',
				'placeholder' => esc_html__( 'Server 1', 'ginchan-muvi' ),
				'size' => 30,
				'max_clone' => 5,
				'add_button' => esc_html__( 'Tambah Link Server', 'ginchan-muvi' ),
			),
			array(
				'id' => $prefix . 'dlbox_link1_720',
				'type' => 'text',
				'name' => esc_html__( 'Link 1', 'ginchan-muvi' ),
				'placeholder' => esc_html__( 'http://server1.com', 'ginchan-muvi' ),
				'size' => 70,
				'max_clone' => 5,
				'add_button' => esc_html__( 'Tambah Link Server', 'ginchan-muvi' ),
			),
			array(
				'before'=>'<div style=" display: inline-block;border-right: 500px solid #2ecc71;margin: 15px;background: #f1c40f;color: #fff;font-size: 15px;font-weight: bold;"><span style="padding: 7px;">Server 2</span></div>',
				'id' => $prefix . 'dlbox_server2_720p',
				'type' => 'text',
				'name' => esc_html__( 'Server 2', 'ginchan-muvi' ),
				'std' => 'Server 2 720p',
				'placeholder' => esc_html__( 'Server 2', 'ginchan-muvi' ),
				'size' => 30,
				'max_clone' => 5,
				'add_button' => esc_html__( 'Tambah Link Server', 'ginchan-muvi' ),
			),
			array(
				'id' => $prefix . 'dlbox_link2_720',
				'type' => 'text',
				'name' => esc_html__( 'Link 2', 'ginchan-muvi' ),
				'placeholder' => esc_html__( 'http://server2.com', 'ginchan-muvi' ),
				'size' => 70,
				'max_clone' => 5,
				'add_button' => esc_html__( 'Tambah Link Server', 'ginchan-muvi' ),
			),
			array(
				'before'=>'<div style=" display: inline-block;border-right: 500px solid #2ecc71;margin: 15px;background: #f1c40f;color: #fff;font-size: 15px;
                font-weight: bold;"><span style="padding: 7px;">Server 3</span></div>',
				'id' => $prefix . 'dlbox_server3_720p',
				'type' => 'text',
				'name' => esc_html__( 'Server 3', 'ginchan-muvi' ),
				'std' => 'Server 3 720p',
				'placeholder' => esc_html__( 'Server 3', 'ginchan-muvi' ),
				'size' => 30,
				'max_clone' => 5,
				'add_button' => esc_html__( 'Tambah Link Server', 'ginchan-muvi' ),
			),
			array(
				'id' => $prefix . 'dlbox_link3_720',
				'type' => 'text',
				'name' => esc_html__( 'Link 3', 'ginchan-muvi' ),
				'placeholder' => esc_html__( 'http://server3.com', 'ginchan-muvi' ),
				'size' => 70,
				'max_clone' => 5,
				'add_button' => esc_html__( 'Tambah Link Server', 'ginchan-muvi' ),
			),
            array(
				'before'=>'<div style=" display: inline-block;border-right: 500px solid #2ecc71;margin: 15px;background: #f1c40f;color: #fff;font-size: 15px;
                font-weight: bold;"><span style="padding: 7px;">Server 4</span></div>',
				'id' => $prefix . 'dlbox_server4_720p',
				'type' => 'text',
				'name' => esc_html__( 'Server 4', 'ginchan-muvi' ),
				'std' => 'Server 4 720p',
				'placeholder' => esc_html__( 'Server 4', 'ginchan-muvi' ),
				'size' => 30,
				'max_clone' => 5,
				'add_button' => esc_html__( 'Tambah Link Server', 'ginchan-muvi' ),
			),
			array(
				'id' => $prefix . 'dlbox_link4_720',
				'type' => 'text',
				'name' => esc_html__( 'Link 4', 'ginchan-muvi' ),
				'placeholder' => esc_html__( 'http://server4.com', 'ginchan-muvi' ),
				'size' => 70,
				'max_clone' => 5,
				'add_button' => esc_html__( 'Tambah Link Server', 'ginchan-muvi' ),
			),
		),
	);

	return $meta_boxes;
}
add_filter( 'rwmb_meta_boxes', 'dlbox_720p' );

function dlbox_480( $meta_boxes ) {
	$prefix = 'gm_';

	$meta_boxes[] = array(
		'id' => 'dlbox480',
		'title' => esc_html__( 'Downloadbox 480', 'ginchan-muvi' ),
		'post_types' => array('post', 'page' ),
		'context' => 'advanced',
		'priority' => 'default',
		'autosave' => 'true',
		'fields' => array(
			array(
				'before'=>'<div style=" display: inline-block;border-right: 500px solid #2ecc71;margin: 15px;background: #f1c40f;color: #fff;font-size: 15px;font-weight: bold;"><span style="padding: 7px;">Server 1</span></div>',
				'id' => $prefix . 'dlbox_server1_480p',
				'type' => 'text',
				'name' => esc_html__( 'Server 1', 'ginchan-muvi' ),
				'std' => 'Server 1 480p',
				'placeholder' => esc_html__( 'Server 1', 'ginchan-muvi' ),
				'size' => 30,
				'max_clone' => 5,
				'add_button' => esc_html__( 'Tambah Link Server', 'ginchan-muvi' ),
			),
			array(
				'id' => $prefix . 'dlbox_link1_480',
				'type' => 'text',
				'name' => esc_html__( 'Link 1', 'ginchan-muvi' ),
				'placeholder' => esc_html__( 'http://server1.com', 'ginchan-muvi' ),
				'size' => 70,
				'max_clone' => 5,
				'add_button' => esc_html__( 'Tambah Link Server', 'ginchan-muvi' ),
			),
			array(
				'before'=>'<div style=" display: inline-block;border-right: 500px solid #2ecc71;margin: 15px;background: #f1c40f;color: #fff;font-size: 15px;font-weight: bold;"><span style="padding: 7px;">Server 2</span></div>',
				'id' => $prefix . 'dlbox_server2_480p',
				'type' => 'text',
				'name' => esc_html__( 'Server 2', 'ginchan-muvi' ),
				'std' => 'Server 2 480p',
				'placeholder' => esc_html__( 'Server 2', 'ginchan-muvi' ),
				'size' => 30,
				'max_clone' => 5,
				'add_button' => esc_html__( 'Tambah Link Server', 'ginchan-muvi' ),
			),
			array(
				'id' => $prefix . 'dlbox_link2_480',
				'type' => 'text',
				'name' => esc_html__( 'Link 2', 'ginchan-muvi' ),
				'placeholder' => esc_html__( 'http://server2.com', 'ginchan-muvi' ),
				'size' => 70,
				'max_clone' => 5,
				'add_button' => esc_html__( 'Tambah Link Server', 'ginchan-muvi' ),
			),
			array(
				'before'=>'<div style=" display: inline-block;border-right: 500px solid #2ecc71;margin: 15px;background: #f1c40f;color: #fff;font-size: 15px;
                font-weight: bold;"><span style="padding: 7px;">Server 3</span></div>',
				'id' => $prefix . 'dlbox_server3_480p',
				'type' => 'text',
				'name' => esc_html__( 'Server 3', 'ginchan-muvi' ),
				'std' => 'Server 3 480p',
				'placeholder' => esc_html__( 'Server 3', 'ginchan-muvi' ),
				'size' => 30,
				'max_clone' => 5,
				'add_button' => esc_html__( 'Tambah Link Server', 'ginchan-muvi' ),
			),
			array(
				'id' => $prefix . 'dlbox_link3_480',
				'type' => 'text',
				'name' => esc_html__( 'Link 3', 'ginchan-muvi' ),
				'placeholder' => esc_html__( 'http://server3.com', 'ginchan-muvi' ),
				'size' => 70,
				'max_clone' => 5,
				'add_button' => esc_html__( 'Tambah Link Server', 'ginchan-muvi' ),
			),
            array(
				'before'=>'<div style=" display: inline-block;border-right: 500px solid #2ecc71;margin: 15px;background: #f1c40f;color: #fff;font-size: 15px;
                font-weight: bold;"><span style="padding: 7px;">Server 4</span></div>',
				'id' => $prefix . 'dlbox_server4_480p',
				'type' => 'text',
				'name' => esc_html__( 'Server 4p', 'ginchan-muvi' ),
				'std' => 'Server 4 480p',
				'placeholder' => esc_html__( 'Server 4', 'ginchan-muvi' ),
				'size' => 30,
				'max_clone' => 5,
				'add_button' => esc_html__( 'Tambah Link Server', 'ginchan-muvi' ),
			),
			array(
				'id' => $prefix . 'dlbox_link4_480',
				'type' => 'text',
				'name' => esc_html__( 'Link 4', 'ginchan-muvi' ),
				'placeholder' => esc_html__( 'http://server4.com', 'ginchan-muvi' ),
				'size' => 70,
				'max_clone' => 5,
				'add_button' => esc_html__( 'Tambah Link Server', 'ginchan-muvi' ),
			),
		),
	);

	return $meta_boxes;
}
add_filter( 'rwmb_meta_boxes', 'dlbox_480' );

function dlbox_360( $meta_boxes ) {
	$prefix = 'gm_';

	$meta_boxes[] = array(
		'id' => 'dlbox360',
		'title' => esc_html__( 'Downloadbox 360', 'ginchan-muvi' ),
		'post_types' => array('post', 'page' ),
		'context' => 'advanced',
		'priority' => 'default',
		'autosave' => 'true',
		'fields' => array(
			array(
				'before'=>'<div style=" display: inline-block;border-right: 500px solid #2ecc71;margin: 15px;background: #f1c40f;color: #fff;font-size: 15px;font-weight: bold;"><span style="padding: 7px;">Server 1</span></div>',
				'id' => $prefix . 'dlbox_server1_360p',
				'type' => 'text',
				'name' => esc_html__( 'Server 1', 'ginchan-muvi' ),
				'std' => 'Server 1 360p',
				'placeholder' => esc_html__( 'Server 1', 'ginchan-muvi' ),
				'size' => 30,
				'max_clone' => 5,
				'add_button' => esc_html__( 'Tambah Link Server', 'ginchan-muvi' ),
			),
			array(
				'id' => $prefix . 'dlbox_link1_360',
				'type' => 'text',
				'name' => esc_html__( 'Link 1', 'ginchan-muvi' ),
				'placeholder' => esc_html__( 'http://server1.com', 'ginchan-muvi' ),
				'size' => 70,
				'max_clone' => 5,
				'add_button' => esc_html__( 'Tambah Link Server', 'ginchan-muvi' ),
			),
			array(
				'before'=>'<div style=" display: inline-block;border-right: 500px solid #2ecc71;margin: 15px;background: #f1c40f;color: #fff;font-size: 15px;font-weight: bold;"><span style="padding: 7px;">Server 2</span></div>',
				'id' => $prefix . 'dlbox_server2_360p',
				'type' => 'text',
				'name' => esc_html__( 'Server 2', 'ginchan-muvi' ),
				'std' => 'Server 2 360p',
				'placeholder' => esc_html__( 'Server 2', 'ginchan-muvi' ),
				'size' => 30,
				'max_clone' => 5,
				'add_button' => esc_html__( 'Tambah Link Server', 'ginchan-muvi' ),
			),
			array(
				'id' => $prefix . 'dlbox_link2_360',
				'type' => 'text',
				'name' => esc_html__( 'Link 2', 'ginchan-muvi' ),
				'placeholder' => esc_html__( 'http://server2.com', 'ginchan-muvi' ),
				'size' => 70,
				'max_clone' => 5,
				'add_button' => esc_html__( 'Tambah Link Server', 'ginchan-muvi' ),
			),
			array(
				'before'=>'<div style=" display: inline-block;border-right: 500px solid #2ecc71;margin: 15px;background: #f1c40f;color: #fff;font-size: 15px;
                font-weight: bold;"><span style="padding: 7px;">Server 3</span></div>',
				'id' => $prefix . 'dlbox_server3_360p',
				'type' => 'text',
				'name' => esc_html__( 'Server 3', 'ginchan-muvi' ),
				'std' => 'Server 3 360p',
				'placeholder' => esc_html__( 'Server 3', 'ginchan-muvi' ),
				'size' => 30,
				'max_clone' => 5,
				'add_button' => esc_html__( 'Tambah Link Server', 'ginchan-muvi' ),
			),
			array(
				'id' => $prefix . 'dlbox_link3_360',
				'type' => 'text',
				'name' => esc_html__( 'Link 3', 'ginchan-muvi' ),
				'placeholder' => esc_html__( 'http://server3.com', 'ginchan-muvi' ),
				'size' => 70,
				'max_clone' => 5,
				'add_button' => esc_html__( 'Tambah Link Server', 'ginchan-muvi' ),
			),
            array(
				'before'=>'<div style=" display: inline-block;border-right: 500px solid #2ecc71;margin: 15px;background: #f1c40f;color: #fff;font-size: 15px;
                font-weight: bold;"><span style="padding: 7px;">Server 4</span></div>',
				'id' => $prefix . 'dlbox_server4_360p',
				'type' => 'text',
				'name' => esc_html__( 'Server 4', 'ginchan-muvi' ),
				'std' => 'Server 4 360p',
				'placeholder' => esc_html__( 'Server 4', 'ginchan-muvi' ),
				'size' => 30,
				'max_clone' => 5,
				'add_button' => esc_html__( 'Tambah Link Server', 'ginchan-muvi' ),
			),
			array(
				'id' => $prefix . 'dlbox_link4_360',
				'type' => 'text',
				'name' => esc_html__( 'Link 4', 'ginchan-muvi' ),
				'placeholder' => esc_html__( 'http://server4.com', 'ginchan-muvi' ),
				'size' => 70,
				'max_clone' => 5,
				'add_button' => esc_html__( 'Tambah Link Server', 'ginchan-muvi' ),
			),
		),
	);

	return $meta_boxes;
}
add_filter( 'rwmb_meta_boxes', 'dlbox_360' );



?>
