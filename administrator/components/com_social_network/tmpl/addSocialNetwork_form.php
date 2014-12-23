<?php
defined('_JEXEC') or die;
JToolBarHelper::save();
JToolBarHelper::cancel();
    ?>
<div style="width:550px;">
    <div align="center" style="width:500px;"><h2>NUEVA RED SOCIAL</h2></div>
    <div style="width:500px; margin-left: 30px;">
        <form id="addSocialNetwork_form" action="index.php" method="post">
            <input type="hidden" name="option" value="com_social_network" />
            <input type="hidden" name="task" value="savesocialnetwork" />
            <div align="left" style="width: 250px; height: 30px; float: left;">RED</div>
            <div align="left" style="width: 200px; height: 30px; float: left;"><input style="width:190px;" name="network" type="text" /></div>
            <div align="left" style="width: 50px; height: 30px; float: left;"></div>
            <div align="left" style="width: 250px; height: 30px; float: left;">USUARIO</div>
            <div align="left" style="width: 200px; height: 30px; float: left;"><input style="width:190px;" name="user" type="text" /></div>
            <div align="left" style="width: 50px; height: 30px; float: left;"></div>
            <div align="left" style="width: 250px; height: 30px; float: left;">URL</div>
            <div align="left" style="width: 200px; height: 30px; float: left;"><input style="width:190px;" name="url" type="text" /></div>
            <div align="left" style="width: 50px; height: 30px; float: left;"></div>
        </form>
    </div>
</div>
<?php
$doc = JFactory::getDocument();
$doc->addScript(JURI::base().'../templates/terminales_v1/js/jquery-1.9.0.min.js', "text/javascript");
$doc->addScript(JURI::base().'/components/com_social_network/js/social_network.js', "text/javascript");
?>