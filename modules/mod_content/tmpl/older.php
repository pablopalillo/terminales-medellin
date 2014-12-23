<?php
/**
 * @package	Joomla.Site
 * @subpackage	mod_content
 * @copyright	Copyright (C) All rights reserved.
 * @license	All rights reserved.
 * @author      Juan Lotero <Juan.lotero@fuziona.net>
 */

// no direct access
defined('_JEXEC') or die;
JHtml::_('behavior.keepalive');

if (isset($arrData) && count($arrData)> 1) : 
    echo "<tr style='border:none;'><td style='border:none;'><h3>"
        ."Artículos Relacionados"."</h3></td></tr>";
    for ($x=1; $x<count($arrData); $x++){
        if($x>=5){
            $strTrOpenTag = "<tr style='border:none;' class='hiddenContent'>";
        } else {
            $strTrOpenTag = "<tr style='border:none;'>";
        }
        echo $strTrOpenTag."<td style='border:none;'><h2>"
                .$arrData[$x]->title."</h2></td></tr>"
            .$strTrOpenTag."<td style='border:none;'><div style='margin-left:10px; font-size:10px;'>Fecha de publicación: "
                .$arrData[$x]->created."</div></td></tr>"
            .$strTrOpenTag."<td style='border:none;'>"
            .$arrData[$x]->introtext
                ."<span style='margin-left:10px; font-size:10px;'><a href='index.php?option=com_content&view=article&id="
                .$arrData[$x]->id."&Itemid=".JRequest::getVar('Itemid')."'>Leer Mas...</a></span></td></tr>";
    }
    if($x>=5){
        echo "<tr style='border:none;'><td style='border:none;'><h5><a id='showMoreContents' href='Terminales Medell�n'>"
            ."Ver publicaciones mas antiguas...</a></h5></td></tr>";
}
echo "</table>"; 
endif; ?>
<?php if($strLegendClass == "legend_black_"){ ?>
    </div>
</div>
<?php } ?>
