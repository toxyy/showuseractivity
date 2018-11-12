<?php
/**
*
* phpBB Extension - toxyy Show User Activity
* @copyright (c) 2018 toxyy <thrashtek@yahoo.com>
* @license GNU General Public License, version 2 (GPL-2.0)
*
*/

namespace toxyy\showuseractivity\event;

/**
* Event listener
*/

use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class listener implements EventSubscriberInterface
{
    	/** @var \phpbb\config\config */
	protected $config;

	/** @var \phpbb\language\language */
	protected $language;

        /**
	* Constructor
        *
	* @param \phpbb\config\config				$config
	*
	*/
        public function __construct(\phpbb\config\config $config, \phpbb\language\language $language)
        {
		$this->config                           = $config;
		$this->language				= $language;
        }

	static public function getSubscribedEvents()
	{
		return [
			'core.user_setup'                                   => 'core_user_setup',
                        'core.acp_board_config_edit_add'                    => 'acp_board_config_edit_add',
                        'core.display_user_activity_modify_actives'         => 'display_user_activity_modify_actives',
		];
	}

	public function core_user_setup($event)
	{
		$lang_set_ext = $event['lang_set_ext'];

		$lang_set_ext[] = [
			'ext_name' => 'toxyy/showuseractivity',
			'lang_set' => 'show_user_settings_acp',
		];

		$event['lang_set_ext'] = $lang_set_ext;
	}

        public function acp_board_config_edit_add($event)
        {
                if ($event['mode'] == 'features') {
                        $display_vars = $event['display_vars'];
                        $add_config_var['show_user_activity'] = array('lang' => 'ACP_SHOW_USER_ACTIVITY', 'validate' => 'bool', 'type' => 'radio:yes_no', 'explain' => true);
                        $display_vars['vars'] = phpbb_insert_config_array($display_vars['vars'], $add_config_var, array('after' => 'allow_sig'));
                        $event['display_vars'] = array('title' => $display_vars['title'], 'vars' => $display_vars['vars']);
                }
        }


        public function display_user_activity_modify_actives($event)
        {
                $show_user_activity = $event['show_user_activity'];

                $show_user_activity = $this->config['show_user_activity'];

                $event['show_user_activity'] = $show_user_activity;
        }
}
