<?php

//add settings section for wordpress misc cleanup
add_settings_section(
    'bpwpcleaner-section-misc', //id 
    __('Miscellaneous Cleanup', BPWCDOMAIN), //title
    array($this, 'setting_section_cb'),  //callback function
    'bpwpcleaner-setting' //page slug
);

//check all row 
add_settings_field(
    'checkall_misc', __('', BPWCDOMAIN),    //id and title 
    array($this, 'settings_checkall_field_cb'),          //callback function
    'bpwpcleaner-setting', 'bpwpcleaner-section-misc',        //page slug and section
    array(  'id'=> 'checkall_misc', 'text' => __('select all', BPWCDOMAIN), 
            'name' => 'checkall_misc', 'value' =>'checkall_misc' ) 
);

//Remove version numbers from CSS and JS src
add_settings_field(
    'remove_version',  __('', BPWCDOMAIN),    //id and title 
    array($this, 'settings_checkbox_field_cb'),          //callback function
    'bpwpcleaner-setting', 'bpwpcleaner-section-misc',        //page slug and section
    array(  'id' => 'remove_version', 'text' => __("Remove version numbers from CSS and JS source link", BPWCDOMAIN),
            'name' => 'bpwpcleaner_options[remove_version]', 'value' =>$this->options['remove_version'] )
);

//Move JavaScripts from Header to Footer to Speed Page Loading
add_settings_field(
    'remove_header_js',  __('', BPWCDOMAIN),    //id and title 
    array($this, 'settings_checkbox_field_cb'),          //callback function
    'bpwpcleaner-setting', 'bpwpcleaner-section-misc',        //page slug and section
    array(  'id' => 'remove_header_js', 'text' => __("Move JavaScripts from Header to Footer", BPWCDOMAIN),
            'name' => 'bpwpcleaner_options[remove_header_js]', 'value' =>$this->options['remove_header_js'] )
);

//remove default styles set by WordPress recent comments widget for better flexibility
add_settings_field(
    'remove_recent_comments_style',  __('', BPWCDOMAIN),    //id and title 
    array($this, 'settings_checkbox_field_cb'),          //callback function
    'bpwpcleaner-setting', 'bpwpcleaner-section-misc',        //page slug and section
    array(  'id' => 'remove_recent_comments_style', 'text' => __("Remove default styles set by WordPress recent comments widget", BPWCDOMAIN),
            'name' => 'bpwpcleaner_options[remove_recent_comments_style]', 'value' =>$this->options['remove_recent_comments_style'] )
);

//remove width and height dynamic attributes to thumbnails / post images for responsiveness
add_settings_field(
    'remove_thumbnail_dimensions',  __('', BPWCDOMAIN),    //id and title 
    array($this, 'settings_checkbox_field_cb'),          //callback function
    'bpwpcleaner-setting', 'bpwpcleaner-section-misc',        //page slug and section
    array(  'id' => 'remove_thumbnail_dimensions', 'text' => __("Remove width and height dynamic attributes to thumbnails / post images", BPWCDOMAIN),
            'name' => 'bpwpcleaner_options[remove_thumbnail_dimensions]', 'value' =>$this->options['remove_thumbnail_dimensions'] )
);

//remove WordPress generated category and tag atributes for W3C validation
add_settings_field(
    'remove_category_rel',  __('', BPWCDOMAIN),    //id and title 
    array($this, 'settings_checkbox_field_cb'),          //callback function
    'bpwpcleaner-setting', 'bpwpcleaner-section-misc',        //page slug and section
    array(  'id' => 'remove_category_rel', 'text' => __("Remove WordPress generated category and tag atributes for W3C validation", BPWCDOMAIN),
            'name' => 'bpwpcleaner_options[remove_category_rel]', 'value' =>$this->options['remove_category_rel'] )
);

//remove WordPress admin bar from front
add_settings_field(
    'remove_admin_bar',  __('', BPWCDOMAIN),    //id and title 
    array($this, 'settings_checkbox_field_cb'),          //callback function
    'bpwpcleaner-setting', 'bpwpcleaner-section-misc',        //page slug and section
    array(  'id' => 'remove_admin_bar', 'text' => __("Remove WordPress admin bar from front", BPWCDOMAIN),
            'name' => 'bpwpcleaner_options[remove_admin_bar]', 'value' =>$this->options['remove_admin_bar'] )
);

//remove WordPress login error message
add_settings_field(
    'remove_login_errors',  __('', BPWCDOMAIN),    //id and title 
    array($this, 'settings_checkbox_field_cb'),          //callback function
    'bpwpcleaner-setting', 'bpwpcleaner-section-misc',        //page slug and section
    array(  'id' => 'remove_login_errors', 'text' => __("Remove default WordPress login error message", BPWCDOMAIN),
            'name' => 'bpwpcleaner_options[remove_login_errors]', 'value' =>$this->options['remove_login_errors'] )
);

//custom message for WordPress login error
add_settings_field(
    'login_errors_msg',  __('', BPWCDOMAIN),    //id and title 
    array($this, 'settings_input_field_cb'),          //callback function
    'bpwpcleaner-setting', 'bpwpcleaner-section-misc',        //page slug and section
    array(  'id' => 'login_errors_msg', 'text' => __("  custom login error message", BPWCDOMAIN),
            'name' => 'bpwpcleaner_options[login_errors_msg]', 'value' =>$this->options['login_errors_msg'] )
);

//remove wordpress login shake
add_settings_field(
    'remove_login_shake',  __('', BPWCDOMAIN),    //id and title 
    array($this, 'settings_checkbox_field_cb'),          //callback function
    'bpwpcleaner-setting', 'bpwpcleaner-section-misc',        //page slug and section
    array(  'id' => 'remove_login_shake', 'text' => __("Remove login shake effect", BPWCDOMAIN),
            'name' => 'bpwpcleaner_options[remove_login_shake]', 'value' =>$this->options['remove_login_shake'] )
);

//submit button 
add_settings_field(
    'submitbutton_head', __('', BPWCDOMAIN),    //id and title 
    array($this, 'submitbutton_head_cb'),          //callback function
    'bpwpcleaner-setting', 'bpwpcleaner-section-misc',        //page slug and section
    array(  'id'=> 'submitbutton_head', 'text' => __('select all', BPWCDOMAIN), 
            'name' => 'submitbutton_head', 'value' =>'submitbutton_head' ) 
);