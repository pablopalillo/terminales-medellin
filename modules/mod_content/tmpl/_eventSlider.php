<?php
 echo "<br /><div id='slider_d'>".
    "<div id='container'>".
    "<div id='content'>".
    "<div id='slider' >".
    "<ul>";
foreach($arrDataEventT as $array){
    echo "<li>";
    foreach($arrData as $arr){
        if($array->id_content == $arr->id){
            echo "<h3 align='justify' style='font-weight:bold; font-size:14px;'>".$arr->title."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;INICIA&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp".$array->start_date."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp".$array->place."</h3>";
            echo "<h3 align='justify'>".substr($arr->introtext ,0,245)."</h3>";
        }
    }
}
echo "</ul>".
    "</div>".
    "</div>".
    "</div>".
    "</div>";
                        
?>

