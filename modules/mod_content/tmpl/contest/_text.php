<?php
$intRef = rand(1, 9).rand(1, 9).rand(1, 9).rand(1, 9).rand(1, 9);
echo "<div><table class='contest-question-table' ref='".$intRef."' type='text' style='height:100%'><tr><td><h3>".$objData->question."</h3></td></tr>";
echo "<tr><td><h3>Respuesta:</h3></td></tr>";
echo "<tr><td><input ref='".$objData->id."' name='".$intRef."' type='text' /></td></tr>";
if(count($arrDataContest)- $i == 1){
echo "<tr><td style='height:20px; padding-left:30px;'><a class='previous-reg' href='#'>ANTERIOR PREGUNTA</a></td></tr>";
echo "<tr><td style='height:20px; padding-left:30px;'><a href='#' id='send-contest-btn'>FINALIZAR</a></td></tr>";
echo "<tr><td style='height:20px; padding-left:30px;'></td></tr></table></div>";
}else{
echo "<tr><td style='height:20px; padding-left:30px;'><a class='previous-reg' href='#'>ANTERIOR PREGUNTA</a></td></tr>";
echo "<tr><td style='height:20px; padding-left:30px;'><a class='next-reg' href='#'>SIGUIENTE PREGUNTA</a></td></tr>";
echo "<tr><td style='height:20px; padding-left:30px;'></td></tr></table></div>";
}
?>
