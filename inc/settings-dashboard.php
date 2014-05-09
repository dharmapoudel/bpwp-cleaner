<?php

//add settings section for wordpress dashboard cleanup
add_settings_section(
    'bpwpcleaner-section-dashboard', //id 
    __('Dashboard Cleanup', BPWCDOMAIN), //title
    array($this, 'setting_section_cb'),  //callback function
    'bpwpcleaner-setting' //page slug
);

//check all row 
add_settings_field(
    'checkall_dashboard', __('', BPWCDOMAIN),    //id and title 
    array($this, 'settings_checkall_field_cb'),          //callback function
    'bpwpcleaner-setting', 'bpwpcleaner-section-dashboard',        //page slug and section
    array(  'id'=> 'checkall_dashboard', 'text' => __('select all', BPWCDOMAIN), 
            'name' => 'checkall_dashboard', 'value' =>'checkall_dashboard' ) 
);

//WordPress help tab
add_settings_field(
    'remove_help_tab',  __('', BPWCDOMAIN),    //id and title 
    array($this, 'settings_checkbox_field_cb'),          //callback function
    'bpwpcleaner-setting', 'bpwpcleaner-section-dashboard',        //page slug and section
    array(  'id' => 'remove_help_tab', 'text' => __('Hide help tab on top right corner of wp-admin', BPWCDOMAIN),
            'name' => 'bpwpcleaner_options[remove_help_tab]', 'value' =>$this->options['remove_help_tab'] ) 
);

//WordPress welcome panel
add_settings_field(
    'remove_wp_welcome_panel',  __('', BPWCDOMAIN),    //id and title 
    array($this, 'settings_checkbox_field_cb'),          //callback function
    'bpwpcleaner-setting', 'bpwpcleaner-section-dashboard',        //page slug and section
    array(  'id' => 'remove_wp_welcome_panel', 'text' => __('Remove WordPress welcome panel', BPWCDOMAIN),
            'name' => 'bpwpcleaner_options[remove_wp_welcome_panel]', 'value' =>$this->options['remove_wp_welcome_panel'] ) 
);

//WordPress update nag
add_settings_field(
    'remove_update_nag',  __('', BPWCDOMAIN),    //id and title 
    array($this, 'settings_checkbox_field_cb'),          //callback function
    'bpwpcleaner-setting', 'bpwpcleaner-section-dashboard',        //page slug and section
    array(  'id' => 'remove_update_nag', 'text' => __('Remove Wordpress update nag', BPWCDOMAIN),
            'name' => 'bpwpcleaner_options[remove_update_nag]', 'value' =>$this->options['remove_update_nag'] )
);

//update submenu under Dashboard
add_settings_field(
    'remove_update_submenu',  __('', BPWCDOMAIN),    //id and title 
    array($this, 'settings_checkbox_field_cb'),          //callback function
    'bpwpcleaner-setting', 'bpwpcleaner-section-dashboard',        //page slug and section
    array(  'id' => 'remove_update_submenu', 'text' => __('Remove update submenu under dashboard', BPWCDOMAIN),
            'name' => 'bpwpcleaner_options[remove_update_submenu]', 'value' =>$this->options['remove_update_submenu'] )
);

//update browser nag
add_settings_field(
    'remove_browser_nag',  __('', BPWCDOMAIN),    //id and title 
    array($this, 'settings_checkbox_field_cb'),          //callback function
    'bpwpcleaner-setting', 'bpwpcleaner-section-dashboard',        //page slug and section
    array(  'id' => 'remove_browser_nag', 'text' => __('Remove update browser nag', BPWCDOMAIN),
            'name' => 'bpwpcleaner_options[remove_browser_nag]', 'value' =>$this->options['remove_browser_nag'] )
);

//At a Glance Widget
add_settings_field(
    'remove_right_now',  __('', BPWCDOMAIN),    //id and title 
    array($this, 'settings_checkbox_field_cb'),          //callback function
    'bpwpcleaner-setting', 'bpwpcleaner-section-dashboard',        //page slug and section
    array(  'id' => 'remove_right_now', 'text' => __("Remove 'At a Glance' Widget", BPWCDOMAIN),
            'name' => 'bpwpcleaner_options[remove_right_now]', 'value' =>$this->options['remove_right_now'] )
);

//Quick Draft Widget
add_settings_field(
    'remove_quick_press',  __('', BPWCDOMAIN),    //id and title 
    array($this, 'settings_checkbox_field_cb'),          //callback function
    'bpwpcleaner-setting', 'bpwpcleaner-section-dashboard',        //page slug and section
    array(  'id' => 'remove_quick_press', 'text' => __("Remove 'Quick Draft' Widget", BPWCDOMAIN),
            'name' => 'bpwpcleaner_options[remove_quick_press]', 'value' =>$this->options['remove_quick_press'] )
);

//WordPress News Widget
add_settings_field(
    'remove_primary',  __('', BPWCDOMAIN),    //id and title 
    array($this, 'settings_checkbox_field_cb'),          //callback function
    'bpwpcleaner-setting', 'bpwpcleaner-section-dashboard',        //page slug and section
    array(  'id' => 'remove_primary', 'text' => __("Remove 'WordPress News' Widget", BPWCDOMAIN),
            'name' => 'bpwpcleaner_options[remove_primary]', 'value' =>$this->options['remove_primary'] )
);

// Activity Widget
add_settings_field(
    'remove_activity',  __('', BPWCDOMAIN),    //id and title 
    array($this, 'settings_checkbox_field_cb'),          //callback function
    'bpwpcleaner-setting', 'bpwpcleaner-section-dashboard',        //page slug and section
    array(  'id' => 'remove_activity', 'text' => __("Remove 'Activity' Widget", BPWCDOMAIN),
            'name' => 'bpwpcleaner_options[remove_activity]', 'value' =>$this->options['remove_activity'])
);

//submit button 
add_settings_field(
    'submitbutton_head', __('', BPWCDOMAIN),    //id and title 
    array($this, 'submitbutton_head_cb'),          //callback function
    'bpwpcleaner-setting', 'bpwpcleaner-section-dashboard',        //page slug and section
    array(  'id'=> 'submitbutton_head', 'text' => __('select all', BPWCDOMAIN), 
            'name' => 'submitbutton_head', 'value' =>'submitbutton_head' ) 
);