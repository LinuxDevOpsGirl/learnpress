<?php

/**
 * Class LP_Settings_Profile
 *
 * @author  ThimPress
 * @package LearnPress/Admin/Classes/Settings
 * @version 1.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

class LP_Settings_Assets extends LP_Abstract_Settings_Page {

	/**
	 * Constructor
	 */
	public function __construct() {
		$this->id   = 'assets';
		$this->text = __( 'Assets', 'learnpress' );

		parent::__construct();
	}

	public function output() {
		$view = learn_press_get_admin_view( 'settings/profile.php' );
		include_once $view;
	}

	public function get_settings() {
		return apply_filters(
			'learn_press_profile_settings',
			array(
				array(
					'title'   => __( 'Profile page', 'learnpress' ),
					'id'       => $this->get_field_name( 'profile_page_id' ),
					'id'       => $this->get_field_name( 'profile_page_id' ),
					'default'  => '',
					'type'     => 'pages-dropdown'
				)
			)
		);
	}
}

return new LP_Settings_Assets();