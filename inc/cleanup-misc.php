<?php
/* removes version numbers from CSS and JS source link */
if($this->options['remove_version'] ){
   
    add_filter( 'style_loader_src', array($this->cleanup, 'wp_remove_versions'), 9999 );
    add_filter( 'script_loader_src', array($this->cleanup, 'wp_remove_versions'), 9999 );
    
}

/* moves JavaScripts from Header to Footer */
if($this->options['remove_header_js'] ){

    remove_action( 'wp_head', 'wp_enqueue_scripts',  1 );
    remove_action( 'wp_head', 'wp_print_styles',   8  );
    remove_action( 'wp_head', 'wp_print_head_scripts',  9 );

    add_action( 'wp_footer', 'wp_enqueue_scripts',  1 );
    add_action( 'wp_footer', 'wp_print_styles',   8  );
    add_action( 'wp_footer', 'wp_print_head_scripts',  9 );

    remove_action( 'login_head', 'wp_print_head_scripts', 9 );
    add_action( 'login_footer', 'wp_print_head_scripts', 9 );

}

/* removes default styles set by WordPress recent comments widget */
if($this->options['remove_recent_comments_style'] ){
   
   add_action( 'widgets_init', array($this->cleanup, 'remove_recent_comments_style') );
   
}

/* removes width and height dynamic attributes to thumbnails / post images*/
if($this->options['remove_thumbnail_dimensions'] ){
    
    add_filter('post_thumbnail_html', array($this->cleanup, 'remove_thumbnail_dimensions'), 10); 
    add_filter('image_send_to_editor', array($this->cleanup, 'remove_thumbnail_dimensions'), 10); 
    
}

/* removes WordPress generated category and tag atributes for W3C validation */
if($this->options['remove_category_rel'] ){
   
   add_filter('wp_list_categories', array($this->cleanup, 'remove_category_rel') );
    add_filter('the_category', array($this->cleanup, 'remove_category_rel') );
   
}

/* remove WordPress admin bar from front */
if($this->options['remove_admin_bar'] ){

   add_filter('show_admin_bar', array($this->cleanup, 'remove_admin_bar') );

}

/* removes wordpress login error message */
if($this->options['remove_login_errors'] ){
    
    add_filter('login_errors', array($this->cleanup, 'custom_login_error_msg') );
    
}

/* removes wordpress login shake */
if($this->options['remove_login_shake'] ){

    add_action('login_head', array($this->cleanup, 'remove_login_shake') );

}
