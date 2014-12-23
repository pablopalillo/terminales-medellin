<h2><?php 
if(!empty($arrArticleContent)){
   echo $arrArticleContent[0]->title; 
} else {
    echo $arrNews[0]->title; 
} 
?></h2>
<?php
if(!empty($arrNewMedia)){
?>
    <div id="new-content" style="height: 220px; overflow: hidden; float:left;">
        <div style="width:400px; float:left;">
        <?php 
        if(!empty($arrArticleContent)){
            echo $arrArticleContent[0]->fulltext; 
         } else {
             echo $arrNews[0]->fulltext;
         } 
         ?>
        </div>
        <div style="width:200px; float:left;">
        <?php 
            foreach($arrNewMedia as $objDataMedia){
                switch (strtolower($objDataMedia->type)){
            case 'audio':
                echo "<div style='width:190px; border:4px solid #ccc; padding-top:100px; height: 20px; border-radius:6px; background: url(\"images/gallery_audio_icon.png\"); background-position: center top;'>";
                include '_mediaMp3.php';
                echo "</div>";
                echo "<div align='center' style='width:170px; background-color: #F7F7F7; border:2px solid #ccc; min-height: 40px; border-radius:0px 0px 6px 6px; border-top:none; margin-right:0px; margin-left:7px; margin-bottom:5px; padding:5px;' >".$objDataMedia->title."</div>";
                break;
            case 'video':
                echo "<div style='width:190px; border:4px solid #ccc; border-radius:6px; height:160px;'>";
                echo "<a class='content-video' href='multimedia/".$objDataMedia->file_alias."' ><img src='multimedia/".$objDataMedia->thumb."' style='width:190px; height:160px;' /></a>";
                echo "</div>";
                echo "<div align='center' style='width:170px; background-color: #F7F7F7; border:2px solid #ccc; min-height: 40px; border-radius:0px 0px 6px 6px; border-top:none; margin-right:0px; margin-left:7px; margin-bottom:5px; padding:5px;' >".$objDataMedia->title."</div>";
                break;
            case 'imagen':
                echo "<div style='width:190px; border:4px solid #ccc; border-radius:6px; height:160px;'>";
                echo "<a class='content-image' size='".round((filesize(JPATH_BASE."/multimedia/".$objDataMedia->file_alias)/1000), 0)."' description='".$objDataMedia->description."' author='".$objDataMedia->author."' title='".$objDataMedia->title."' href='multimedia/".$objDataMedia->file_alias."'><img src='multimedia/".$objDataMedia->file_alias."' style='width:190px; height:160px;' /></a>";
                echo "</div>";
                echo "<div align='center' style='width:170px; background-color: #F7F7F7; border:2px solid #ccc; min-height: 40px; border-radius:0px 0px 6px 6px; border-top:none; margin-right:0px; margin-left:7px; margin-bottom:5px; padding:5px;' >".$objDataMedia->title."</div>";
                break;
            case 'youtube':
                echo "<div style='width:190px; border:4px solid #ccc; height:160px; border-radius:6px;'>";
                echo "<iframe id='ytplayer' type='text/html' width='190' height='160' src='http://www.youtube.com/embed/".$objDataMedia->file_alias."?autoplay=0&origin=http://www.terminalesmedellin.com' frameborder='0'></iframe>";
                echo "</div>";
                echo "<div align='center' style='width:170px; background-color: #F7F7F7; border:2px solid #ccc; min-height: 40px; border-radius:0px 0px 6px 6px; border-top:none; margin-right:0px; margin-left:7px; margin-bottom:5px; padding:5px;' >".$objDataMedia->title."</div>";
                break;
        }
            }
        ?>
        </div>
    </div>
<?php
} else {
    ?>
    <div id="new-content" style="width:100%; height: 235px; overflow: hidden; float:left;">
        <?php 
        if(!empty($arrArticleContent)){
            echo $arrArticleContent[0]->fulltext; 
         } else {
             echo $arrNews[0]->fulltext;
         } 
         ?>
    </div>
    <?php
}
?>
<div style="width:100%; height: 20px; float:left; margin-top: 10px; padding-left: 20px;"><a id="read-more" style="color:#129AD6; font-weight: bold; text-decoration: none;" href="#">Ver Mas...</a></div>