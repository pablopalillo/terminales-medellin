<?php
    defined('_JEXEC') or die;
    JToolBarHelper::editList();
    JToolBarHelper::checkin();
?>
<table class="adminlist">
    <thead>
        <tr>
            <th>Selección</th>
            <th>Id</th>
            <th>Concurso</th>
        </tr>
    </thead>
    <tbody>
<?php
foreach($arrData as $objData){
    echo "<tr>"
        ."<th><input type='checkbox' value ='".$objData->id."' /></th>"
        ."<th>".$objData->id."</th>"
        ."<th>".$objData->title."</th>"
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