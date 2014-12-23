<div>
    <div align="left" style="width:435px; float: left; margin-left: 10px;">
<?php
    echo  "<label>Busqueda por palabra clave</label>";
    echo ($strSearchByName != null) ? "<input id='multimediasearchbyname' type = 'text' value='".$strSearchByName."' name='searchbyname'/>" 
        : "<input id='multimediasearchbyname' type = 'text' name='searchbyname'/>";
    echo "<input type='button' id='multimediasearchbykeybutton' value='BUSCAR' />";
?>
    </div>
    <div align="right" style="width:430px; float: left; margin-right: 10px;">
<?php
        echo "<label>Busqueda por fecha</label>";
    echo ($strSearchByDate != null) ? "<input id='multimediasearchbydate' type = 'text' value='".$strSearchByDate."' name='searchbydate'/>" 
        : "<input id='multimediasearchbydate' type='text' name='searchbydate'/>";
    echo "<input type='button' id='multimediasearchbydatebutton' value='BUSCAR' />";
    echo "</form>";
?>
    </div>
</div>
