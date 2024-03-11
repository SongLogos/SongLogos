<?php
/*
 * Plugin Name: 自动摘要
 * Version: v1.0
 * Description: 总结文章内容
 * Author: song
 * 
 * 
 * Author URI: 
 * Plugin URI: 
 * Text Domain: 
 *

 */

 function mul_excerpt($content) {
    // 检查是否不是管理员界面
    if (!is_admin()) {
        // 使用 wp_trim_words() 函数获取内容的前25个单词，并以'...'结尾
        $myexcerpt = wp_trim_words($content, 25, '...');
        // 返回截取的内容作为摘录
        return $myexcerpt;
    } else {
        // 如果是在管理员界面，返回原始内容
        return $content;
    }
}

// 将函数添加到 'the_content' 过滤器中
add_filter('the_content', 'mul_excerpt');
