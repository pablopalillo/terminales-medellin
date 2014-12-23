<?php
if(array() != $arrNews){
    for($x=0; $x<count($arrNews); $x++){
        $strImage = $arrNews[$x]->file_alias != '' ? "multimedia/".$arrNews[$x]->file_alias : 'images/default_news.jpg';
        $intItem = $x+1;
        echo "<div class='news-item' ref='news-item-".$intItem."'>"
                ."<div class='news-title'><h1 style='margin-top:0px;'>".$arrNews[$x]->title."</h1></div>"
                ."<div align='justify' class='news-content'><span>".strip_tags(substr($arrNews[$x]->introtext, 0, 350), ENT_IGNORE)."..."
                ."<a class='news-item-read-more' href='index.php?option=com_content&id=".$arrNews[$x]->id."&Itemid=398' target='_blank'>  Leer mas.</a>"
                ."</span></div>"
                ."<div align='justify' class='news-content-image'><img src='".$strImage."' style='width:310px; height:230px;' /></div>"
            ."</div>";
    } 
}
?>