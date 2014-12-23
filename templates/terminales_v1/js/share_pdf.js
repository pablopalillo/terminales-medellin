$('document').ready(
    function(){
        $('.share_pdf_a').click(
            function(){
                window.open('index.php?option=com_pdf&id='+$(this).attr('ref'));
                return false;
        })
})