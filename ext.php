<?php
/**
* phpBB Extension - toxyy Show User Activity
* @copyright (c) 2018 toxyy <thrashtek@yahoo.com>
* @license GNU General Public License, version 2 (GPL-2.0)
*/

namespace toxyy\showuseractivity;

use phpbb\extension\base;

class ext extends base
{
	/**
	 * phpBB 3.2.x and PHP 7+
	 */
	public function is_enableable()
	{
		$config = $this->container->get('config');

                // check phpbb and phpb versions
		$is_enableable = (phpbb_version_compare($config['version'], '3.2', '>=') && version_compare(PHP_VERSION, '7', '>='));

		return $is_enableable;
	}
}
