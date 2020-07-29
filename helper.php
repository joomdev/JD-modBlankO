<?php
/*-----------------------------------------------------------------------------
# mod_blanko - A do nothing until you do something module for Joomla 3.x v2.0.0
# -----------------------------------------------------------------------------
# author    JoomDev (Formerly GraphicAholic)
# copyright Copyright (C) 2020 Joomdev, Inc. All rights reserved.
# @license - GNU General Public License version 2 or later
# Websites: https://www.joomdev.com
------------------------------------------------------------------------------*/
// No direct access
defined('_JEXEC') or die('Restricted access');

	class modBlankoPro {
		public static function parsePHPviaFile($sourceData) {
			$tmpfname = tempnam(JPATH_SITE."/tmp", "html");
			$handle = fopen($tmpfname, "w");
			fwrite($handle, $sourceData, strlen($sourceData));
			fclose($handle);
			include_once($tmpfname);
			unlink($tmpfname);
		}
	}

?>