<?php
/**
 
* Plugin Name: loptus-common
 
* Plugin URI: https://themeforest.net/user/sttheme
 
* Description: A plugin to create custom post type, metabox...
 
* Version:  1.0
 
* Author: Vergatheme
 
* Author URI: vergatheme.com
 
* License:  GPL2
 
*/
include dirname( __FILE__ ) . '/visual/shortcodes.php';
include dirname( __FILE__ ) . '/custom-post-type/post_type.php';
include dirname( __FILE__ ) . '/Custom-Metaboxes/metabox-functions.php';
include dirname( __FILE__ ) . '/ReduxFramework/ReduxCore/framework.php';
include dirname( __FILE__ ) . '/ReduxFramework/sample/sample-config.php';
return true;