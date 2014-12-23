<?php
if($strLang == 'en'){
    $strRegistersLabel = "Registries on page:";
    $strOrderLabel = "Order by:";
    $strSearchLabel = "Search:";
    $strOrderRouteLabel = "Route";
    $strOrderTimeLabel = "Travel Time";
    $strOrderKMSLabel = "kilometers";
    $strSearchLabel = "Search:";
    $strSearchBtnLabel = "Search";
    $strAll = "ALL";
    $strPage = "Page";
    $strOf = "of";
}else{
    $strRegistersLabel = "Registros por página:";
    $strOrderLabel = "Ordenar por:";
    $strOrderRouteLabel = "Trayecto";
    $strOrderTimeLabel = "Duración Viaje";
    $strOrderKMSLabel = "Kilometros Recorrido";
    $strSearchLabel = "Buscar:";
    $strSearchBtnLabel = "Buscar";
    $strAll = "TODOS";
    $strPage = "Página";
    $strOf = "de";
}
if($strColor == 'blue'){
    $strDivOpenTag = "<div id='content-wrap-company'>";
}else{
    $strDivOpenTag = "<div id='content-wrap-company-green'>";
}
echo $strDivOpenTag;
$arrLetters = array('A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z'); 
?>
<form action="index.php" class="search-form">
    <input type="hidden" name="option" value="<?php echo $strOption; ?>" >
    <input type="hidden" name="lang" value="<?php echo JRequest::getString('lang', 'es'); ?>" >
    <input type="hidden" name="view" value="<?php echo $strView; ?>" >
    <input type="hidden" class="search-form-pr" name="pr" value="<?php echo $strPrRequest; ?>" >
    <input type="hidden" class="search-form-order" name="order" value="<?php echo $strOrderRequest; ?>" >
    <input type="hidden" class="search-form-letter" name="letter" value="<?php echo $strLetterRequest; ?>" >
    <input type="hidden" class="search-form-search" name="search" value="<?php echo $strSearchRequest; ?>" >
    <input type="hidden" name="Itemid" value="<?php echo $strItemid; ?>" >
</form>
    <div style="height:130px;" class="filter-container">
        <div style="height:70px; width: 280px; float: left; border-bottom: 1px #CCC solid; border-right: 1px #CCC solid;">
            <div align="center" style="height: 20px; margin-top: 10px;">
                <?php echo $strRegistersLabel; ?>
            </div>
            <div align="center" style="height: 30px;">
                <select class="search-input-pr">
                    <?php if($strPrRequest == '') { ?>
                            <option selected="selected" value='5'>5</option>
                            <option value='10'>10</option>
                            <option value='15'>15</option>
                            <option value='20'>20</option>
                            <option value='50'>50</option>
                            <option value='100'>100</option>
                    <?php } else { 
                            echo ($strPrRequest == 5)?"<option selected='selected' value='5'>5</option>":"<option value='5'>5</option>";
                            echo ($strPrRequest == 10)?"<option selected='selected' value='10'>10</option>":"<option value='10'>10</option>";
                            echo ($strPrRequest == 15)?"<option selected='selected' value='15'>15</option>":"<option value='15'>15</option>";
                            echo ($strPrRequest == 20)?"<option selected='selected' value='20'>20</option>":"<option value='20'>20</option>";
                            echo ($strPrRequest == 50)?"<option selected='selected' value='50'>50</option>":"<option value='50'>50</option>";
                            echo ($strPrRequest == 100)?"<option selected='selected' value='100'>100</option>":"<option value='100'>100</option>";
                        } ?>
                </select>
            </div>
        </div>
        <div style="height:70px; width: 290px; float: left; border-bottom: 1px #CCC solid; border-right: 1px #CCC solid;">
            <div align="center" style="height: 20px; margin-top: 10px;">
                <?php echo $strOrderLabel; ?>
            </div>
            <div align="center" style="height: 30px;">
                <select class="search-input-order">
                <?php if($strOrderRequest == '') { ?>
                            <option selected="selected" value="1"><?php echo $strOrderRouteLabel; ?></option>
                            <option value="2"><?php echo $strOrderTimeLabel; ?></option>
                            <option value="3"><?php echo $strOrderKMSLabel; ?></option>
                <?php } else { 
                            echo ($strOrderRequest == 1)?"<option selected='selected' value='1'>".$strOrderRouteLabel."</option>":"<option value='1'>".$strOrderRouteLabel."</option>";
                            echo ($strOrderRequest == 2)?"<option selected='selected' value='2'>".$strOrderTimeLabel."</option>":"<option value='2'>".$strOrderTimeLabel."</option>";
                            echo ($strOrderRequest == 3)?"<option selected='selected' value='3'>".$strOrderKMSLabel."</option>":"<option value='3'>".$strOrderKMSLabel."</option>";
                    } ?>
                </select>
            </div>
        </div>
        <div style="height:70px; width: 280px; float: left; border-bottom: 1px #CCC solid;">
            <div align="center" style="height: 20px; margin-top: 10px;">
                <?php echo $strSearchLabel; ?>
            </div>
            <div align="center" style="height: 30px;">
                <input type="text" style="width:160px;" class="search-input-search" value="<?php echo $strSearchRequest; ?>">
                <input type="button" value="<?php echo $strSearchBtnLabel; ?>" class="search-input-button">
            </div>
        </div>
        <div align="center" style="height:30px; width: 855px; float: left; margin-top: 20px;">
<?php
foreach($arrLetters AS $letter){ 
    echo "&nbsp<a class='search-letter' ref='".strtolower($letter)."' href='#' >".$letter."</a>"; 
}
    echo "&nbsp<a class='search-letter' ref='' href='#' >[".$strAll."]</a>"; 
?>
        </div>
    </div>
</div>