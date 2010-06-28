<?php
/**
*
* @author Aexoden (Jason Lynch) jason@calindora.com
* @package umil
* @copyright (c) 2010 Jason Lynch
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
* @ignore
*/
define('UMIL_AUTO', true);
define('IN_PHPBB', true);
$phpbb_root_path = (defined('PHPBB_ROOT_PATH')) ? PHPBB_ROOT_PATH : './';
$phpEx = substr(strrchr(__FILE__, '.'), 1);
include($phpbb_root_path . 'common.' . $phpEx);
$user->session_begin();
$auth->acl($user->data);
$user->setup();

if (!file_exists($phpbb_root_path . 'umil/umil_auto.' . $phpEx))
{
	trigger_error('Please download the latest UMIL (Unified MOD Install Library) from: <a href="http://www.phpbb.com/mods/umil/">phpBB.com/mods/umil</a>', E_USER_ERROR);
}

$mod_name = 'Custom Title MOD';
$version_config_name = 'custom_title_mod_version';
$language_file = 'mods/info_acp_custom_title_mod';

$versions = array(
	'2.0.0-b3' => array(
		'config_add' => array(
			array('custom_title_days', 30),
			array('custom_title_posts', 10),
			array('custom_title_mode', 0),
			array('custom_title_maxlength', 45),
		),

		'permission_add' => array(
			array('u_title_edit', true),
			array('u_title_ignore_reqs', true),
		),

		'table_column_add' => array(
			array('phpbb_users', 'user_custom_title', array('VCHAR', '')),
		),

		'module_add' => array(
			array('acp', 'ACP_BOARD_CONFIGURATION', array(
				'module_basename'	=> 'board',
				'modes'			=> array('custom_title'),
			)),
		),

		'cache_purge' => array(
			array(''),
			array('auth'),
			array('template'),
		),
	),
);

include($phpbb_root_path . 'umil/umil_auto.' . $phpEx);

?>
