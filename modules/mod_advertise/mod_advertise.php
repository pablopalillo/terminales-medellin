<?php
/**
 * @package	Joomla.Site
 * @subpackage	mod_advertise
 * @copyright	Copyright (C) All rights reserved.
 * @license	All rights reserved.
 * @author      Juan Lotero <Juan.Lotero@fuziona.net>
 */

defined('_JEXEC') or die;
require_once dirname(__FILE__).DS.'helper.php';
$strTitle = JRequest::getInt('section') == 1 ? "Paute aquí" : "Solicitud de Clasificado";
require JModuleHelper::getLayoutPath('mod_advertise', $params->get('layout', 'default'));
?>