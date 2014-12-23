<form id='directorysearchandfilter' action='index.php'>
    <input type="hidden" name="Itemid" value="168" />
    <input type="hidden" name="directory" value="<?php echo JRequest::getInt('directory', 1); ?>" />
    <div style="width:100%; height:50px; border-bottom: solid 1px #ccc; margin-bottom: 10px;">
        <div style="width:30%; height:50px; border-right: solid 1px #ccc; margin-bottom: 10px; float:left;">
            <div align="center" style="width: 100%; height: 20px;">Registros por página:</div>
                    <select id='directorypr' name='pr' style="width:100px; margin-left: 80px;">
<?php
    echo (5 == $intPR) ? "<option value ='5' selected='selected'>5</option>" 
        : "<option value ='5'>5</option>";
    echo (10 == $intPR) ? "<option value ='10' selected='selected'>10</option>" 
        : "<option value ='10'>10</option>";
    echo (20 == $intPR) ? "<option value ='20' selected='selected'>20</option>" 
        : "<option value ='20'>20</option>";
    echo (50 == $intPR) ? "<option value ='50' selected='selected'>50</option>" 
        : "<option value ='50'>50</option>";
    echo (100 == $intPR) ? "<option value ='100' selected='selected'>100</option>" 
        : "<option value ='100'>100</option>";
?>
    </select>
        </div>
        <div style="width:40%; height:50px; border-right: solid 1px #ccc; margin-bottom: 10px; float:left;">
            <div align="center" style="width: 100%; height: 15px; margin-bottom: 5px;">Ordenar por:</div>
            <div align="center" style="width: 100%; height: 20px;">
                <select id="directory_order_by_list" style="width:200px;">
                    <option value="seleccione" selected="selected">Seleccione...</option>
                    <option value="name">Nombre</option>
                    <option value="area">Dependencia</option>
                </select>
            </div>
        </div>
        <div style="width:25%; height:50px; margin-bottom: 10px; float:left;">
            <div align="center" style="width: 100%; height: 20px;">Buscar:</div>
            <div style="width: 155px; margin-left: 20px; float:left;">
                <?php echo ($strSearchByName != null) ? "<input style='width: 155px;' id='searchbyname' type = 'text' value='".$strSearchByName."' name='searchbyname'/>" 
        : "<input style='width: 150px;' id='searchbyname' type = 'text' name='searchbyname'/>"; ?>
            </div>
            <div style="width: 20px; float:left; padding-top: 1px;">
                <input style="margin-top: -1px;" type='button' id='directorysearchbynamebutton' value='BUSCAR' /></div>
        </div>
    </div>
        <input type='hidden' name='option' value='com_directory'/>
        <input type = 'hidden' name='color' value='<?php echo JRequest::getVar('color', 'blue');?>'/>
        <input type = 'hidden' name='Itemid' value='<?php echo JRequest::getVar('Itemid');?>'/>
<?php

echo ($strOrderByName != null) ? "<input id='orderbyname' type = 'hidden' value='".$strOrderByName."' name='orderbyname'/>" 
        : "<input id='orderbyname' type = 'hidden' name='orderbyname' value=''/>";

echo ($strOrderByArea != null) ? "<input id='orderbyarea' type = 'hidden' value='".$strOrderByArea."' name='orderbyarea'/>" 
        : "<input id='orderbyarea' type = 'hidden' name='orderbyarea' value=''/>";

echo ($strOrder != null) ? "<input id='order' type = 'hidden' value='".$strOrder."' name='order'/>" 
        : "<input id='order' type = 'hidden' name='order' value=''/>";

echo ($strFilterByLetter != null) ? "<input id='filterbyletter' type = 'hidden' value='".$strFilterByLetter."' name='filterbyletter'/>" 
        : "<input id='filterbyletter' type = 'hidden' name='filterbyletter' value=''/>";
?>
    
</form>