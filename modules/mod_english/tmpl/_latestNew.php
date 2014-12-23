<?php
if(array() != $arrLatestNews){
//    if(!empty($arrArticleContent)){
        if(isset($arrLatestNews[0])){
            echo "<div class='project_news'>"
                ."<div class='project_news_resume'>"
                ."<div class='project_news_title_1'>".substr($arrLatestNews[0]->title, 0, 50)."...</div>"
                ."<div class='project_news_separator'></div>"
                ."<div align='justify' class='project_news_resume_content'>".substr(strip_tags($arrLatestNews[0]->fulltext),0,300)."...</div>"
                ."<div class='project_news_resume_media'>";
            if(isset($arrLatestNews[0]->file_alias)){
                echo "<img src='multimedia/".$arrLatestNews[0]->file_alias."' width='120px;' height='100px;' />";
            } else {
                echo "<img src='images/logo.png' width='120px;' height='100px;' />";
            }
            echo "</div>"
                ."<div style='width:100px; height:20px; padding-left:30px; float:left;'>"
                ."<a style='color:#129AD6; font-weight: bold; text-decoration: none;' href='index.php?option=com_english&Article="
                .$arrLatestNews[0]->id
                ."&Itemid=".JRequest::getInt('Itemid')."'>Ver mas...</a>"
                ."</div>"
                ."</div>"
                ."</div>";
        }
        if(isset($arrLatestNews[1])){
            echo "<div class='project_news'>"
                ."<div class='project_news_resume'>"
                ."<div class='project_news_title_2'>".substr($arrLatestNews[1]->title, 0, 50)."...</div>"
                ."<div class='project_news_separator'></div>"
                ."<div align='justify' class='project_news_resume_content'>".substr(strip_tags($arrLatestNews[1]->fulltext),0,300)."...</div>"
                ."<div class='project_news_resume_media'>";
            if(isset($arrLatestNews[1]->file_alias)){
                echo "<img src='multimedia/".$arrLatestNews[1]->file_alias."' width='120px;' height='100px;' />";
            } else {
                echo "<img src='images/logo.png' width='120px;' height='100px;' />";
            }
            echo "</div>"
                ."<div style='width:100px; height:20px; padding-left:30px; float:left;'>"
                ."<a style='color:#129AD6; font-weight: bold; text-decoration: none;' href='index.php?option=com_english&Article="
                .$arrLatestNews[1]->id
                ."&Itemid=".JRequest::getInt('Itemid')."'>Ver mas...</a>"
                ."</div>"
                ."</div>"
                ."</div>";
        }
        if(isset($arrLatestNews[2])){
            echo "<div class='project_news'>"
        ."<div class='project_news_resume'>"
            ."<div class='project_news_title_3'>".substr($arrLatestNews[2]->title, 0, 50)."...</div>"
            ."<div class='project_news_separator'></div>"
            ."<div align='justify' class='project_news_resume_content'>".substr(strip_tags($arrLatestNews[2]->fulltext),0,300)."...</div>"
            ."<div class='project_news_resume_media'>";
            if(isset($arrLatestNews[2]->file_alias)){
                echo "<img src='multimedia/".$arrLatestNews[2]->file_alias."' width='120px;' height='100px;' />";
            } else {
                echo "<img src='images/logo.png' width='120px;' height='100px;' />";
            }
            echo "</div>"
                ."<div style='width:100px; height:20px; padding-left:30px; float:left;'>"
                ."<a style='color:#129AD6; font-weight: bold; text-decoration: none;' href='index.php?option=com_english&Article="
                .$arrLatestNews[2]->id
                ."&Itemid=".JRequest::getInt('Itemid')."'>Ver mas...</a>"
                ."</div>"
                ."</div>"
                ."</div>";
        }
        if(isset($arrLatestNews[3])){
            echo "<div class='project_news'>"
                ."<div class='project_news_resume'>"
                ."<div class='project_news_title_4'>".substr($arrLatestNews[3]->title, 0, 50)."...</div>"
                ."<div class='project_news_separator'></div>"
                ."<div align='justify' class='project_news_resume_content'>".substr(strip_tags($arrLatestNews[3]->fulltext),0,300)."...</div>"
                ."<div class='project_news_resume_media'>";
            if(isset($arrLatestNews[3]->file_alias)){
                echo "<img src='multimedia/".$arrLatestNews[3]->file_alias."' width='120px;' height='100px;' />";
            } else {
                echo "<img src='images/logo.png' width='120px;' height='100px;' />";
            }
            echo "</div>"
                ."<div style='width:100px; height:20px; padding-left:30px; float:left;'>"
                ."<a style='color:#129AD6; font-weight: bold; text-decoration: none;' href='index.php?option=com_english&Article="
                .$arrLatestNews[3]->id
                ."&Itemid=".JRequest::getInt('Itemid')."'>Ver mas...</a>"
                ."</div>"
                ."</div>"
                ."</div>";
        }
}
?>