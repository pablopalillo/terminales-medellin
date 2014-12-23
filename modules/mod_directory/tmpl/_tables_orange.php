<?php
$intPRSum = $intPR;
$intPRInit = 0;
for($x=0; $x<$intPages; $x++){
    if($x==0){
        $strClass = "showContentTable";
    } else {
        $strClass = "hiddenContent";
    }
    
    echo "<table ref='directory_table' id='directory_table_".$x."' class='".$strClass."' style='width:100%;'><thead>"
            ."<th><a id='directoryOrderByName' href ='#'>Nombre</a></th>"
            ."<th><a id='directoryOrderByArea' href ='#'>Dependencia</a></th>"
            ."<th>".'Teléfono'."</th>"
            ."<th>".'Correo Electrónico'."</th>"
            ."</thead><tbody>"; 
    for($i=$intPRInit; $i<$intPRSum; $i++){
        if(isset($arrData[$i])){
            echo "<tr><td>".$arrData[$i]->name."</td>"
                ."<td>".$arrData[$i]->area."</td><td>".$arrData[$i]->phone."</td>"
                ."<td>".$arrData[$i]->email."</td></tr>";
        }
    }
    echo "</tbody></table>";
    
    $intPRSum += $intPR;
    $intPRInit += $intPR;
}
include '_paginator_orange.php';
//if($intPages>1){
//    echo "<div align='center' id='paginator' ><ul>";
//    for($x=0; $x<$intPages; $x++){
//        $intPage = $x + 1;
//        echo "<a countRef='".$intPages."' ref='directory_table_".$x."' class='directory_paginator' href=".$x."><li>".$intPage."</li></a>";
//    }
//    echo "</ul></div>";
//}
?>
