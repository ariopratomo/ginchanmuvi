<?php
/*
code by cukstudio
modifided by GinchanMuvi
*/
add_action('admin_menu', 'ctheme_menu');
function ctheme_menu() {
	add_menu_page('Configuration', 'GinnchanMuvi', 'administrator','configuration', 'func_config',get_bloginfo('template_directory') . '/img/gm.png',1 );
	add_action('admin_init', 'register_ctheme_settings' );
}
function register_ctheme_settings() {
	# General
	register_setting( 'gm-settreg', 'config_infoweb' );
	register_setting( 'gm-settreg', 'lazyload' );
	register_setting( 'gm-settreg', 'anilist_box' );
	register_setting( 'gm-settreg', 'anilist_title' );
	register_setting( 'gm-settreg', 'anilist_num' );
	register_setting( 'gm-settreg', 'ongoing_box' );
	register_setting( 'gm-settreg', 'ongoing_title' );
	register_setting( 'gm-settreg', 'ongoing_num' );
	register_setting( 'gm-settreg', 'ongoing_tax' );
	register_setting( 'gm-settreg', 'ongoing_terms' );
	register_setting( 'gm-settreg', 'pvlist_box' );
	register_setting( 'gm-settreg', 'pvlist_title' );
	register_setting( 'gm-settreg', 'pvlist_num' );
	register_setting( 'gm-settreg', 'pvlist_tag' );
	register_setting( 'gm-settreg', 'tabs1_icon' );
	register_setting( 'gm-settreg', 'tabs1_name' );
	register_setting( 'gm-settreg', 'tabs2_icon' );
	register_setting( 'gm-settreg', 'tabs2_name' );
    register_setting( 'gm-settreg', 'stream_mode' );
    register_setting( 'gm-settreg', 'country_list' );

    register_setting( 'gm-settreg', 'reports_notice' );
    register_setting( 'gm-settreg', 'url_img' );

	# Ads
	register_setting( 'gm-settads', 'ads_header' );
	register_setting( 'gm-settads', 'ads_1' );
    register_setting( 'gm-settads', 'ads_2' );
    register_setting( 'gm-settads', 'ads_side' );
}
function func_config() {

?>
<div class="wrap">
    <h2 class="wrap-title">Setting</h2>
    <form method="post" action="options.php">
        <?php if(isset($_GET[ 'tab' ])){$active_tab = $_GET[ 'tab' ];}  ?>
        <?php
	if($active_tab == 'general' or $_GET['page'] == 'configuration' && !$_GET['tab']) {
    	settings_fields( 'gm-settreg' ); 
   		do_settings_sections( 'gm-settreg' );
	}
	if($active_tab == 'ads') {
    	settings_fields( 'gm-settads' );
    	do_settings_sections( 'gm-settads' );
	}
	?>
        <div class="main-row">
            <div class="main-config col" style="width:68%;">
                <h2>Main <span><?php submit_button(); ?></span></h2>
                <h3 class="nav-tab-wrapper">
                    <a href="?page=configuration&tab=general"
                        class="nav-tab <?php echo $active_tab == 'general' ? 'nav-tab-active' : ''; echo $_GET['page'] == 'configuration' && !$_GET['tab'] ? 'nav-tab-active' : ''; ?>">General
                        settings</a>
                    <a href="?page=configuration&tab=ads"
                        class="nav-tab <?php echo $active_tab == 'ads' ? 'nav-tab-active' : ''; ?>">Ads
                        Options</a>
                </h3>
                <div class="main-notice">Thank you for using our theme, if you have complaints, questions, find a bug
                    about this theme. Don't hesitate to contact me on my fanspage. thanks.</div>
                <table class="form-table">
                    <?php if($active_tab == 'general' or $_GET['page'] == 'configuration' && !$_GET['tab']) { ?>
                    <tr valign="top">
                        <th scope="row">Country List</th>
                        <td class="_multi">
                            <input type="checkbox" name="country_list" value="country_check"
                                <?php if(get_option('country_list')==true) echo 'checked="checked"'; ?>>
                            <i class="main-notice inline" style="font-style:normal">Checked = Active | Not checked = Not
                                Active</i>
                        </td>
                    </tr>
                    <tr valign="top">
                        <th scope="row">Info Web</th>
                        <td rowspan="1"><textarea name="config_infoweb" rows="3"
                                cols="78"><?php echo get_option('config_infoweb'); ?></textarea></td>
                    </tr>
                    <tr valign="top">
                        <th scope="row">Stream Mode</th>
                        <td class="_multi">
                            <input type="checkbox" name="stream_mode" value="stream_check"
                                <?php if(get_option('stream_mode')==true) echo 'checked="checked"'; ?>>
                            <i class="main-notice inline" style="font-style:normal">Checked = Active | Not checked = Not
                                Active</i>
                        </td>
                    </tr>
                    <tr valign="top">
                        <th scope="row">Reports Notice</th>
                        <td rowspan="1"><textarea name="reports_notice" rows="4" cols="80"
                                placeholder="Write down the notification you want, when the visitor presses the report button in stream mode. (can be empty / skip)"><?php echo get_option('reports_notice'); ?></textarea>
                        </td>
                    </tr>
                    <tr valign="top">
                        <th scope="row">Url Img Sidebar </th>
                        <td rowspan="1"><textarea name="url_img" rows="4" cols="80"
                                placeholder="url img sidebar (Posted by) *recomended .png"><?php echo get_option('url_img'); ?></textarea>
                        </td>
                    </tr>
                    <?php } elseif($active_tab == 'ads') { ?>
                    <tr valign="top">
                        <th scope="row">Ads 1</th>
                        <td class="_multi">
                            <textarea name="ads_1" rows="7" cols="56"
                                placeholder=''><?php if(get_option('ads_1')!=''):?><?php echo get_option('ads_1');?><?php else:?><img src="<?php echo get_template_directory_uri(); ?>/img/ads.gif" class="img-fluid" /><?php endif?></textarea>
                        </td>
                    </tr>

                    <tr valign="top">
                        <th scope="row">Ads 2</th>
                        <td class="_multi">
                            <textarea name="ads_2" rows="7" cols="56"
                                placeholder=''><?php if(get_option('ads_2')!=''):?><?php echo get_option('ads_2');?><?php else:?><img src="<?php echo get_template_directory_uri(); ?>/img/adsa.gif" class="img-fluid" /><?php endif?></textarea>
                        </td>
                    </tr>
                    <tr valign="top">
                        <th scope="row">Sidebar Ads</th>
                        <td class="_multi">
                            <textarea name="ads_side" rows="7" cols="56"
                                placeholder=''><?php if(get_option('ads_2')!=''):?><?php echo get_option('ads_side');?><?php else:?><img src="<?php echo get_template_directory_uri(); ?>/img/adsa.gif" class="img-fluid" /><?php endif?></textarea>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
            </div>
            <div class="main-config col" style="width:28%;">
                <h2 style="background:#4267B2;color:#fff;outline:1px solid #4267B2;padding-left:15px;">Fanspage</h2>
                <div class="main-fb" style="max-height:350;"><iframe
                        src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fusagilabs%2F&tabs=timeline&width=290&height=439&small_header=true&adapt_container_width=true&hide_cover=false&show_facepile=true&appId"
                        width="290" height="439" style="border:none;overflow:hidden" scrolling="no" frameborder="0"
                        allowTransparency="true" allow="encrypted-media"></iframe></div>
            </div>
            <div class="clear"></div>
        </div>
        <?php submit_button(); ?>
    </form>
    <style type='text/css'>
    .clear {
        display: block;
        clear: both;
    }

    ._multi textarea,
    ._multi input[name="header_url"] {
        width: 100% !important
    }

    .main-row .nav-tab-wrapper {
        padding-top: 15px;
        padding-left: 15px
    }

    .main-row .nav-tab-wrapper a {
        padding: 8px 15px;
        font-size: 13px;
        letter-spacing: .1px
    }

    #wpcontent {
        padding: 15px 35px
    }

    .wrap-title {
        margin: 0 0 25px !important
    }

    .main-row {
        margin: 0 -15px;
    }

    .main-row .col {
        margin: 0 10px;
        float: left
    }

    .main-config {
        background: #fff;
        padding: 0;
        border: 1px solid #E5E5E5
    }

    .main-config h2 {
        font-size: 16px;
        margin: 0;
        background: #F6F6F6;
        padding: 15px 20px;
        position: relative;
    }

    .main-config h2 span {
        position: absolute;
        top: -20px;
        right: 10px
    }

    .main-config .form-table {
        margin: 0;
        padding: 0
    }

    .main-config .form-table th {
        font-weight: 400;
        position: relative;
        top: 3px;
        padding: 25px 20px
    }

    .main-config table tr {
        border-bottom: 1px solid #e5e5e5
    }

    .main-fb {
        padding: 12px;
    }

    .main-notice {
        margin: 20px 20px 5px;
        background: #fff7c1;
        padding: 15px;
        border: 1px solid #eae19f;
        line-height: 1.9
    }

    .main-notice.inline {
        padding: 4px 15px;
        font-style: normal;
        margin-left: 10px;
        border-radius: 5px
    }

    .main-config input[type="text"] {
        box-shadow: inherit;
        padding: 6px 8px;
        border-radius: 2px;
        border-color: #dcd9d9
    }

    .main-config ._multi input[type="text"] {
        margin-right: 5px;
        margin-bottom: 5px;
    }

    .form-table td {
        padding-right: 20px
    }
    </style>
</div>
<?php } ?>