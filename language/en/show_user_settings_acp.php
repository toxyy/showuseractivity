<?php

/**
*
* phpBB Extension - toxyy Anonymous Posts
* @copyright (c) 2018 toxyy <thrashtek@yahoo.com>
* @license GNU General Public License, version 2 (GPL-2.0)
*
*/

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = [];
}

$lang = array_merge($lang, [
	'ACP_SHOW_USER_ACTIVITY'            => 'Allow user activity',
	'ACP_SHOW_USER_ACTIVITY_EXPLAIN'    => 'Enable showing user forum and topic activity in the User Control Panel',
]);
