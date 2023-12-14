<?php 
// <!-- just put the opening tag of php no need for closing tag since we will put here the php file -->
function tmBlog_assets() {
    // for css purposes
    wp_enqueue_style('tmBlog-style', get_template_directory_uri() . '/css/main.css', microtime());
      // for font awesome purposes
    //wp_enqueue_style('tmBlog-fa', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css');
      // for tiny slider purposes
    // wp_enqueue_style('fbs-slider', 'https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.4/tiny-slider.css', microtime());
    //wp_enqueue_script('fbs_slider','https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.4/min/tiny-slider.js',  true);

      // for JS purposes
    // wp_enqueue_script('fbs_script', get_template_directory_uri() . '/js/script.js', array(), microtime(), true);
}

add_action('wp_enqueue_scripts', 'tmBlog_assets');

