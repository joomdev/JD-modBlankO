<?php
/*-------------------------------------------------------------------------------
# mod_blanko - A do nothing until you do something module for Joomla 3.x v2.0.0
# -------------------------------------------------------------------------------
# author    JoomDev (Formerly GraphicAholic)
# copyright Copyright (C) 2020 Joomdev, Inc. All rights reserved.
# @license - GNU General Public License version 2 or later
# Websites: https://www.joomdev.com
--------------------------------------------------------------------------------*/
// No direct access
defined('_JEXEC') or die('Restricted access');
$document = JFactory::getDocument();
$path			= $params->get('path');
$sourceData	= $params->get('source_Data');
$addCSSdata	= $params->get('addCSSdata', 1);
$addSourcedata	= $params->get('addSourcedata', 1);
$addScript	= $params->get('addScript');
$scriptLink_1	= $params->get('scriptLink_1');
$scriptLink_2	= $params->get('scriptLink_2');
$scriptLink_3	= $params->get('scriptLink_3');
$scriptLink_4	= $params->get('scriptLink_4');
$scriptLink_5	= $params->get('scriptLink_5');
$scriptLink_6	= $params->get('scriptLink_6');
$addCSS	= $params->get('addCSS');
$styleLink_1	= $params->get('styleLink_1');
$styleLink_2	= $params->get('styleLink_2');
$styleLink_3	= $params->get('styleLink_3');
$styleLink_4	= $params->get('styleLink_4');
$styleLink_5	= $params->get('styleLink_5');
$styleLink_6	= $params->get('styleLink_6');
?>
<?php if($addScript == "1"){?>
<?php if($scriptLink_1 != ""):?>
<?php $document->addScript ($modbase.'js/'.$scriptLink_1.''); ?>
<?php endif ?>
<?php if($scriptLink_2 != ""):?>
<?php $document->addScript ($modbase.'js/'.$scriptLink_2.''); ?>
<?php endif ?>
<?php if($scriptLink_3 != ""):?>
<?php $document->addScript ($modbase.'js/'.$scriptLink_3.''); ?>
<?php endif ?>
<?php if($scriptLink_4 != ""):?>
<?php $document->addScript ($scriptLink_4); ?>
<?php endif ?>
<?php if($scriptLink_5 != ""):?>
<?php $document->addScript ($scriptLink_5); ?>
<?php endif ?>
<?php if($scriptLink_6 != ""):?>
<?php $document->addScript ($scriptLink_6); ?>
<?php endif ?>
<?php } ?>
<?php if($addCSS == "1"){?>
<?php if($styleLink_1 != ""):?>
<?php $document->addStyleSheet ($modbase.'css/'.$styleLink_1.''); ?>
<?php endif ?>
<?php if($styleLink_2 != ""):?>
<?php $document->addStyleSheet ($modbase.'css/'.$styleLink_2.''); ?>
<?php endif ?>
<?php if($styleLink_3 != ""):?>
<?php $document->addStyleSheet ($modbase.'css/'.$styleLink_3.''); ?>
<?php endif ?>
<?php if($styleLink_4 != ""):?>
<?php $document->addStyleSheet ($styleLink_4); ?>
<?php endif ?>
<?php if($styleLink_5 != ""):?>
<?php $document->addStyleSheet ($styleLink_5); ?>
<?php endif ?>
<?php if($styleLink_6 != ""):?>
<?php $document->addStyleSheet ($styleLink_6); ?>
<?php endif ?>
<?php } ?>
<?php if($addCSSdata == "1"){?>
<style>
<?php echo $params->get('cssData') ?>
</style>
<?php } ?>
<?php
	if ($addSourcedata == 1) {modBlankoPro::parsePHPviaFile($sourceData);}
		else {echo $sourceData;}
?>