<?php
/**
 * @package	Joomla.Site
 * @subpackage	mod_poll
 * @copyright	Copyright (C) All rights reserved.
 * @license	All rights reserved.
 * @author      yesid montoya <yesid.montoya@fuziona.net>
 */
defined('_JEXEC') or die;
JHtml::_('behavior.keepalive');
if(count($arrData)>=1){
$intIdPoll = $arrData[0]->id;
$intIdPollType = $arrData[0]->type;
echo "<div id='poll_container'><div align='right' id='poll_container_title'>Encuestas</div>"
    ."<div id='poll_content'><div id='poll' class='showContent'>"
    ."<div align='center' id='poll_title'>".$arrData[0]->poll."</div>"
    ."<div align='left' id='poll_option'>"
    ."<form id='poll_form' action='index.php' method='post'>"
    ."<input type='hidden' id='poll_id' name='poll_id' value='".$arrData[0]->id."' />"
    ."<input type='hidden' id='poll_answer' name='poll_answer' />"
    ."</form>";
 switch ($intIdPollType) {
    case '1':
        foreach(json_decode($arrData[0]->option) AS $strData){
            echo "<div align='left' class='poll_answer_option'>"
                ."<input type='radio' name='option' value='".$strData."'/>"
                ."<label>".$strData."</label>"
                ."</div>";
        }
        echo "<div align='left' class='poll_answer_show_results'><a id='poll-answer-show-results' href='#'>Mostrar Resultados</a></div>";
        echo "<div align='left' class='poll_answer_submit'><button id='poll_submit_btn_options'>Votar</button></div>";
        break;
    case '2':
        foreach(json_decode($arrData[0]->option) AS $strData){
            echo "<div align='left' class='poll_answer_option'>"
                ."<input type='checkbox' name='option' value='".$strData."'/>"
                ."<label>".$strData."</label>"
                ."</div>";
        }
        echo "<div align='left' class='poll_answer_show_results'><a id='poll-answer-show-results' href='#'>Mostrar Resultados</a></div>";
        echo "<div align='left' class='poll_answer_submit'><button id='poll_submit_btn_options'>Votar</button></div>";
        break;
    case '3':
        echo "<div align='left' id='poll_answer_option_textarea'>"
            ."<textarea type='text' name='option_text' ></textarea>"
            ."</div>"
            ."<div align='left' class='poll_answer_submit'><button id='poll_submit_btn'>Votar</button></div>";
        break;
 }
 echo "</div>"
    ."</div>"
    ."</div>"
    ."<div id='answer_content' class='hiddenContent'>"; 
    $arrTemp = array();
    foreach (json_decode($arrData[0]->option) AS $strData){
            $arrTemp[$strData] = 0;
    }
    $intCont = 0;
    foreach ($arrDataResult AS $objDataResult){
        $arrAnswer = json_decode($objDataResult->answer);
        if(!empty($arrAnswer)){
            if(is_array($arrAnswer)){
                foreach($arrAnswer as $strAnswer){
                    $arrTemp[$strAnswer] += 1;
                    $intCont += 1;
                }
            }
        }
    }
    foreach(json_decode($arrData[0]->option) AS $strData){
        $strPercent = $arrTemp[$strData]!=0?round($arrTemp[$strData]/($intCont/100),2):0;
        echo "<div class='poll_answer'>".$strData.": ".$arrTemp[$strData]." - ".$strPercent."%</div>";
    }
    echo "<div align='right' class='poll_return_btn'><a id='poll-return-btn' href='#'>Regresar</div></div>";

echo "</div>";
}



?>

