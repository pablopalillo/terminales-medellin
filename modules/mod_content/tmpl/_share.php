<td>
<table id="share_container">
    <tr>
        <td>
            <table>
                <tr>
                    <td>
                        <?php JPluginHelper::importPlugin('share','send'); ?>
                    </td>
                    <td>
                        <?php JPluginHelper::importPlugin('share','mail'); ?>
                    </td>
                    <td>
                        <a ref="<?php echo $arrData[0]->id; ?>" href="#" class="share_pdf_a">
                            <div class="share_print_container">
                                <div style="float: left"><img src="images/share_print.png" /></div>
                                <div style="float: left; padding-top: 2px; padding-left: 2px;">Imprimir</div>
                            </div>
                        </a>
                    </td>
                    <td>
                        <div class="share_pdf_container">
                            <a ref="<?php echo $arrData[0]->id; ?>" href="#" class="share_pdf_a">
                                <div id="share_pdf_icon" style="float: left"><img src="images/share_pdf.png" /></div>
                                <div id="share_pdf_label" style="float: left; padding-top: 2px; padding-left: 2px;">Descargar en PDF</div>
                            </a>
                        </div>
                    </td>
                    <td>
                        <?php JPluginHelper::importPlugin('share','vote'); ?>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
    <tr>
        <td class="fb-comments" data-href="<?php echo JFactory::getURI(); ?>" data-width="830" data-num-posts="10"></td>
    </tr>
</table>
</td>   