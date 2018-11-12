<?php
/**
*
* phpBB Extension - toxyy Show User Activity
* @copyright (c) 2018 toxyy <thrashtek@yahoo.com>
* @license GNU General Public License, version 2 (GPL-2.0)
*
*/

namespace toxyy\showuseractivity\migrations;

class v_1_0_0 extends \phpbb\db\migration\migration
{
	public function effectively_installed()
	{
		return isset($this->config['anonymous_posts']);
	}

	public function update_data()
	{
		return array(
			// Add configs
			array('config.add', array('show_user_activity', '1')),
		);
	}
}
