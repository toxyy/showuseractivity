<?php
/**
*
* phpBB Extension - toxyy Show User Activity
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
	'ACP_SHOW_USER_ACTIVITY'            => 'Profilde kullanıcı aktivite gösterimine izin ver',
	'ACP_SHOW_USER_ACTIVITY_EXPLAIN'    => 'Kullanıcı Profilinde üyenin en aktif forum ve konularını göstermeyi aktifleştirir',
]);
