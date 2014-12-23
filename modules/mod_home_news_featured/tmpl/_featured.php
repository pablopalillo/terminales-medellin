<div id="home_featured">
    <div id="home_featured_container">
<?php
    foreach ($arrFeatured as $objFetured){
        echo "<a href='".$objFetured->url."'><div class='home_featured_item'>";
        echo "<div align='left' class='home_featured_item_title'>";
        echo $objFetured->title;
        echo "</div>";
        echo "<div class='home_featured_item_image'>";
        echo "<img style='width:113px; height:71px;' src='images/".$objFetured->image."' />";
        echo "</div>";
        echo "</div></a>";
    }
?>
    </div>
</div>