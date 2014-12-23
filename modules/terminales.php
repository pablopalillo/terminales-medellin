<?php
/**
 * @package		Joomla.Site
 * @author              diego.calle@fuziona.net
 */

// no direct access
defined('_JEXEC') or die;
JHtml::_('behavior.keepalive');
?>
<?php if ($type == 'logout') : ?>

<form action="<?php echo JRoute::_('index.php', true, $params->get('usesecure')); ?>" method="post" id="login-form">
<?php if ($params->get('greeting')) : ?>
	<div class="login-greeting">
	<?php if($params->get('name') == 0) : {
		echo JText::sprintf('MOD_LOGIN_HINAME', htmlspecialchars($user->get('name')));
	} else : {
		echo JText::sprintf('MOD_LOGIN_HINAME', htmlspecialchars($user->get('username')));
	} endif; ?>
<?php endif; ?>
            <a href="<?php echo JRoute::_('index.php?option=com_users&view=profile&Itemid=160'); ?>">Ver mi Perfil</a> - 
            <a href="<?php echo JRoute::_('index.php?Itemid=150'); ?>">
				<?php echo JText::_('MOD_LOGIN_UPDATE'); ?></a>
		<input type="submit" name="Submit" class="button" value="<?php echo JText::_('JLOGOUT'); ?>" />
		<input type="hidden" name="option" value="com_users" />
		<input type="hidden" name="task" value="user.logout" />
		<input type="hidden" name="return" value="<?php echo $return; ?>" />
		<?php echo JHtml::_('form.token'); ?>
</form>
<?php else : ?>

<form action="<?php echo JRoute::_('index.php', true, $params->get('usesecure')); ?>" method="post" id="login-form" >
	<?php if ($params->get('pretext')): ?>
		<div class="pretext">
		<?php echo $params->get('pretext'); ?>
		</div>
	<?php endif; ?>
            <div style="float:left; margin-left: 160px;">
		<label for="modlgn-username"><?php echo 'com_english'==JRequest::getVar('option') ? "User: ":"Usuario: "; ?></label>
		<input id="modlgn-username" type="text" name="username" class="inputbox"  size="18" />
	
	
		<label for="modlgn-passwd"><?php echo 'com_english'==JRequest::getVar('option') ? "Password: ":"Contraseña: "; ?></label>
		<input id="modlgn-passwd" type="password" name="password" class="inputbox" size="18"  />
            </div>
	<?php if (JPluginHelper::isEnabled('system', 'remember')) : ?>
	
	
	<?php endif; ?>
<!--	<input type="submit" name="Submit" class="button" value="<?php // echo JText::_('JLOGIN') ?>" />-->
        <div align="center" class="login-button"><a href="#" class="login-button-a"><?php echo 'com_english'==JRequest::getVar('option') ? "Login":"Ingresar"; ?></a></div>
        
<!--        <a href="<?php // echo JRoute::_('index.php?option=com_users&view=remind'); ?>">-->
        <div style="margin-top:2px; float:left;"><a href="<?php echo JRoute::_('index.php?Itemid=149'); ?>">
			&nbsp<?php echo 'com_english'==JRequest::getVar('option') ? "Forgot your password?":"¿Olvidó su contraseña?"; ?>
            </a> |&nbsp; 
        </div>
<!--        <a href="<?php // echo JRoute::_('index.php?option=com_users&view=registration'); ?>">-->
        <div style="margin-top:2px; float:left;">
            <a href="<?php echo JRoute::_('index.php?Itemid=148'); ?>"> 
				<?php echo 'com_english'==JRequest::getVar('option') ? "Register":"Regístrese"; ?>
            </a>
        </div>
    <input type="hidden" name="yeap" value="<?php echo $params->get('usesecure')); ?>" />
	<input type="hidden" name="option" value="com_users" />
	<input type="hidden" name="task" value="user.login" />
	<input type="hidden" name="return" value="<?php echo $return; ?>" />
	<?php echo JHtml::_('form.token'); ?>
	<?php if ($params->get('posttext')): ?>
		<div class="posttext">
		<?php echo $params->get('posttext'); ?>
		</div>
	<?php endif; ?>
</form>
<?php endif; ?>
