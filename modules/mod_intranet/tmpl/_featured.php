<div class="intranet-featured-more-container" style="float:left; height: 420px; width:220px; overflow-y: scroll;">
<?php
    foreach ($arrFeatured as $objFetured){
        echo "<a href='".$objFetured->link."' "
            ."style='text-decoration:none; color:#129AD6; "
            ."font-size:13px; font-weight:bold;'>"
                ."<div align='left' style='background-image:url(\"images/".$objFetured->id.".png\");' "
                ."class='intranet-menu-item'>".$objFetured->title."</div></a>";
    }
?>
</div>