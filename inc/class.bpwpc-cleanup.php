<?php
if(!class_exists('BPWPC_Cleanup')){

    Class BPWPC_Cleanup{

        private $options; 

        function __construct(){

            $this->options =  get_option('bpwpcleaner_options');

        }

        public function hide_help() {

            $screen = get_current_screen();
            //TODO: add options to hide per screen
            if($screen->id ==='dashboard'){
                $screen->remove_help_tabs();
            }

        }

        public function wphidenag() {

            remove_action( 'admin_notices', 'update_nag', 3);

        }

        public function remove_update_submenu(){

            global $submenu;
            unset($submenu['index.php'][10]);

        }

        public function wphidebrowsernag() {

            $key = md5( $_SERVER['HTTP_USER_AGENT'] );
            add_filter( 'site_transient_browser_' . $key, '__return_null' );

        }

        public function remove_right_now_widget() {

            remove_meta_box('dashboard_right_now', 'dashboard', 'normal');

        }

        public function remove_quick_press_widget() {

            remove_meta_box('dashboard_quick_press', 'dashboard', 'normal');

        }

        public function remove_primary_widget() {

            remove_meta_box('dashboard_primary', 'dashboard', 'normal');

        }

        public function remove_activity_widget() {

            remove_meta_box('dashboard_activity', 'dashboard', 'normal');

        }

        public function wp_remove_versions( $src ) {

            if ( strpos( $src, 'ver=' ) ) {
                $src = remove_query_arg( 'ver', $src );
            }
            return $src;

        }

        public function remove_recent_comments_style() {

            global $wp_widget_factory;
            if ( isset($wp_widget_factory->widgets['WP_Widget_Recent_Comments']) )
                remove_action( 'wp_head', array( $wp_widget_factory->widgets['WP_Widget_Recent_Comments'], 'recent_comments_style' ) );

        }

        public function remove_thumbnail_dimensions( $html ){

            $html = preg_replace('/(width|height)=\"\d*\"\s/', "", $html);
            return $html;

        }

        public function remove_admin_bar(){

            return false;

        }

        public function remove_category_rel($output) {

            $output = str_replace(' rel="category tag"', '', $output);
            return $output;

        }

        public function custom_login_error_msg(){

            return $this->options['login_errors_msg'];

        }

        public function remove_login_shake(){

            remove_action('login_head', 'wp_shake_js', 12);
    
        }

    }
}
