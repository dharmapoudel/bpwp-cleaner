<?php

//add settings section for wordpress head cleanup
add_settings_section(
    'bpwpcleaner-section-head', //id 
    __('Head Cleanup', BPWCDOMAIN), //title
    array($this, 'setting_section_cb'),  //callback function
    'bpwpcleaner-setting' //page slug
);

//check all row 
add_settings_field(
    'checkall_head', __('', BPWCDOMAIN),    //id and title 
    array($this, 'settings_checkall_field_cb'),          //callback function
    'bpwpcleaner-setting', 'bpwpcleaner-section-head',        //page slug and section
    array(  'id'=> 'checkall_head', 'text' => __('select all', BPWCDOMAIN), 
            'name' => 'checkall_head', 'value' =>'checkall_head' ) 
);

//Wordpress generator
add_settings_field(
    'remove_wp_generator', __('', BPWCDOMAIN),    //id and title 
    array($this, 'settings_checkbox_field_cb'),          //callback function
    'bpwpcleaner-setting', 'bpwpcleaner-section-head',        //page slug and section
    array(  'id'=> 'remove_wp_generator', 'text' => __('Remove WordPress generator meta tag', BPWCDOMAIN), 
            'name' => 'bpwpcleaner_options[remove_wp_generator]', 'value' =>$this->options['remove_wp_generator'] ) 
);

//link to Really Simple Discovery service endpoint
add_settings_field(
    'remove_rsd_link',  __('', BPWCDOMAIN),    //id and title 
    array($this, 'settings_checkbox_field_cb'),          //callback function
    'bpwpcleaner-setting', 'bpwpcleaner-section-head',        //page slug and section
    array(  'id' => 'remove_rsd_link', 'text' =>__("Remove 'Really Simple Discovery' link", BPWCDOMAIN),
            'name' => 'bpwpcleaner_options[remove_rsd_link]', 'value' =>$this->options['remove_rsd_link'] ) 
);

//link to Windows Live Writer manifest file
add_settings_field(
    'remove_wlwmanifest_link',  __('', BPWCDOMAIN),    //id and title 
    array($this, 'settings_checkbox_field_cb'),          //callback function
    'bpwpcleaner-setting', 'bpwpcleaner-section-head',        //page slug and section
    array(  'id' => 'remove_wlwmanifest_link', 'text' =>__('Remove link to Windows Live Writer manifest file', BPWCDOMAIN),
            'name' => 'bpwpcleaner_options[remove_wlwmanifest_link]', 'value' =>$this->options['remove_wlwmanifest_link'] )
);

//links to the general feeds: Post and Comment Feed
add_settings_field(
    'remove_feed_links',  __('', BPWCDOMAIN),    //id and title 
    array($this, 'settings_checkbox_field_cb'),          //callback function
    'bpwpcleaner-setting', 'bpwpcleaner-section-head',        //page slug and section
    array(  'id' => 'remove_feed_links', 'text' =>__('Remove links to the general feeds such as Post and Comment Feed', BPWCDOMAIN),
            'name' => 'bpwpcleaner_options[remove_feed_links]', 'value' =>$this->options['remove_feed_links'] )
);

//links to the extra feeds such as category feeds
add_settings_field(
    'remove_feed_links_extra',  __('', BPWCDOMAIN),    //id and title 
    array($this, 'settings_checkbox_field_cb'),          //callback function
    'bpwpcleaner-setting', 'bpwpcleaner-section-head',        //page slug and section
    array(  'id' => 'remove_feed_links_extra', 'text' =>__('Remove links to the extra feeds such as Category and Page Feed', BPWCDOMAIN),
            'name' => 'bpwpcleaner_options[remove_feed_links_extra]', 'value' =>$this->options['remove_feed_links_extra'] )
);

//Post Relational Links - index
add_settings_field(
    'remove_index_rel_link',  __('', BPWCDOMAIN),    //id and title 
    array($this, 'settings_checkbox_field_cb'),          //callback function
    'bpwpcleaner-setting', 'bpwpcleaner-section-head',        //page slug and section
    array(  'id' => 'remove_index_rel_link', 'text' =>__('Remove post relational links - index', BPWCDOMAIN),
            'name' => 'bpwpcleaner_options[remove_index_rel_link]', 'value' =>$this->options['remove_index_rel_link'] )
);

//Post Relational Links - start
add_settings_field(
    'remove_start_post_rel_link',  __('', BPWCDOMAIN),    //id and title 
    array($this, 'settings_checkbox_field_cb'),          //callback function
    'bpwpcleaner-setting', 'bpwpcleaner-section-head',        //page slug and section
    array(  'id' => 'remove_start_post_rel_link', 'text' =>__('Remove post relational link - start', BPWCDOMAIN),
            'name' => 'bpwpcleaner_options[remove_start_post_rel_link]', 'value' =>$this->options['remove_start_post_rel_link'] )
);

//Post Relational Links - prev(parent)
add_settings_field(
    'remove_parent_post_rel_link',  __('', BPWCDOMAIN),    //id and title 
    array($this, 'settings_checkbox_field_cb'),          //callback function
    'bpwpcleaner-setting', 'bpwpcleaner-section-head',        //page slug and section
    array(  'id' => 'remove_parent_post_rel_link', 'text' =>__('Remove post relatonal link - prev (parent)', BPWCDOMAIN),
            'name' => 'bpwpcleaner_options[remove_parent_post_rel_link]', 'value' =>$this->options['remove_parent_post_rel_link'] )
);

// Relational links for the posts adjacent to the current post
add_settings_field(
    'remove_adjacent_posts_rel_link',  __('', BPWCDOMAIN),    //id and title 
    array($this, 'settings_checkbox_field_cb'),          //callback function
    'bpwpcleaner-setting', 'bpwpcleaner-section-head',        //page slug and section
    array(  'id' => 'remove_adjacent_posts_rel_link', 'text' =>__('Remove relational links for the posts adjacent to the current post', BPWCDOMAIN),
            'name' => 'bpwpcleaner_options[remove_adjacent_posts_rel_link]', 'value' =>$this->options['remove_adjacent_posts_rel_link'])
);

// Cannonical link
add_settings_field(
    'remove_rel_canonical',  __('', BPWCDOMAIN),    //id and title 
    array($this, 'settings_checkbox_field_cb'),          //callback function
    'bpwpcleaner-setting', 'bpwpcleaner-section-head',        //page slug and section
    array(  'id' => 'remove_rel_canonical', 'text' =>__('Remove WordPress cannonical link', BPWCDOMAIN),
            'name' => 'bpwpcleaner_options[remove_rel_canonical]', 'value' =>$this->options['remove_rel_canonical'])
);

//WordPress Shortlink
add_settings_field(
    'remove_wp_shortlink_wp_head',  __('', BPWCDOMAIN),    //id and title 
    array($this, 'settings_checkbox_field_cb'),          //callback function
    'bpwpcleaner-setting', 'bpwpcleaner-section-head',        //page slug and section
    array(  'id' => 'remove_wp_shortlink_wp_head', 'text' =>__('Remove WordPress shortlink', BPWCDOMAIN),
            'name' => 'bpwpcleaner_options[remove_wp_shortlink_wp_head]', 'value' =>$this->options['remove_wp_shortlink_wp_head'])
);

//submit button 
add_settings_field(
    'submitbutton_head', __('', BPWCDOMAIN),    //id and title 
    array($this, 'submitbutton_head_cb'),          //callback function
    'bpwpcleaner-setting', 'bpwpcleaner-section-head',        //page slug and section
    array(  'id'=> 'submitbutton_head', 'text' => __('select all', BPWCDOMAIN), 
            'name' => 'submitbutton_head', 'value' =>'submitbutton_head' ) 
);