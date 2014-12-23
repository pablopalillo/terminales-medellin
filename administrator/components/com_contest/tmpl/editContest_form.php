<?php
    defined('_JEXEC') or die;
    JToolBarHelper::apply();
    JToolBarHelper::deleteList();
    JToolBarHelper::cancel();
?>
<div style="width:500px; margin-bottom: 20px; height: 150px;">
    <div style="width:500px;"><h2>Editar Concurso</h2></div>
    <div style="width:400px; margin-left: 30px;">
        <form id="addContestItem_form" action="index.php" method="post">
            <input type="hidden" name="option" value="com_contest" >
            <input type="hidden" name="task" value="saveContestItem" >
            <input type="hidden" name="contestId" class="contestId" value="<?php echo JRequest::getInt('contestId'); ?>" >
            <div style="width: 200px; height: 30px; float: left;">Pregunta:</div>
            <div style="width: 200px; height: 30px; float: left;">
                <input class="question_contest" name="question_contest" type="text" />
            </div>
            <div style="width: 200px; height: 30px; float: left;">Tipo de respuesta:</div>
            <div style="width: 200px; height: 30px; float: left;">
                <select class="questionType_contest" name="questionType_contest" >
                    <option value="1">Única Respuesta</option>
                    <option value="2">Múltiple Respuesta</option>
                    <option value="3">Respuesta Libre</option>
                </select>
            </div>
            <div style="width: 200px; height: 30px; float: left;">Opciones de respuesta: (Separados por coma)</div>
            <div style="width: 200px; height: 30px; float: left;">
                <input class="questionOptions_contest" name="questionOptions_contest" type="text" />
            </div>
        </form>
    </div>
</div>
<table class="adminlist">
    <thead>
        <tr>
            <th>Seleccion</th>
            <th>Concurso</th>
            <th>Pregunta</th>
            <th>Tipo de respuesta</th>
            <th>Opciones</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach($arrData as $objData){
            $strOptions = "";
            if(is_array(json_decode($objData->option))){
                foreach(json_decode($objData->option) as $strOption){
                    $strOptions .= $strOption." / ";    
                }
            }
            $strType = "";
            if(1 == $objData->id_type){
                $strType = "Única Respuesta";
            }
            if(2 == $objData->id_type){
                $strType = "Múltiple Respuesta";
            }
            if(3 == $objData->id_type){
                $strType = "Respuesta Libre";
            }
            echo "<tr>"
                ."<th><input type='checkbox' value='".$objData->id."'></th>"
                ."<th>".$objData->title."</th>"
                ."<th>".$objData->question."</th>"
                ."<th>".$strType."</th>"
                ."<th>".$strOptions."</th>"
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