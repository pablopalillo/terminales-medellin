<?php
    $doc = JFactory::getDocument();
    $doc->addStyleSheet($this->baseurl.'/templates/'.$this->template.'/css/styles.css', $type = 'text/css', $media = 'screen,projection');
    $doc->addStyleSheet($this->baseurl.'/external/css/jquery.lightbox-0.5.css', $type = 'text/css', $media = 'screen,projection');
    $doc->addScript($this->baseurl.'/external/js/jquery1.8.3.js', 'text/javascript');
    $doc->addScript($this->baseurl.'/templates/'.$this->template.'/js/scripts.js', 'text/javascript');
    $doc->addScript($this->baseurl.'/templates/'.$this->template.'/js/armando_form.js', 'text/javascript');
    $doc->addStyleSheet($this->baseurl.'/external/css/maps.css', $type = 'text/css', $media = 'screen,projection');
    $doc->addScript($this->baseurl.'/external/js/craftmap.js', 'text/javascript');
    $doc->addScript($this->baseurl.'/external/js/init.js', 'text/javascript');
    $doc->addScript($this->baseurl.'/external/js/jquery.lightbox-0.5.js', 'text/javascript');
?>
<!DOCTYPE html>
<html>
    <head>
        <jdoc:include type="head" />
    </head>
    <body>
        <div id="tmpl-child-wrapper">
            <jdoc:include type="component" />
        </div>
    </body>
</html>