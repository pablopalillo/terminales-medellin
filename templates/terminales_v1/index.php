<?php
$doc = JFactory::getDocument();
$doc->addStyleSheet($this->baseurl.'/templates/'.$this->template.'/css/styles.css', $type = 'text/css', $media = 'screen,projection');
$doc->addStyleSheet($this->baseurl.'/templates/'.$this->template.'/css/styles_multimedia_blue.css', $type = 'text/css', $media = 'screen,projection');
$doc->addStyleSheet($this->baseurl.'/templates/'.$this->template.'/css/styles_multimedia_green.css', $type = 'text/css', $media = 'screen,projection');
$doc->addStyleSheet($this->baseurl.'/templates/'.$this->template.'/css/styles_multimedia_orange.css', $type = 'text/css', $media = 'screen,projection');
$doc->addStyleSheet($this->baseurl.'/external/css/maps.css', $type = 'text/css', $media = 'screen,projection');
$doc->addStyleSheet($this->baseurl.'/external/css/datepicker.css', $type = 'text/css', $media = 'screen,projection');
$doc->addStyleSheet($this->baseurl.'/external/css/jquery.lightbox-0.5.css', $type = 'text/css', $media = 'screen,projection');
$doc->addStyleSheet($this->baseurl.'/external/css/tabs.css', $type = 'text/css', $media = 'screen,projection');
$doc->addStyleSheet($this->baseurl.'/external/css/facebook.css', $type = 'text/css', $media = 'screen,projection');
$doc->addStyleSheet($this->baseurl.'/external/css/coin-slider-styles.css', $type = 'text/css', $media = 'screen,projection');
$doc->addStyleSheet($this->baseurl.'/external/css/screen.css', $type = 'text/css', $media = 'screen,projection');
$doc->addScript($this->baseurl.'/external/js/jquery1.8.3.js', 'text/javascript');
$doc->addScript($this->baseurl.'/templates/'.$this->template.'/js/scripts.js', 'text/javascript');
$doc->addScript($this->baseurl.'/templates/'.$this->template.'/js/directory.js', 'text/javascript');
$doc->addScript($this->baseurl.'/templates/'.$this->template.'/js/poll.js', 'text/javascript');
$doc->addScript($this->baseurl.'/templates/'.$this->template.'/js/multimedia.js', 'text/javascript');
$doc->addScript($this->baseurl.'/templates/'.$this->template.'/js/contest.js', 'text/javascript');
$doc->addScript($this->baseurl.'/templates/'.$this->template.'/js/route.js', 'text/javascript');
$doc->addScript($this->baseurl.'/templates/'.$this->template.'/js/sessionStyles.js', 'text/javascript');
$doc->addScript($this->baseurl.'/templates/'.$this->template.'/js/banner.js', 'text/javascript');
$doc->addScript($this->baseurl.'/templates/'.$this->template.'/js/share_email.js', 'text/javascript');
$doc->addScript($this->baseurl.'/templates/'.$this->template.'/js/share_pdf.js', 'text/javascript');
$doc->addScript($this->baseurl.'/templates/'.$this->template.'/js/share_vote.js', 'text/javascript');
$doc->addScript($this->baseurl.'/templates/'.$this->template.'/js/socialTabs.js', 'text/javascript');
$doc->addScript($this->baseurl.'/templates/'.$this->template.'/js/registerValidator.js', 'text/javascript');
$doc->addScript($this->baseurl.'/templates/'.$this->template.'/js/mail_pauta.js', 'text/javascript');
$doc->addScript($this->baseurl.'/templates/'.$this->template.'/js/mail_reservation.js', 'text/javascript');
$doc->addScript($this->baseurl.'/templates/'.$this->template.'/js/pqr_validation.js', 'text/javascript');
$doc->addScript($this->baseurl.'/templates/'.$this->template.'/js/search_filters.js', 'text/javascript');
$doc->addScript($this->baseurl.'/external/js/flowplayer-3.2.11.min.js', 'text/javascript');
$doc->addScript($this->baseurl.'/external/js/datepicker.js', 'text/javascript');
$doc->addScript($this->baseurl.'/external/js/jquery.lightbox-0.5.js', 'text/javascript');
$doc->addScript($this->baseurl.'/external/js/craftmap.js', 'text/javascript');
$doc->addScript($this->baseurl.'/external/js/init.js', 'text/javascript');
$doc->addScript($this->baseurl.'/external/js/mapterminal.js', 'text/javascript');
$doc->addScript($this->baseurl.'/external/js/coin-slider.js', 'text/javascript');
$doc->addScript($this->baseurl.'/external/js/easySlider1.7.js', 'text/javascript');
?>
<!DOCTYPE html>
<html>
    <head>
        <jdoc:include type="head" />
        <script type="text/javascript">
            $(document).ready(function(){  
              $("#slider").easySlider({
                auto: true, 
                continuous: true
                });
            });  
        </script>

        <!-- Google Analytics -->
        <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-48654555-1', 'auto');
        ga('require', 'displayfeatures');
        ga('send', 'pageview');

        </script>
        <!-- End Google Analytics -->
    </head>
    <body>
        <div id="fb-root"></div>
        <script>(function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = "//connect.facebook.net/es_ES/all.js#xfbml=1";
            fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));
        </script>
        <script>sessionStyle('<?php echo json_encode(JFactory::getSession()->get('_style', array())) ?>')</script>
        <div id="tmpl-wrapper">
            <div id="tmpl-main">
                <div id="tmpl-top-bar">
                    <div id="tmpl-top-weather">
                        <jdoc:include type="modules" name="tmpl-top-weather" />
                    </div>
                    <div id="tmpl-top-search">
                        <jdoc:include type="modules" name="tmpl-top-search" />
                    </div>
                    <div id="tmpl-top-language">
                        <jdoc:include type="modules" name="tmpl-top-language" />
                    </div>
                    <div id="tmpl-top-formats">
                        <!--<jdoc:include type="modules" name="tmpl-top-formats" />-->
                    </div>
                </div>
                <div id="tmpl-header">
                    <div id="tmpl-header-labels">
                        <div id="tmpl-header-labels-alcalde"></div>
                        <div id="tmpl-header-labels-armas"></div>
                        <div id="tmpl-header-labels-colombia"></div>
                    </div>
                    <div align="right" id="tmpl-header-login"><jdoc:include type="modules" name="login" /></div>
                    <jdoc:include type="modules" name="header" />
                </div>
                <div id="tmpl-nav-bar"><jdoc:include type="modules" name="nav-bar" /></div>
                <div id="tmpl-img-bar"><jdoc:include type="modules" name="img-bar" /></div>
                <div id="tmpl-social-bar">
                    <div id="tmpl-social-bar-left">
                        <div id="tmpl-social-bar-last-update">
                            <?php echo 'com_english'==JRequest::getVar('option') ? "Last Upodate: ":"Última Actualización: ".date('Y').'/'.date('m').'/'.date('d'); ?>
                            <jdoc:include type="modules" name="update-bar" />
                        </div>
                        <div id="tmpl-social-bar-breadcrumbs">
                            <jdoc:include type="modules" name="breadcrumbs-bar" />
                        </div>
                    </div>
                    <div id="tmpl-social-bar-right">
                        <div align="right" id="tmpl-social-network">
                            <jdoc:include type="modules" name="social-bar" />
                        </div>
                    </div>
                </div>
                <div id="tmpl-center">
                    <jdoc:include type="message" />
                    <jdoc:include type="component" />
                </div>
                <div id="tmpl-nav-modules"><jdoc:include type="modules" name="nav-modules" /></div>
                <div id="tmpl-services-bar"><jdoc:include type="modules" name="services-bar" /></div>
                <div id="tmpl-sites-bar"><jdoc:include type="modules" name="sites-bar" /></div>
                <div id="tmpl-bottom-banner">
                    <div id="tmpl-bottom-banner-logo-container">
                        <jdoc:include type="modules" name="bottom-banner" />
                    </div>
                </div>
                <div id="tmpl-footer">
                    <div id="tmpl-footer-text"><jdoc:include type="modules" name="footer" /></div>
                    <div id="tmpl-footer-icons">
                        
                        <img src="images/bottom_logos.jpg">
                    </div>
                </div>
                <div id="tmpl-footer-bottom">
                    <div id="tmpl-footer-bottom-left"><jdoc:include type="modules" name="footer-bottom-left" /></div>
                    <div align="center" id="tmpl-footer-bottom-center"><jdoc:include type="modules" name="footer-bottom-center" /></div>
                    <div id="tmpl-footer-bottom-right"><jdoc:include type="modules" name="footer-bottom-right" /></div>
                </div>
                <div align="center" id="tmpl-rights"><jdoc:include type="modules" name="rights" /></div>
            <?php //include(JPATH_ROOT.DS.'includes'.DS.'calendar.php'); ?></div>
        </div>
        <?php include '_formatos.php'; ?>
    </body>
</html>