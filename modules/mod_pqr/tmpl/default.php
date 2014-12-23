<?php
/**
 * @package	Joomla.Site
 * @subpackage	mod_content
 * @copyright	Copyright (C) All rights reserved.
 * @license	All rights reserved.
 * @author      Juan Lotero <Juan.lotero@fuziona.net>
 */

// no direct access
defined('_JEXEC') or die;
JHtml::_('behavior.keepalive');
?>

<div class="legend_pqr_" align="left"></div>
<div id="red-wrap-company" style="width:890px;">
    <div class="red-container" style="width:855px;">
        
        <div style=" width:450px; margin-left: auto; margin-right: auto; margin-top: 20px;">
            <form name="formPqr" method="post">
                <input type="hidden"name ="dateHour" value ="<?php echo date('d/m/Y H:i:s'); ?>"/>
                <div style="width:150px; float: left; margin-bottom: 5px;">Nombre y Apellido* :</div>
                <div style="width:300px; float: left; margin-bottom: 5px;">
                    <input id="pqrNameLastname" type="text" name="pqrNameLastname">
                </div>
                <div style="width:150px; float: left; margin-bottom: 5px;">Cédula* :</div>
                <div style="width:300px; float: left; margin-bottom: 5px;">
                    <input id="pqrId" type="text" name="pqrId">
                </div>
                <div style="width:150px; float: left; margin-bottom: 5px;">Dirección* :</div>
                <div style="width:300px; float: left; margin-bottom: 5px;">
                    <input id="pqrAdress" type="text" name="pqrAdress">
                </div>
                <div style="width:150px; float: left; margin-bottom: 5px;">Ciudad* :</div>
                <div style="width:300px; float: left; margin-bottom: 5px;">
                    <input id="pqrCity" type="text" name="pqrCity">
                </div>
                <div style="width:150px; float: left; margin-bottom: 5px;">Teléfono* :</div>
                <div style="width:300px; float: left; margin-bottom: 5px;">
                    <input id="pqrPhone" type="text" name="pqrPhone">
                </div>
                <div style="width:150px; float: left; margin-bottom: 5px;">Celular* :</div>
                <div style="width:300px; float: left; margin-bottom: 5px;">
                    <input id="pqrCellphone" type="text" name="pqrCellphone">
                </div>
                <div style="width:150px; float: left; margin-bottom: 5px;">E-mail* :</div>
                <div style="width:300px; float: left; margin-bottom: 5px;">
                    <input id="pqrMail" type="text" name="pqrMail"/>
                </div>
                <div style="width:150px; float: left; margin-bottom: 5px;">Tipo de PQR* :</div>
                <div style="width:300px; float: left; margin-bottom: 5px;">
                    <select id="tPqr" name="tPqr">
                        <option value="tPqrDefault">Seleccione</option>
                        <option value="Quejas">Queja</option>
                        <option value="Reclamos">Reclamo</option>
                        <option value="Sugerencias">Sugerencia</option>
                        <option value="Felicitacion">Felicitaciones</option>
                        <option value="Info">Solicitud de Información</option>
                    </select>
                </div>
                <div style="width:150px; float: left; margin-bottom: 5px;">Lugar PQR* :</div>
                <div style="width:300px; float: left; margin-bottom: 5px;">
                    <select id="sPqr" name="sPqr">
                        <?php 
                        switch (JRequest::getInt('Itemid')){
                            case 394:
                                echo '<option selcted="selected" value="stairways">Escaleras Electricas</option>'
                                    .'<option value="teleferic">Teleferico San Sebastian de Palmitas</option>'
                                    .'<option value="zer">Zonas de Estacionamiento Regulado (ZER)</option>';
                                break;
                            case 382:
                                echo '<option selected="selected" value="zer">Zonas de Estacionamiento Regulado (ZER)</option>'
                                    .'<option value="teleferic">Teleferico San Sebastian de Palmitas</option>'
                                    .'<option value="stairways">Escaleras Electricas</option>';
                                break;
                            case 388:
                                echo '<option selected="selected" value="teleferic">Teleferico San Sebastian de Palmitas</option>'
                                    .'<option value="teleferic">Teleferico San Sebastian de Palmitas</option>'
                                    .'<option value="zer">Zonas de Estacionamiento Regulado (ZER)</option>';
                                break;
                            default :
                                echo '<option selected="selected" value="sPqrDefault">Seleccione</option>'
                                    .'<option value="teleferic">Teleferico San Sebastian de Palmitas</option>'
                                    .'<option value="zer">Zonas de Estacionamiento Regulado (ZER)</option>'
                                    .'<option value="stairways">Escaleras Electricas</option>';
                                break;
                        }
                        ?>
                        
                        <option value="tNorte">Terminal Norte</option>
                        <option value="tSur">Terminal Sur</option>
                        <option value="parkinmo">Parqueadero Inmovilizados</option>
                        <option value="parkin2">Parqueaderos P2</option>
                        
                        
                        
                    </select>
                </div>
                <div style="width:150px; float: left; margin-bottom: 5px;">Placa:</div>
                <div style="width:300px; float: left; margin-bottom: 5px;">
                    <input type="text" name="pqrPlaca"/>
                </div>
                <div style="width:150px; float: left; margin-bottom: 5px;">Comentarios* :</div>
                <div style="width:300px; float: left; margin-bottom: 5px;">
                    <textarea id="pqrComment" name="pqrComment"/></textarea>
                </div>
                <div class="pqr_faces" style="width:420px; float: left; margin-bottom: 5px; border:2px solid #ccc; padding: 10px; -webkit-border-radius: 6px; -moz-border-radius: 6px; border-radius: 6px;">
                <div align="center" style="width:420px; height: 20px; float: left; margin-bottom: 5px; font-size: 16px;">Nivel de Satisfacción de Nuestro Servicio*</div>
                    <img style="width:98px;" class="Excelente" src="images/excelente.png" />
                    <img style="width:98px;" class="Bueno" src="images/bueno.png" />
                    <img style="width:98px;" class="Regular" src="images/regular.png" />
                    <img style="width:98px;" class="Malo" src="images/malo.png" />
                    <div  align="center" style="width:420px; height: 20px; float: left; margin-bottom: 5px; font-size: 16px;">
                        <div align="center" style="width:105px; height: 20px; float: left; font-size: 14px;">EXCELENTE</div>
                        <div align="center" style="width:105px; height: 20px; float: left; font-size: 14px;">BUENO</div>
                        <div align="center" style="width:105px; height: 20px; float: left; font-size: 14px;">REGULAR</div>
                        <div align="center" style="width:105px; height: 20px; float: left; font-size: 14px;">MALO</div>
                    </div>
                </div>
                <div align="center" style="width:450px; float: left; margin-bottom: 5px; margin-left:100px;">
                    <input type="hidden" name="pqrService" id="pqrService" value="" />
                    <div style="height: 30px; background-color:transparent; border:none; float:left;">
                        <input type="submit" id="pqrSubmitBtn" name="submit" value="" 
                           style="background-color: transparent; border: none; 
                           background-image: url('images/enviar_pqr_btn.jpg'); 
                           width:92px; height: 22px;" />  
                    </div>
                    <div style="height: 30px; background-color:transparent; border:none; float:left;">
                        <a href="index.php?option=com_pqr&view=query&Itemid=<?php echo JRequest::getString('Itemid'); ?>">
                            <img src="images/consultar_pqr_btn.jpg">
                        </a>
                    </div>
                </div>
                <br/>
            </form>
        </div>
    </div>
</div>