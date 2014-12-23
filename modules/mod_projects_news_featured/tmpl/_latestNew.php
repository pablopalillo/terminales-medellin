<?php
if(array() != $arrNews){
//    if(!empty($arrArticleContent)){
        if(isset($arrNews[0])){
            echo "<div class='project_news'>"
                ."<div class='project_news_resume'>"
                ."<div class='project_news_title_1'>".substr($arrNews[0]->title, 0, 50)."...</div>"
                ."<div class='project_news_separator'></div>"
                ."<div align='justify' class='project_news_resume_content'>".substr(strip_tags($arrNews[0]->fulltext),0,300)."...</div>"
                ."<div class='project_news_resume_media'>";
            if(isset($arrNews[0]->file_alias)){
                echo "<img src='multimedia/".$arrNews[0]->file_alias."' width='120px;' height='100px;' />";
            } else {
                echo "<img src='images/logo.png' width='120px;' height='100px;' />";
            }
            echo "</div>"
                ."<div style='width:100px; height:20px; padding-left:30px; float:left;'>"
                ."<a style='color:#129AD6; font-weight: bold; text-decoration: none;' href='index.php?option=com_projects_news_featured&Categoryid=14&Article="
                .$arrNews[0]->id
                ."&Itemid=".JRequest::getInt('Itemid')."'>Leer mas...</a>"
                ."</div>"
                ."</div>"
                ."</div>";
        }
        if(isset($arrNews[1])){
            echo "<div class='project_news'>"
                ."<div class='project_news_resume'>"
                ."<div class='project_news_title_2'>".substr($arrNews[1]->title, 0, 50)."...</div>"
                ."<div class='project_news_separator'></div>"
                ."<div align='justify' class='project_news_resume_content'>".substr(strip_tags($arrNews[1]->fulltext),0,300)."...</div>"
                ."<div class='project_news_resume_media'>";
            if(isset($arrNews[1]->file_alias)){
                echo "<img src='multimedia/".$arrNews[1]->file_alias."' width='120px;' height='100px;' />";
            } else {
                echo "<img src='images/logo.png' width='120px;' height='100px;' />";
            }
            echo "</div>"
                ."<div style='width:100px; height:20px; padding-left:30px; float:left;'>"
                ."<a style='color:#129AD6; font-weight: bold; text-decoration: none;' href='index.php?option=com_projects_news_featured&Categoryid=14&Article="
                .$arrNews[1]->id
                ."&Itemid=".JRequest::getInt('Itemid')."'>Leer mas...</a>"
                ."</div>"
                ."</div>"
                ."</div>";
        }
        if(isset($arrNews[2])){
            echo "<div class='project_news'>"
        ."<div class='project_news_resume'>"
            ."<div class='project_news_title_3'>".substr($arrNews[2]->title, 0, 50)."...</div>"
            ."<div class='project_news_separator'></div>"
            ."<div align='justify' class='project_news_resume_content'>".substr(strip_tags($arrNews[2]->fulltext),0,300)."...</div>"
            ."<div class='project_news_resume_media'>";
            if(isset($arrNews[2]->file_alias)){
                echo "<img src='multimedia/".$arrNews[2]->file_alias."' width='120px;' height='100px;' />";
            } else {
                echo "<img src='images/logo.png' width='120px;' height='100px;' />";
            }
            echo "</div>"
                ."<div style='width:100px; height:20px; padding-left:30px; float:left;'>"
                ."<a style='color:#129AD6; font-weight: bold; text-decoration: none;' href='index.php?option=com_projects_news_featured&Categoryid=14&Article="
                .$arrNews[2]->id
                ."&Itemid=".JRequest::getInt('Itemid')."'>Leer mas...</a>"
                ."</div>"
                ."</div>"
                ."</div>";
        }
        if(isset($arrNews[3])){
            echo "<div class='project_news'>"
                ."<div class='project_news_resume'>"
                ."<div class='project_news_title_4'>".substr($arrNews[3]->title, 0, 50)."...</div>"
                ."<div class='project_news_separator'></div>"
                ."<div align='justify' class='project_news_resume_content'>".substr(strip_tags($arrNews[3]->fulltext),0,300)."...</div>"
                ."<div class='project_news_resume_media'>";
            if(isset($arrNews[3]->file_alias)){
                echo "<img src='multimedia/".$arrNews[3]->file_alias."' width='120px;' height='100px;' />";
            } else {
                echo "<img src='images/logo.png' width='120px;' height='100px;' />";
            }
            echo "</div>"
                ."<div style='width:100px; height:20px; padding-left:30px; float:left;'>"
                ."<a style='color:#129AD6; font-weight: bold; text-decoration: none;' href='index.php?option=com_projects_news_featured&Categoryid=14&Article="
                .$arrNews[3]->id
                ."&Itemid=".JRequest::getInt('Itemid')."'>Leer mas...</a>"
                ."</div>"
                ."</div>"
                ."</div>";
        }
//    } else {
//        if(isset($arrNews[1])){
//            echo "<div class='project_news'>"
//                ."<div class='project_news_resume'>"
//                ."<div class='project_news_title_1'>".substr($arrNews[1]->title, 0, 54)."...</div>"
//                ."<div class='project_news_separator'></div>"
//                ."<div align='justify' class='project_news_resume_content'>".substr(strip_tags($arrNews[1]->fulltext),0,300)."...</div>"
//                ."<div class='project_news_resume_media'>";
//            if(isset($arrNews[1]->image)){
//                echo "<img src='multiemdia/".$arrNews[1]->image."' width='120px;' height='100px;' />";
//            } else {
//                echo "<img src='images/logo.png' width='120px;' height='100px;' />";
//            }
//            echo "</div>"
//                ."<div style='width:100px; height:20px; padding-left:30px; float:left;'>"
//                ."<a style='color:#129AD6; font-weight: bold; text-decoration: none;' href='index.php?option=com_projects_news_featured&Categoryid=14&Article="
//                .$arrNews[1]->id
//                ."&Itemid=".JRequest::getInt('Itemid')."'>Ver mas...</a>"
//                ."</div>"
//                ."</div>"
//                ."</div>";
//        }
//        if(isset($arrNews[2])){
//            echo "<div class='project_news'>"
//                ."<div class='project_news_resume'>"
//                ."<div class='project_news_title_2'>".substr($arrNews[2]->title, 0, 54)."...</div>"
//                ."<div class='project_news_separator'></div>"
//                ."<div align='justify' class='project_news_resume_content'>".substr(strip_tags($arrNews[2]->fulltext),0,300)."...</div>"
//                ."<div class='project_news_resume_media'>";
//            if(isset($arrNews[2]->image)){
//                echo "<img src='multiemdia/".$arrNews[2]->image."' width='120px;' height='100px;' />";
//            } else {
//                echo "<img src='images/logo.png' width='120px;' height='100px;' />";
//            }
//            echo "</div>"
//                ."<div style='width:100px; height:20px; padding-left:30px; float:left;'>"
//                ."<a style='color:#129AD6; font-weight: bold; text-decoration: none;' href='index.php?option=com_projects_news_featured&Categoryid=14&Article="
//                .$arrNews[2]->id
//                ."&Itemid=".JRequest::getInt('Itemid')."'>Ver mas...</a>"
//                ."</div>"
//                ."</div>"
//                ."</div>";
//        }
//        if(isset($arrNews[3])){
//            echo "<div class='project_news'>"
//                ."<div class='project_news_resume'>"
//                ."<div class='project_news_title_3'>".substr($arrNews[3]->title, 0, 54)."...</div>"
//                ."<div class='project_news_separator'></div>"
//                ."<div align='justify' class='project_news_resume_content'>".substr(strip_tags($arrNews[3]->fulltext),0,300)."...</div>"
//                ."<div class='project_news_resume_media'>";
//            if(isset($arrNews[3]->image)){
//                echo "<img src='multiemdia/".$arrNews[3]->image."' width='120px;' height='100px;' />";
//            } else {
//                echo "<img src='images/logo.png' width='120px;' height='100px;' />";
//            }
//            echo "</div>"
//                ."<div style='width:100px; height:20px; padding-left:30px; float:left;'>"
//                ."<a style='color:#129AD6; font-weight: bold; text-decoration: none;' href='index.php?option=com_projects_news_featured&Categoryid=14&Article="
//                .$arrNews[3]->id
//                ."&Itemid=".JRequest::getInt('Itemid')."'>Ver mas...</a>"
//                ."</div>"
//                ."</div>"
//                ."</div>";
//        }
//        if(isset($arrNews[4])){
//            echo "<div class='project_news'>"
//                ."<div class='project_news_resume'>"
//                ."<div class='project_news_title_4'>".substr($arrNews[4]->title, 0, 54)."...</div>"
//                ."<div class='project_news_separator'></div>"
//                ."<div align='justify' class='project_news_resume_content'>".substr(strip_tags($arrNews[4]->fulltext),0,300)."...</div>"
//                ."<div class='project_news_resume_media'>";
//            if(isset($arrNews[4]->image)){
//                echo "<img src='multiemdia/".$arrNews[4]->image."' width='120px;' height='100px;' />";
//            } else {
//                echo "<img src='images/logo.png' width='120px;' height='100px;' />";
//            }
//            echo "</div>"
//                ."<div style='width:100px; height:20px; padding-left:30px; float:left;'>"
//                ."<a style='color:#129AD6; font-weight: bold; text-decoration: none;' href='index.php?option=com_projects_news_featured&Categoryid=14&Article="
//                .$arrNews[4]->id
//                ."&Itemid=".JRequest::getInt('Itemid')."'>Ver mas...</a>"
//                ."</div>"
//                ."</div>"
//                ."</div>";
//        }
//    }
}
?>