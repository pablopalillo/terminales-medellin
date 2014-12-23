<?php
defined('_JEXEC') or die;
?>
<table>
    <thead>
        <tr>
            <th>SELECCIÓN</th>
            <th>ID</th>
            <th>ENCUESTA</th>
            <th>FECHA INICIAL</th>
            <th>FECHA FINAL</th>
            <th>ACTIVO</th>
        </tr>
    </thead>
    <tbody>
<?php
foreach($arrData as $objData){
    echo "<tr>"
        ."<th><input type='checkbox' /></th>"
        ."<th>".$objData->id."</th>"
        ."<th>".$objData->poll."</th>"
        ."<th>".$objData->start_date."</th>"
        ."<th>".$objData->finish_date."</th>"
        ."<th>".$objData->type."</th>"
        ."<th>".$objData->active."</th>"
        ."</tr>";
}
?>
    </tbody>
</table>