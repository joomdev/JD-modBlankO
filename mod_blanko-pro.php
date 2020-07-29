<?php
/*---------------------------------------------------------------------------------
# mod_blanko-pro - A do nothing until you do something module for Joomla 3.x v2.0.0
# ---------------------------------------------------------------------------------
# author    JoomDev (Formerly GraphicAholic)
# copyright Copyright (C) 2020 Joomdev, Inc. All rights reserved.
# @license - GNU General Public License version 2 or later
# Websites: https://www.joomdev.com
----------------------------------------------------------------------------------*/
// No direct access
defined('_JEXEC') or die('Restricted access');
defined('DS') or define('DS', DIRECTORY_SEPARATOR);
JHtml::_('bootstrap.framework');
// Import the file / foldersystem
jimport('joomla.filesystem.file');
jimport('joomla.filesystem.folder');
$LiveSite 	= JURI::base();
$document = JFactory::getDocument();
$modbase = JURI::base(true).'/modules/mod_blanko-pro/';
$moduleID 	 	= $module->id;

require_once (dirname(__FILE__).'/helper.php');
require JModuleHelper::getLayoutPath('mod_blanko-pro', $params->get('layout', 'default'));
?>