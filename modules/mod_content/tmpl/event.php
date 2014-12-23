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

if (isset($arrDataEvent) && count($arrDataEvent)>= 1) : ?>
    <tr style='border:none;'>
        <td style='border:none;'>
            <div style="float: left; margin-left: 20px;">
                <div id="calendar"></div>
                <input type="hidden" name="startdate"  id="inputDate1" value= "<?php echo $arrDataEvent[0]->start_date;?>">
                <input type="hidden" name="startdate"  id="inputDate" value= "<?php echo $arrDataEvent[0]->finish_date;?>">
                <script>
                    $('#calendar').DatePicker({
                        flat: true,
                        date: [$('#inputDate1').val(),$('#inputDate').val()],
                        mode: 'range',
                        calendars: 2,
                        starts: 1             
                    });
                </script>
            </div>            
            <div style="float: left; margin-top: 40px; margin-left: 10px;">
                <table>
                    <tr style='border:none;'><td style='border:none;'><strong>Lugar: </strong></td><td style='border:none;'><?php 
                        echo $arrDataEvent[0]->place; ?></td>
                    </tr>
                    <tr style='border:none;'><td style='border:none;'><strong>Tipo: </strong></td><td style='border:none;'><?php 
                        echo $arrDataEvent[0]->type; ?></td>
                    </tr>
                    <tr style='border:none;'><td style='border:none;'><strong>Publico: </strong></td><td style='border:none;'><?php 
                        echo $arrDataEvent[0]->public; ?></td>
                    </tr>
                    <tr style='border:none;'><td style='border:none;'><strong>Encargado: </strong></td><td style='border:none;'><?php 
                        echo $arrDataEvent[0]->manager; ?></td>
                    </tr>
                    <tr style='border:none;'><td style='border:none;'><strong>Contacto: </strong></td><td style='border:none;'><?php 
                        echo $arrDataEvent[0]->contact; ?></td>
                    </tr>
                    <tr style='border:none;'><td style='border:none;'><strong>Precio: </strong></td><td style='border:none;'><?php 
                        echo $arrDataEvent[0]->price; ?></td>
                    </tr>
                </table>
            </div>
        </td>
    </tr>
<?php endif; ?>