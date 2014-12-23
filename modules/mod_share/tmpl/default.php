<?php
/**
 * @package		Joomla.Site
 * @subpackage	mod_search
 * @copyright	Copyright (C) 2005 - 2012 Open Source Matters, Inc. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */

// no direct access
defined('_JEXEC') or die;
?>
<table>
    <tr>
        <td>
            <?php JPluginHelper::importPlugin('share','mail'); ?>
        </td>
        <td>
            <?php JPluginHelper::importPlugin('share','print'); ?>
        </td>
        <td>
            <?php JPluginHelper::importPlugin('share','vote2'); ?>
        </td>
        <td>
            <?php JPluginHelper::importPlugin('share','favorites'); ?>
        </td>
    </tr>
</table>
