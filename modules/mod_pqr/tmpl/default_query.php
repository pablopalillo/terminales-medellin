<div class="legend_pqr_query" align="left"></div>
<div id="red-wrap-company" style="width:890px;">
    <div class="red-container" style="width:755px; min-height: 50px; padding-top: 30px; padding-left: 105px;">
        <form id="query_pqr_form" action="index.php" method="get">
            Por favor ingrese el número de radicado de la PQRS que desea consultar
            <input type="hidden" name="option" value="<?php echo JRequest::getString('option'); ?>">
            <input type="hidden" name="view" value="<?php echo JRequest::getString('view'); ?>">
            <input type="text" class="pqr_code_input" name="code" style="margin-left:20px; width:200px;">
            <input type="hidden" name="Itemid" value="<?php echo JRequest::getString('Itemid'); ?>">
            <button id="query_pqr_btn" style="background-image: url('images/query_pqr_btn.jpg'); border: none; height: 22px; width:100px;">Consultar</button>
        </form>
    </div>
</div>