<?php
/*
Plugin Name: 图片精简v1.0
Plugin URI:  
Description: 关于WP的图片处理。
Version:     1.0
Author:      寒武纪信息科技_小宋
Author URI:  
*/

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

function dw_disable_woo_image_sizes($sizes) {
    // Array of sizes to keep
    $sizes_to_keep = array('shop_single');

    // Remove all sizes except the ones we want to keep
    foreach ($sizes as$size => $size_attrs) {
        if (!in_array($size,$sizes_to_keep)) {
            unset($sizes[$size]);
        }
    }

    return $sizes;
}
add_filter('intermediate_image_sizes_advanced', 'dw_disable_woo_image_sizes');
