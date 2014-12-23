<?php
defined('_JEXEC') or die;
?>
<div class="hidden" id="formats">
    <div align="left" style="font-size: 16px; color: #fff; width: 100%;">
        <div style="width:50px; height: 24px; background-image: url('images/formats_icon.png'); float: left;"></div>
        <div style="width:500px; height: 24px; float: left; font-weight: 700;">
            Opciones de Visualización
        </div>
    </div>
    <div align="left" style="border-bottom: dotted 1px #129AD6; margin-left: 5px; font-size: 16px; margin-top: -5px; width: 580px; padding-top: 60px; padding-left: 10px; margin-bottom: 20px;">
        <strong>Formatos</strong>
    </div>
    <div align="center" style="font-size: 16px; margin-top: -5px; width: 590px;">
        <div align="right" style="float:left; width:258px; float:left; background-image: url('images/formats_left.png'); background-position: right bottom; padding-bottom: 12px; padding-right: 12px; background-repeat: no-repeat;">Opciones de Fuente</div>
        <div align="left" style="float:left; width:258px; float:left; background-image: url('images/formats_right.png'); background-position: left bottom; padding-bottom: 12px; padding-left: 12px; background-repeat: no-repeat; margin-left: 50px;">Opciones de Color</div>
    </div>
    <div align="center" style="font-size: 16px; margin-top: -5px; width: 590px;">
        <div align="right" style="float:left; width:258px; float:left; padding-bottom: 12px; padding-right: 12px; height: 30px;">Fuente: 
        <select style="width:85px;" class="formats-font-family" onchange="javascript:activateFormatApli();">
            <option value ="1">Arial</option>
            <option value ="2">Georgia</option>
            <option value ="3">Trebuchet</option>
            <option value ="4">Verdana</option>
            <option value ="5">Courier</option>
            <option value ="6">Calibrí</option>
        </select>
        </div>
        <div align="left" style="float:left; width:258px; float:left; padding-bottom: 12px; padding-left: 12px; margin-left: 50px; height: 30px;">
            <div style="float: left; width:130px;">Color de Fuente: </div>
            <div style="float: left;">
                <input class="formats-background-color" type="hidden" value="undefined">
                <a href="javascript:setFontColor('1');"><div class="formats-bck-color-btn" style="width: 22px; height: 22px; float: left; background-image: url('images/fuente_1.png')"></div></a>
                <a href="javascript:setFontColor('2');"><div class="formats-bck-color-btn" style="width: 22px; height: 22px; float: left; background-image: url('images/fuente_2.png')"></div></a>
                <a href="javascript:setFontColor('3');"><div class="formats-bck-color-btn" style="width: 22px; height: 22px; float: left; background-image: url('images/fuente_3.png')"></div></a>
                <a href="javascript:setFontColor('4');"><div class="formats-bck-color-btn" style="width: 22px; height: 22px; float: left; background-image: url('images/fuente_4.png')"></div></a>
                <a href="javascript:setFontColor('5');"><div class="formats-bck-color-btn" style="width: 22px; height: 22px; float: left; background-image: url('images/fuente_5.png')"></div></a>
            </div>
        </div>
        <div align="right" style="float:left; width:258px; float:left; padding-bottom: 12px; padding-right: 12px; height: 30px;">Tamaño de Fuente: 
            <select style="width:85px;" class="formats-font-size" onchange="javascript:activateFormatApli();">
                <option value ="1">Pequeña</option>
                <option value ="2">Normal</option>
                <option value ="3">Grande</option>
            </select>
        </div>
        <div align="left" style="float:left; width:258px; float:left; padding-bottom: 12px; padding-left: 12px; margin-left: 50px; height: 30px;">
            <div style="float: left; width:130px;">Color del Fondo: </div>
            <div style="float: left;">
                <input class="formats-font-color" type="hidden" value="undefined">
                <a href="javascript:setBckColor('1');"><div class="formats-font-color-btn" style="width: 22px; height: 22px; float: left; background-image: url('images/fondo_1.png')"></div></a>
                <a href="javascript:setBckColor('2');"><div class="formats-font-color-btn" style="width: 22px; height: 22px; float: left; background-image: url('images/fondo_2.png')"></div></a>
                <a href="javascript:setBckColor('3');"><div class="formats-font-color-btn" style="width: 22px; height: 22px; float: left; background-image: url('images/fondo_3.png')"></div></a>
                <a href="javascript:setBckColor('4');"><div class="formats-font-color-btn" style="width: 22px; height: 22px; float: left; background-image: url('images/fondo_4.png')"></div></a>
            </div>
        </div>
        <div align="right" style="float:left; width:258px; float:left; padding-bottom: 12px; padding-right: 12px; height: 30px;">Interlineado: 
            <select style="width:85px;" class="formats-line-height" onchange="javascript:activateFormatApli();">
                <option value ="1">Minimo</option>
                <option value ="2">Normal</option>
                <option value ="3">Doble</option>
            </select>
        </div>
        <div align="left" style="float:left; width:258px; float:left; padding-bottom: 12px; padding-left: 12px; margin-left: 50px; height: 30px;">
            <a href="javascript:getConfiguration();"><div align="right" class="formats-apli-button-active" style="float: left; width:100px; height: 30px; background-image: url('images/apli_btn.png'); margin-left: 150px;"></div></a>
        </div>
    </div>
</div>