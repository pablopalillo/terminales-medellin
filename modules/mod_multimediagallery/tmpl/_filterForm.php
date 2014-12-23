<form id='multimediasearchandfilter' action='index.php'>
    <input type='hidden' name='option' value='com_multimediagallery'/>
    <input type='hidden' name='gallery' value='<?php echo $intGalleryId; ?>'/>
    <input type='hidden' name='project' value='<?php echo $intProjectId; ?>'/>
    <input type='hidden' name='color' value='<?php echo $strColor; ?>'/>
    <input type='hidden' name='Itemid' value='<?php echo JRequest::getInt('Itemid'); ?>'/>
    <div>
        <div align="left" style="width:405px; float: left; margin-left: 25px;">
            <label>Resultados por página</label>
            <select id='multimediapr' name='pr'>
<?php
    echo (4 == $intPR) ? "<option value ='4' selected='selected'>4</option>" 
        : "<option value ='4'>4</option>";
    echo (12 == $intPR) ? "<option value ='12' selected='selected'>12</option>" 
        : "<option value ='12'>12</option>";
    echo (24 == $intPR) ? "<option value ='24' selected='selected'>24</option>" 
        : "<option value ='24'>24</option>";
    echo (48 == $intPR) ? "<option value ='48' selected='selected'>48</option>" 
        : "<option value ='48'>48</option>";
    echo (100 == $intPR) ? "<option value ='100' selected='selected'>100</option>" 
        : "<option value ='100'>100</option>";
?>
            </select>
        </div>
        <div align="right" style="width:405px; float: left; margin-right: 10px;">
<label>Filtrar por tipo de archivo</label>
<select id='multimediatype' name='ftype'>
<?php
    echo (null == $strSearchByFtype || 0 == $strSearchByFtype) ? "<option selected='selected' value='0'>Seleccione</option>"
        : "<option value='0'>Seleccione</option>";
    echo (1 == $strSearchByFtype) ? "<option value ='1' selected='selected'>Imagen</option>" 
        : "<option value ='1'>Imagen</option>";
    echo (2 == $strSearchByFtype) ? "<option value ='2' selected='selected'>Audio</option>" 
        : "<option value ='2'>Audio</option>";
    echo (3 == $strSearchByFtype) ? "<option value ='3' selected='selected'>Video</option>" 
        : "<option value ='3'>Video</option>"
?>
    </select>
        </div>
    </div>