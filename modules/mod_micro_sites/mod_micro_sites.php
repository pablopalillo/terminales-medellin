<?php
/**
 * @package	Joomla.Site
 * @subpackage	mod_micro_sites
 * @copyright	Copyright (C) All rights reserved.
 * @license	All rights reserved.
 * @author      yesid montoya <yesid.montoya@fuziona.net>
 */

defined('_JEXEC') or die;
require_once dirname(__FILE__).DS.'helper.php';
$arrMicroSites = modMicroSitesHelper::getContent();
require JModuleHelper::getLayoutPath('mod_micro_sites', $params->get('layout', 'default'));
?>