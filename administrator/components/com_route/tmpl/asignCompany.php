<?php
    defined('_JEXEC') or die;
    JToolBarHelper::apply();
    JToolBarHelper::deleteList();
    JToolBarHelper::cancel();
?>
<form id="asignCompany_form" action="index.php" method="post">
    <input type="hidden" name="option" value="com_route" >
    <input type="hidden" name="task" value="assignCompany" >
    <input type="hidden" name="routeId" class="routeId" value="<?php echo JRequest::getVar('routeId') ?>" >
    Agregar: <select name="companyId">
        <option value="" selected="selected">Seleccione</option>
        <?php
        foreach($mixCompanyData as $objCompanyData){
            echo "<option value='".$objCompanyData->id."'>".$objCompanyData->company."</option>";
        }
        ?>
    </select>
</form>
<table class="adminlist">
    <thead>
        <tr>
            <th>Selección</th>
            <th>Ruta</th>
            <th>Compañia</th>
        </tr>
    </thead>
    <tbody>
<?php
foreach($mixData as $objData){
    echo "<tr>"
            ."<td><input value='".$objData->id."' type='checkbox' /></td>"
            ."<td>".$objData->route."</td>"
            ."<td>".$objData->company."</td>"
        ."</tr>";
}
?>
    </tbody>
</table>
<?php
    $doc = JFactory::getDocument();
    $doc->addScript(JURI::base().'../templates/terminales_v1/js/jquery-1.9.0.min.js', "text/javascript");
    $doc->addScript(JURI::base().'/components/com_route/js/asingCompany.js', "text/javascript");
?>