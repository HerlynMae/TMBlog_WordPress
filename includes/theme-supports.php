<?php

function tmBlog_support() {

    add_theme_support('custom-logo'); // add custom logo 
    add_theme_support('menus'); // add menus
    add_theme_support('post-thumbnails'); // add featured Image 

}
add_action('after_setup_theme', 'tmBlog_support');