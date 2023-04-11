<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_foo
 *
 * @copyright   Copyright (C) 2005 - 2019 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

namespace Joomla\Module\Foo\Site\modcmgdjshelper;

// No direct access to this file
defined('_JEXEC') or die;

/**
 * Helper for mod_foo
 *
 * @since  4.0
 */
class modcmgdjshelper
{
	/**
	 * Retrieve foo test
	 *
	 * @param   Registry        $params  The module parameters
	 * @param   CMSApplication  $app     The application
	 *
	 * @return  array
	 */
	public static function getText()
	{
		return '首页倒计时活动模块';
	}
}
