<?php
if(is_array($arrMicroSites)){
    if(array() != $arrMicroSites){
        echo "<div class='micro-site-container'>";
        foreach($arrMicroSites as $objMicroSite){ ?>
            <div style='background-image: url("images/<?php echo $objMicroSite->image; ?>"); width: 217px; height:120px;'>
                <div class='micro-site-container-title'><?php echo $objMicroSite->title; ?></div>
            </div>
            <div style='width: 217px; height:auto;'>
                <?php echo $objMicroSite->title; ?>
                <ul>
                <?php 
                    foreach ($objMicroSite->menu as $objMenu){
                        echo "<a href='".$objMenu->href."'><li>".$objMenu->title."</li></a>";
                    }
                ?>
                </ul>
            </div>
  <?php }
        echo "</div>";
    }
}
?>
