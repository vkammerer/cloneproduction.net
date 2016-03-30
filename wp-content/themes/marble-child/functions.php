<?php

function clone_init() {
    wp_enqueue_style('clone-first', get_template_directory_uri() . '-child/clone/first.css');
    wp_enqueue_script('clone-first', get_template_directory_uri() . '-child/clone/first.js');
}
function clone_wp_head() {
    wp_enqueue_style('clone-last', get_template_directory_uri() . '-child/clone/last.css');
    wp_enqueue_script('clone-last', get_template_directory_uri() . '-child/clone/last.js');
}

add_action( 'init', 'clone_init' );
add_action( 'wp_head', 'clone_wp_head' );
