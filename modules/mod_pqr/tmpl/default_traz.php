<div class="legend_pqr_traz" align="left"></div>
<div id="red-wrap-company" style="width:890px;">
    <div class="red-container" style="width:855px; min-height: 50px; padding-top: 30px;">
        <div style="padding-left: 105px;">
            <form id="query_pqr_form" action="index.php" method="get">
                Por favor ingrese el número de radicado de la PQRS que desea consultar
                <input type="hidden" name="option" value="<?php echo JRequest::getString('option'); ?>">
                <input type="hidden" name="view" value="<?php echo JRequest::getString('view'); ?>">
                <input type="text" class="pqr_code_input" name="code" style="margin-left:20px; width:200px;">
                <input type="hidden" name="Itemid" value="<?php echo JRequest::getString('Itemid'); ?>">
                <button id="query_pqr_btn" style="background-image: url('images/query_pqr_btn.jpg'); border: none; height: 22px; width:100px;">Consultar</button>
            </form>
        </div>
        <?php if( !empty($objData->TrazabilidadResult->string)  ): ?>
            <div style="margin-top: 20px;">
                <table class="pqr_traz_table">
                    <thead>
                        <tr>
                            <th style="width:150px;">RESPONSABLE</th>
                            <th style="width:150px;">NOMBRE USUARIO</th>
                            <th>FECHA LLEGADA</th>
                            <th>FECHA LECTURA</th>
                            <th>FECHA TERMINACIÓN</th>
                            <th>FECHA LIMITE</th>
                            <th style="width:150px;">OBSERVACIÓN</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $strHtml = "";
                        foreach ($objData->TrazabilidadResult->string as $strValue){

                            $arrData = explode('|', $strValue);
                            $strHtml .= "<tr>";
                            foreach ($arrData as $strInput){
                                $strHtml .= "<td>".$strInput."</td>";
                            }
                            $strHtml .= "</tr>";
                        }

                            echo $strHtml;

                        ?>
                    </tbody>
                </table>
            </div>
        <?php endif; ?>
    </div>
</div>