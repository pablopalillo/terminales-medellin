<?php
/**
 * @package	Joomla.Site
 * @subpackage	mod_content
 * @copyright	Copyright (C) All rights reserved.
 * @license	All rights reserved.
 * @author      Alexander Hinestroza <alexander.hinestroza@fuziona.net>
 */

$doc = JFactory::getDocument();
$doc->addScript(JURI::base().'../templates/terminales_v1/js/jquery-1.9.0.min.js', "text/javascript");
$doc->addScript(JURI::base().'/components/com_allies/js/allies.js', "text/javascript");
JToolBarHelper::save();
JToolBarHelper::cancel();
$var = JRequest::getVar('idAlly');
?>

<form name="addAllies_form"  enctype="multipart/form-data" action="index.php" method="post" id="formAdItem">
    <input type="hidden" name="option" value="com_allies"/>
    <input type="hidden" name="task" value="savealliesitem"/>
    Aliado : <select name="aliado" id="aliado">
                <?php
                foreach ($arrAllies as $objAllies2){
                    if($var == $objAllies2->id){
                        echo "<option selected value='".$objAllies2->id."'>".$objAllies2->name."</option>";
                    }else{
                        echo "<option value='".$objAllies2->id."'>".$objAllies2->name."</option>";
                    }
                }
                echo "<input id='id_ally' type='hidden' name='id_ally' value='".$var."'/>";
                ?>
            </select>
    Nombre Item : <input type="text" id="itemName" name="itemName" style="width:260px;"/>
    Imagen : <input type="text" id="imageName" name="imageName" style="width:260px;"/>
    Url : <input type="text" id="itemUrl" name="url" style="width:260px;"/>
</form>
