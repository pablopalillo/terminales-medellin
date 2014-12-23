<?php
/**
 * @package	Joomla.Site
 * @subpackage	mod_content
 * @copyright	Copyright (C) All rights reserved.
 * @license	All rights reserved.
 * @author      Alexander Hinestroza <alexander.hinestroza@fuziona.net>
 */

// no direct access
defined('_JEXEC') or die;
JHtml::_('behavior.keepalive');

$doc = JFactory::getDocument();
$doc->addScript(JURI::base().'../templates/terminales_v1/js/jquery-1.9.0.min.js', "text/javascript");
$doc->addScript(JURI::base().'/components/com_allies/js/allies_1.js', "text/javascript");
JToolBarHelper::save();
JToolBarHelper::cancel();

?>

<form name="addAllies_form" id="addAllies_form" action="index.php" method="post">
    <input type="hidden" name="option" value="com_allies"/>
    <input type="hidden" name="task" value="saveallies"/>
    Nombre del módulo : <input type="text" name="name" style="width:260px;"/>
    Posición : <select name="position"><option value="1">Horizontal</option><option value="2">Vertical</option></select>
</form>
