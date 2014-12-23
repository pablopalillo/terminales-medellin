<?php
defined('_JEXEC') or die;
JHtml::_('behavior.keepalive');
if(array() != $arrData){
    foreach ($arrData as $objData) {
        echo "<div class='menu_renderized'>";
            echo "<div class='menu_renderized_image'>";
                echo "<a target='_blank' href='".$objData->link."'>"
                    ."<img src='images/".$objData->image."' />"
                    ."</a>";
            echo "</div>";
        if(array() != $objData->childs){
            echo "<div class='menu_renderized_links'><ul>";
            foreach ($objData->childs as $objParent){
                echo "<a target='_blank' href='".$objParent->link."'><li>".$objParent->title."</li></a>"; 
            }
            echo "</ul></div>";
        }
        echo "</div>";
    }
}