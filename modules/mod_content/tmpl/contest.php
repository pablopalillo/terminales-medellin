<?php
/**
 * @package	Joomla.Site
 * @subpackage	mod_content
 * @copyright	Copyright (C) All rights reserved.
 * @license	All rights reserved.
 * @author      Juan Lotero <Juan.lotero@fuziona.net>
 */
defined('_JEXEC') or die;
JHtml::_('behavior.keepalive');


if (isset($arrDataContest) && is_array($arrDataContest) && count($arrDataContest)>= 1) : ?>
<tr><td>

<div class="table-container">
    <div style='width:150px; float: left; margin-bottom: 5px;' class="sliding-window">
       <form id="hidden-contest-form" action="index.php" method="post">
            <input type='hidden' name='option' id="hidden-contest-option" value= 'com_content'>
            <input type='hidden' name='id' id="hidden-contest-id" value= '<?php echo $intId;?>'>
            <input type='hidden' name='answer' id="hidden-contest-answer" value=''>
       </form> 
<?php
require_once dirname(__FILE__).DS.'contest'.DS.'_apli.php';
    for($i=0; $i<count($arrDataContest);$i++){
        $objData = $arrDataContest[$i];
         switch ($objData->id_type){
             case 1:
                include dirname(__FILE__).DS.'contest'.DS.'_unique.php';
                break;
             case 2:
                include dirname(__FILE__).DS.'contest'.DS.'_multiple.php';
                break;
            case 3:
                include dirname(__FILE__).DS.'contest'.DS.'_text.php';
                break;
        }           
    }
?>
    </div>
</div>
</td></tr>
<?php endif; ?>