<?php
    defined('_JEXEC') or die;
    JToolBarHelper::cancel();
?>
<table class="adminlist">
    <thead>
        <tr>
            <th>Usuario</th>
            <th>Pregunta</th>
            <th>Respuesta</th>
            <th>Fecha</th>
        </tr>
    </thead>
    <tbody>
<?php
foreach($arrData as $objData){
    $strQuestions = "";
    if(!empty($objData->question)){
        foreach(explode(',', $objData->question) as $strQuestion){
            $strQuestions .= $strQuestion.'<br/><br/>';
        }        
    }
    $strAnswers = "";
    if(!empty($objData->answer)){
        foreach(json_decode($objData->answer) as $mixAnswer){
            if(is_object($mixAnswer)){
                $strAnswers .= json_encode($mixAnswer).'<br/><br/>';
            }else{
                $strAnswers .= $mixAnswer.'<br/><br/>';
            }
        }        
    }
    echo "<tr>"
        ."<th>".strtoupper($objData->username)."</th>"
        ."<th>".$strQuestions."</th>"
        ."<th>".$strAnswers."</th>"
        ."<th>".$objData->date_answer."</th>"
        ."</tr>";
}
?>
    </tbody>
</table>
<?php
    $doc = JFactory::getDocument();
    $doc->addScript(JURI::base().'../templates/terminales_v1/js/jquery-1.9.0.min.js', "text/javascript");
    $doc->addScript(JURI::base().'/components/com_contest/js/contest.js', "text/javascript");
?>