<?php
/**
 * @package	Joomla.Site
 * @subpackage	mod_directory
 * @copyright	Copyright (C) All rights reserved.
 * @license	All rights reserved.
 * @author      diego calle <diego.calle@fuziona.net>
 */

// no direct access
defined('_JEXEC') or die;
JHtml::_('behavior.keepalive');
require_once 'legend_blue.php';
?>
<div id="content-wrap-directory_blu">
    <div class="directory-container_blu">
<?php
require_once dirname(__FILE__).DS.'_searchForm.php';
require_once dirname(__FILE__).DS.'_letters.php';
if (isset($arrData) && count($arrData)>= 1) {
    $arrContent = array();
    $intPRSum = $intPR;
    $intPRInit = 0;
    $intPages = ceil(count($arrData)/$intPR);
    for($x=$intPRInit; $x<$intPages; $x++){
        $arrTemp = array();
        for($i=0; $i<$intPRSum; $i++){
            if(isset($arrData[$i])){
                $arrTemp[] = $arrData[$i];
            }
        }
        $arrContent[] = $arrTemp;
        $intPRSum += $intPR;
        $intPRInit += $intPR;
    }
    require_once dirname(__FILE__).DS.'_tables_blue.php';
}
?>
    </div>
</div>