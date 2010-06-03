<?php
/**
*
* info_acp_custom_title_mod [English]
*
* @package language
* @copyright (c) 2010 Jason Lynch
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
    exit;
}

if (empty($lang) || !is_array($lang))
{
    $lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$lang = array_merge($lang, array(
	'ACP_CUSTOM_TITLE_SETTINGS'				=> 'Custom title settings',
	'ACP_CUSTOM_TITLE_SETTINGS_EXPLAIN'		=> 'Here you can set all default settings for custom titles.',

	'CUSTOM_TITLE_MODE'						=> 'Rank Replacement Mode',
	'CUSTOM_TITLE_MODE_EXPLAIN'				=> 'Here you can choose whether or not the rank and rank image are replaced if the user has set a custom title. If you choose \'No replacement\', it will instead appear as a separate title.',
	'CUSTOM_TITLE_MODE_INDEPENDENT'			=> 'No replacement',
	'CUSTOM_TITLE_MODE_REPLACE_RANK'		=> 'Replace rank only',
	'CUSTOM_TITLE_MODE_REPLACE_BOTH'		=> 'Replace rank and rank image',
	'CUSTOM_TITLE_DAYS'						=> 'Days of registration required',
	'CUSTOM_TITLE_POSTS'					=> 'Posts required',
	'CUSTOM_TITLE_MAXLENGTH'				=> 'Maximum length',
	'CUSTOM_TITLE_MAXLENGTH_EXPLAIN'		=> 'This controls the maximum length a user may set his or her custom title to. Please enter a number from 0 to 255.',

	'LOG_CONFIG_CUSTOM_TITLE'				=> '<strong>Altered custom title settings</strong>',

	'INSTALL_CUSTOM_TITLE_MOD'				=> 'Install Custom Title MOD',
	'INSTALL_CUSTOM_TITLE_MOD_CONFIRM'		=> 'Are you ready to install the Custom Title MOD?',

	'UNINSTALL_CUSTOM_TITLE_MOD'			=> 'Uninstall Custom Title MOD',
	'UNINSTALL_CUSTOM_TITLE_MOD_CONFIRM'	=> 'Are you ready to uninstall the Custom Title MOD? All settings and data saved by this MOD will be removed!',
	'UPDATE_CUSTOM_TITLE_MOD'				=> 'Update Custom Title MOD',
	'UPDATE_CUSTOM_TITLE_MOD_CONFIRM'		=> 'Are you ready to update the Custom Title MOD?',
));

$lang = array_merge($lang, array(
	'acl_u_title_edit'			=> array('lang' => 'Can edit own custom title', 'cat' => 'profile'),
	'acl_u_title_ignore_reqs'	=> array('lang'	=> 'Can ignore custom title registration or post requirements', 'cat' => 'profile'),
));

?>