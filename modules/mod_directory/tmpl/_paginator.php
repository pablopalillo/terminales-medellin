<?php
//if ($intPages > 1) {
//    echo "<div align='center' id='paginator' ><ul>";
//    for ($x = 0; $x < $intPages; $x++) {
//        $intPage = $x + 1;
//        echo "<a countRef='".$intPages."'ref='directory_table_".$x."'class='directory_paginator' href=".$x."><li>".$intPage."</li></a>";
//    }
//    echo "</ul></div>";
//}
?>
<?php
if ($intPages > 1) {
    echo "<div class='multimedia_paginator_counter' align='center' id='paginator' ><ul>";
    for ($x = 0; $x < $intPages; $x++) {
        $intPage = $x + 1;
        echo "<a countRef='".$intPages."'ref='directory_table_".$x."'class='multimedia_paginator' href=".$x."><li>".$intPage."</li></a>";
    }
    echo "</ul></div>";
}
?>
<div align="center" class="paginator_green">
    <div style="margin-left: auto; margin-right: auto; width: 200px;">
        <a ref="0" href="#" class="pag_start_a">
            <div class="pag_start" style="float:left; width:13px; height: 20px; margin-right: 10px;"></div>
        </a>
        <a ref="0" href="#" class="pag_prev_a">
            <div class="pag_prev" style="float:left; width:10px; height: 20px;"></div>
        </a>
        
        <div style="float:left; padding-top: 3px; margin-left: 10px; margin-right: 2px;">Página</div>
        <div align="center" class="pag_container" style="float:left; padding-top: 3px; width:40px; margin-left: 2px; margin-right: 2px; height: 15px; background: #fff; border: 1px solid #000;">1</div>
        <div style="float:left; padding-top: 3px; margin-left: 2px; margin-right: 10px;"> de <?php echo $intPages; ?></div>
        <?php $intRef = $intPages == 1 ? 0 : 1; ?>
        <a ref="<?php echo $intRef; ?>" href="#" class="pag_next_a">
            <div class="pag_next" style="float:left; width:10px; height: 20px;"></div>
        </a>
        <?php $intEndPage = $intPages-1; ?>
        <a ref="<?php echo $intEndPage; ?>" href="#" class="pag_end_a">
            <div class="pag_end" style="float:left; width:13px; height: 20px; margin-left: 10px;"></div>
        </a>
    </div>
</div>
<script>
    $('document').ready(function(){
        var intPages = <?php echo $intPages; ?>;
        if(0 != parseInt(intPages)){
            $('.pag_start_a, .pag_prev_a, .pag_next_a, .pag_end_a').click(function(){
                goToPage(parseInt($(this).attr('ref')), parseInt(intPages));
                return false;
            })
        } else {
            $('.pag_start_a, .pag_prev_a, .pag_next_a, .pag_end_a').click(function(){
                goToPage(0, 0);
                return false;
            })
        }
    });
    
    function goToPage(intPage, intPages){
        if(0 == intPages){
            $('.pag_prev_a').attr('ref', '0');
        } else {
            for(i=0; i<intPages; i++){
                $('#directory_table_'+i).attr('class', 'hiddenContent');
            }
           if(parseInt(intPage)+1 == intPages){
                if(0 != intPage){
                    $('.pag_prev_a').attr('ref', parseInt(intPage)-1);
                } else {
                    $('.pag_prev_a').attr('ref', 0);
                }
                $('.pag_next_a').attr('ref', parseInt(intPage));
//                $('.pag_next_a').attr('ref', 2);
            } else {
                if(0 == parseInt(intPage)){
                    $('.pag_next_a').attr('ref', 1);
                }else {
                    if(0 != intPage){
                        $('.pag_prev_a').attr('ref', parseInt(intPage)-1);
                    } else {
                        $('.pag_prev_a').attr('ref', 0);
                    }
                    $('.pag_next_a').attr('ref', parseInt(intPage)+1);
                }
                
            }
            $('.pag_container').html(parseInt(intPage)+1);
            $('#directory_table_'+intPage).attr('class', 'showContentTable');
            $('#directory_table_'+intPage+' img:only-child').each(function(){
                $(this).attr('src', 'multimedia/'+$(this).attr('ref'));
            })
        }
    }
</script>