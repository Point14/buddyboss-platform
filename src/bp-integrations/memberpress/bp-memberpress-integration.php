<?php
/**
 * BuddyBoss MemberPress Integration Class.
 *
 * @package BuddyBoss\MemberPress
 * @since BuddyBoss 1.0.0
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

/**
 * Setup the bp MemberPress class.
 *
 * @since BuddyBoss 1.0.0
 */
class BP_Memberpress_Integration extends BP_Integration {

	public function __construct() {

		// Calling parent. Locate BP_Integration->start()
		$this->start(
			'memberpress', // Internal identifier of integration.
			__('MemberPress', 'buddyboss'), // Internal integration name.
			'memberpress', //Path for includes.
			[
				'required_plugin' => 'memberpress/memberpress.php', //Params
			]
		);
	}

	/**
	 * Memberpress Integration Tab
	 * @return {HTML} - renders html in bp-admin-memberpress-tab.php
	 */
	public function setup_admin_integartion_tab() {
		require_once trailingslashit($this->path) . 'bp-admin-memberpress-tab.php';

		new BP_Memberpress_Admin_Integration_Tab(
			"bp-{$this->id}",
			$this->name,
			[
				'root_path' => $this->path,
				'root_url' => $this->url,
				'required_plugin' => $this->required_plugin,
			]
		);
	}

	/**
	 * Memberpress includes additional files such as any library or functions or dependencies
	 * @return {file(s)} - execute php from included files
	 */
	public function includes($includes = array()) {
		// Calling Parent
		parent::includes([
			'functions',
		]);

	}

}
