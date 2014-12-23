<?php
    foreach ($arrFeatured as $objFetured){
        echo "<a href='".$objFetured->link."' "
            ."style='text-decoration:none; color:#129AD6; "
            ."font-size:13px; font-weight:bold;'>"
                ."<div align='center' style='background-image:url(\"images/".$objFetured->id.".png\");' "
                ."class='english-menu-item'>".$objFetured->title."</div></a>";
    }
?>