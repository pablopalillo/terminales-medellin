<div align="right" style="float:left; width: 250px; height: 100%;"><p></p>
<?php
if(array() != $arrDataMedia){
    foreach($arrDataMedia AS $objDataMedia){
        switch (strtolower($objDataMedia->type)){
            case 'audio':
                echo "<div style='width:230px; border:4px solid #ccc; padding-top:100px; height: 20px; border-radius:6px; background: url(\"images/gallery_audio_icon.png\"); background-position: center top;'>";
                include '_mediaMp3.php';
                echo "</div>";
                echo "<div align='center' style='width:190px; background-color: #F7F7F7; border:2px solid #ccc; min-height: 40px; border-radius:0px 0px 6px 6px; border-top:none; margin-right:15px; margin-bottom:5px; padding:5px;' >".$objDataMedia->title."</div>";
                break;
            case 'video':
                echo "<div style='width:230px; border:4px solid #ccc; border-radius:6px; height:200px;'>";
                echo "<a class='content-video' href='multimedia/".$objDataMedia->file_alias."' ><img src='multimedia/".$objDataMedia->thumb."' style='width:230px; height:200px;' /></a>";
                echo "</div>";
                echo "<div align='center' style='width:190px; background-color: #F7F7F7; border:2px solid #ccc; min-height: 40px; border-radius:0px 0px 6px 6px; border-top:none; margin-right:15px; margin-bottom:5px; padding:5px;' >".$objDataMedia->title."</div>";
                break;
            case 'imagen':
                echo "<div style='width:230px; border:4px solid #ccc; border-radius:6px; height:200px;'>";
                echo "<a class='content-image' size='".round((filesize(JPATH_BASE."/multimedia/".$objDataMedia->file_alias)/1000), 0)."' description='".$objDataMedia->description."' author='".$objDataMedia->author."' title='".$objDataMedia->title."' href='multimedia/".$objDataMedia->file_alias."'><img src='multimedia/".$objDataMedia->file_alias."' style='width:230px; height:200px;' /></a>";
                echo "</div>";
                echo "<div align='center' style='width:190px; background-color: #F7F7F7; border:2px solid #ccc; min-height: 40px; border-radius:0px 0px 6px 6px; border-top:none; margin-right:15px; margin-bottom:5px; padding:5px;' >".$objDataMedia->title."</div>";
                break;
            case 'youtube':
                echo "<div style='width:230px; border:4px solid #ccc; height:200px; border-radius:6px;'>";
                echo "<iframe id='ytplayer' type='text/html' width='230' height='200' src='http://www.youtube.com/embed/".$objDataMedia->file_alias."?autoplay=0&origin=http://www.terminalesmedellin.com' frameborder='0'></iframe>";
                echo "</div>";
                echo "<div align='center' style='width:190px; background-color: #F7F7F7; border:2px solid #ccc; min-height: 40px; border-radius:0px 0px 6px 6px; border-top:none; margin-right:15px; margin-bottom:5px; padding:5px;' >".$objDataMedia->title."</div>";
                break;
        }
    }
} else {
    echo "<img style='width:230px;' src='images/logo.png' />";
}

?>
</div>