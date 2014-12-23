<?php
defined('_JEXEC') or die;
require_once 'helper.php';
$arrData = PlgVoteHelper::getContent(JFactory::getURI()->getQuery());
include 'tmpl/default.php'
?>