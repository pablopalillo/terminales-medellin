<?php
    if(array() != $arrNews){
        for($x=1; $x<count($arrNews); $x++){
            $intRef = $x+1;
            echo "<a ref='".$intRef."' class='navigation-item-a' href='#'><div class='navigation-item-not-selected'></div></a>";
        }
    }
?>