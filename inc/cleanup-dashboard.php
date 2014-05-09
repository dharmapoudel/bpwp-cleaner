<?php
/* hides Help tab on top right corner of WordPress admin*/
if($this->options['remove_help_tab'] ){
    
    add_action('admin_head', array($this->cleanup, 'hide_help') );

}

/* removes WordPress Welcome Panel */
if($this->options['remove_wp_welcome_panel'] ){

    remove_action( 'welcome_panel', 'wp_welcome_panel' );

}

/* removes update nag */
if($this->options['remove_update_nag'] ){
    
    add_action('admin_menu', array($this->cleanup, 'wphidenag') );
    
    
}

/* removes update submenu under Dashboard */
if($this->options['remove_update_submenu'] ){

    add_action('admin_init', array($this->cleanup, 'remove_update_submenu') );
    
}

/* removes update browser nag */
if($this->options['remove_browser_nag'] ){
    
    add_action( 'admin_init', array($this->cleanup,  'wphidebrowsernag') );
    
}

/* removes  'At a Glance' Widget */
if($this->options['remove_right_now'] ){
    
    add_action('admin_init', array($this->cleanup, 'remove_right_now_widget') );
    
}

/* removes 'Quick Draft' Widget */
if($this->options['remove_quick_press'] ){
    
    add_action('admin_init', array($this->cleanup, 'remove_quick_press_widget') );
    
}

/* removes 'WordPress News' Widget */
if($this->options['remove_primary'] ){
    
    add_action('admin_init', array($this->cleanup, 'remove_primary_widget') );
    
}

/* removes 'Activity' Widget */
if($this->options['remove_activity'] ){
    
    add_action('admin_init', array($this->cleanup, 'remove_activity_widget') );

}