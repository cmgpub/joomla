<?php
/**
 * @package    [PACKAGE_NAME]
 *
 * @author     [AUTHOR] <[AUTHOR_EMAIL]>
 * @copyright  [COPYRIGHT]
 * @license    GNU General Public License version 2 or later; see LICENSE.txt
 * @link       [AUTHOR_URL]
 */

// No direct access to this file
defined('_JEXEC') or die;

use Joomla\CMS\Helper\ModuleHelper;
use Joomla\Module\Foo\Site\Helper\modcmgdjshelper;

$test  = modcmgdjshelper::getText();

require ModuleHelper::getLayoutPath('mod_cmg_djs', $params->get('layout', 'default'));
