<?php
/* removes WordPress generator meta tag from header */
if($this->options['remove_wp_generator'] ){
    remove_action( 'wp_head', 'wp_generator' );
}

/* removes 'Really Simple Discovery' link */
if($this->options['remove_rsd_link'] ){
    remove_action( 'wp_head', 'rsd_link' );
}

/* removes link to Windows Live Writer manifest file */
if($this->options['remove_wlwmanifest_link'] ){
    remove_action( 'wp_head', 'wlwmanifest_link' );
}

/* removes links to the general feeds: Post and Comment Feed */
if($this->options['remove_feed_links'] ){
    remove_action('wp_head', 'feed_links', 2);
}

/* removes links to the extra feeds such as category feeds */
if($this->options['remove_feed_links_extra'] ){
    remove_action('wp_head', 'feed_links_extra', 3);
}

/* removes post relational links - index */
if($this->options['remove_index_rel_link'] ){
    remove_action('wp_head', 'index_rel_link');
}

/* removes post relational link - start */
if($this->options['remove_start_post_rel_link'] ){
    remove_action('wp_head', 'start_post_rel_link', 10, 0);
    remove_action('wp_head', 'start_post_rel_link_wp_head', 10, 0);
}

/* removes post relatonal link - prev (parent) */
if($this->options['remove_parent_post_rel_link'] ){
    remove_action('wp_head', 'parent_post_rel_link', 10, 0);
    remove_action('wp_head', 'parent_post_rel_link_wp_head', 10, 0);
}

/* removes relational links for the posts adjacent to the current post */
if($this->options['remove_adjacent_posts_rel_link'] ){
    remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0);
    remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
}

/* removes WordPress cannonical link */
if($this->options['remove_rel_canonical'] ){
    remove_action('wp_head', 'rel_canonical');
}

/* removes WordPress shortlink */
if($this->options['remove_wp_shortlink_wp_head'] ){
    remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0);
    remove_action( 'template_redirect', 'wp_shortlink_header', 11 );
}