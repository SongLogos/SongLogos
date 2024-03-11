<?php
/*
 * Plugin Name: 设置meta
 * Version: v1.0
 * Description: 
 * Author: song
 * 
 * 
 * Author URI: 
 * Plugin URI: 
 * Text Domain: 
 *

 */ 

function show_menu(){
    // 在设置中添加一个菜单
    add_options_page('设置您的meta,方便Seo','Meta关键字设置',8,__FILE__,'action_menu');

 }

function register_mysettings(){
    register_setting('myoption-group','keyword');
    register_setting('myoption-group','des');
}

function action_menu(){
    include('html.php');
}


function showall(){
    $keywords = get_option('keyword');
    $description = get_option('des');
    echo '<meta name="keywords" content="' . $keywords . '"/>';
    echo '<meta name="description" content="' . $description . '"/>';
}



if (is_admin()){
    add_action('admin_menu','show_menu');
    add_action('admin_init','register_mysettings');
}

add_filter('wp_head','showall');

/*
1.设置中添加菜单，设置点击菜单会执行的函数
2.设置注册项，wp会存放到options表里
3.菜单执行函数里引入页面，页面里提交到options.php，设置注册项字段
4.设置可以获取options设置项值的函数，并且输出html的<meta>标签，标签里的值填写设置项的值
5.add_filter设置加载wp_head的时候执行需要的函数
*/
