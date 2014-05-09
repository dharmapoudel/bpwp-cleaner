<?php
 
if(!class_exists('BPWPC_Core')) {

	class BPWPC_Core {
	
		/**
		 * some private variables
		**/
		private $options = array();			// Default setting values
		private $cleanup;
		

		/**
		 * Constructor
		 */
		function __construct() {

			$this->cleanup = new BPWPC_Cleanup();

            add_action('init', array($this, 'bpwpcleaner_head_cleanup'));        // head cleaup
            add_action('init', array($this, 'bpwpcleaner_dashboard_cleanup'));        // dashboard  cleaup
            add_action('init', array($this, 'bpwpcleaner_misc_cleanup'));        // misc cleaup

            add_action('admin_init', array($this, 'bpwpcleaner_register_settings')); //register  settings
            add_action( 'admin_menu', array( $this, 'bpwpcleaner_add_page' ) ); // add page to menu
            
            $this->options = get_option('bpwpcleaner_options');
	
		}
		
		
		
		public function bpwpcleaner_head_cleanup() {

			require  BPWCPATH.'/inc/cleanup-head.php';
		}


		public function bpwpcleaner_dashboard_cleanup() {

			require  BPWCPATH.'/inc/cleanup-dashboard.php';

		}


		public function bpwpcleaner_misc_cleanup() {

			require  BPWCPATH.'/inc/cleanup-misc.php';

		}


		/**
		 * adds plugin options page
		 */
		public function bpwpcleaner_add_page() {
			$page_hook_suffix= add_options_page(
					'BlankPress WordPress Cleaner Settings', 
					__('BPWP Cleaner', BPWCDOMAIN), 
					'manage_options', 
					'bpwpcleaner-setting', //page slug
					array( $this, 'bpwpcleaner_create_admin_page' )
			);
			add_action('load-'.$page_hook_suffix, array($this, 'add_plugin_scripts'), 99);
		}
		
		
        public function add_plugin_scripts(){

        	wp_enqueue_script('bpwpc-script', plugins_url('/assets/script.js', __FILE__), array( 'jquery' ), '1.0', true);
        	wp_enqueue_style( 'bpwpc-style', plugins_url('/assets/style.css', __FILE__), array(), '1.0', 'all' );

        }
		
		/**
		 * prints html for plugin options page
		 */
		public function bpwpcleaner_create_admin_page() {
		    
			echo '<div class="wrap bpwpcleaner-wrap">'. screen_icon();
			echo __('<h2>BlankPress WordPress Cleaner Settings</h2>',  BPWCDOMAIN);           
			echo '<form method="post" action="options.php">';
        	//echo '<pre>'; print_r(get_option('bpwpcleaner_options')); echo '</pre>';
			
			settings_fields( 'bpwpcleaner_settings' );  //prints out all hidden setting fields 
			do_settings_sections( 'bpwpcleaner-setting' ); //page slug

			echo '</form>';
			echo '</div>';
			
		}
		
		public function bpwpcleaner_register_settings(){
            
            register_setting(
                'bpwpcleaner_settings',    // $option_group
                'bpwpcleaner_options'   // $option_name
            );
            
            require  BPWCPATH.'/inc/settings-head.php';
            require  BPWCPATH.'/inc/settings-dashboard.php';
            require  BPWCPATH.'/inc/settings-misc.php';
            
        }
        
        public function setting_section_cb($arg){
            //print_r($arg);
        }

        public function settings_checkall_field_cb($arg){
        	$id = esc_attr($arg['id']);
        	echo "<div class='bpwpc_select_row'>";
	            echo "<a href='#' class='select_all $id'>".__('select all', BPWCDOMAIN)."</a>";
	            echo "<a href='#' class='deselect_all $id'>".__('unselect all', BPWCDOMAIN)."</a>";
	            echo "<a href='#' class='invert_selection $id'>".__('invert selection', BPWCDOMAIN)."</a>";
            echo "</div>";
        }
        
        
        public function settings_checkbox_field_cb($arg){
            
            $name = esc_attr( $arg['name'] );
            $value = ( $arg['value'] ) ? $arg['value'] : 0;
            $text = esc_attr($arg['text']);
            $id = esc_attr($arg['id']);
            $checked = ($value) ? 'checked="checked" ' : '';


            echo "<input type='hidden' name='$name' value='0' />";
            echo "<input type='checkbox' id='$id' name='$name' value='1' $checked />";
            echo "<label for='$id' > $text </label>";
            
        }
        
        public function settings_input_field_cb($arg){
            
            $name = esc_attr( $arg['name'] );
            $value = esc_attr( $arg['value'] );
            $text = esc_attr( $arg['text'] );
            $id = esc_attr( $arg['id'] );


            echo "<input type='text' id='$id' name='$name' value='$value' />";
            echo "<label for='$id' > $text </label>";
            
        }

        public function submitbutton_head_cb($arg){

        	submit_button();
        }
		
	}

	new BPWPC_Core();
}