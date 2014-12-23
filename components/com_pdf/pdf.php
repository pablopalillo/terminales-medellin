<?php
/**
 * @package		Joomla.Site
 * @subpackage	com_content
 * @copyright	Copyright (C) 2005 - 2012 Open Source Matters, Inc. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;
require_once dirname(__FILE__)."/../../external/objects/dompdf/dompdf_config.inc.php";
require_once "helper.php";
    if(JRequest::getVar('id', false)){
        $arrData = PdfComponentHelper::getContent(JRequest::getVar('id'));
    } else {
        $arrData[0] = false;
    }
$dompdf = new DOMPDF();
if(false == $arrData[0]){
    $dompdf->load_html("<div>No hay resultados</div>");
} else {
//    $dompdf->load_html("okkk");
//    $dompdf->load_html("<h1>pruebaaa</h1>");
    $html = '<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />';
    $html .= '<div style="width:700px; height:150px;" align="center"><img src="images/header_pdf.jpg" /></div>';
    $html .= '<h1 style="font-family:sans-serif; font-size:19px;">'.$arrData[0]->title.'</h1>';
    $html .= '<div style="font-family:sans-serif; font-size:13px;">'.$arrData[0]->fulltext.'</div>';
    $html .= '<div style="width:700px; height:150px;" align="center"><img src="images/footer_pdf.jpg" /></div>';
    $dompdf->load_html($html);
}

$dompdf->render();
$dompdf->stream("dompdf_out.pdf", array("Attachment" => false));
exit;