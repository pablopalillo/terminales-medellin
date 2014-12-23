<?php if('com_english' == JRequest::getVar('option', false)){ ?>
    <script>
        $('document').ready(
            function(){
                $('#tmpl-header').css('background-image', 'url("images/logo-en.png")');
                $('#tmpl-header-labels-armas').css('background-image', 'url("images/armas-en.png")');
                $('#tmpl-header-labels-alcalde').css('background-image', 'url("images/alcalde-en.png")');
        });
    </script>
    <a href="index.php?option=com_home_news_featured&Itemid=118"><div class="change-language-spanish"></div></a>
<?php } else { ?>
    <a href="index.php?option=com_english&Itemid=352"><div class="change-language-english"></div></a>
<?php } 
