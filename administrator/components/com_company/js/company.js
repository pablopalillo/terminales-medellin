 $('document').ready(function(){
   $('#toolbar-new a:only-child').attr('onclick', '');
   $('#toolbar-new a:only-child').click(function(){
       document.location.href='index.php?option=com_company&task=addcompany';
   });
   $('#toolbar-save a:only-child').attr('onclick', '');
   $('#toolbar-save a:only-child').click(function(){
       $('#addCom').submit();
   });
   $('#toolbar-delete a:only-child').attr('onclick', '');
   $('#toolbar-delete a:only-child').click(function(){
       if($('input:checkbox:checked').length == 1){
          document.location.href='index.php?option=com_company&task=deletecompany&compId='+$('input:checkbox:checked').val();
      } else {
          if($('input:checkbox:checked').length == 0){
              alert('DEBE SELECCIONAR AL MENOS UN ELEMENTO');
          } else {
              alert('DEBE SELECCIONAR SOLO UN ELEMENTO');
          }
      }
   });
   $('#toolbar-cancel a:only-child').attr('onclick', '');
   $('#toolbar-cancel a:only-child').click(function(){
       document.location.href='index.php?option=com_company';
   });
})


