$(document).ready(function(){
    $('#addGalleryItem_form .date').DatePicker({
        format:'Y/m/d',
        date: new Date(),
        current: new Date(),
        starts: 1,
        position: 'r',
        onBeforeShow: function(){
                $('#addGalleryItem_form .date').DatePickerSetDate(new Date(), true);
        },
        onChange: function(formated, dates){
                $('#addGalleryItem_form .date').val(formated);
                $('#addGalleryItem_form .date').DatePickerHide();
        }
    });
    $('#toolbar-save a:only-child').click(function(){
//        var nameGallery = $('#addGallery_form .name').val();
//        if("" != nameGallery.length){
            $('#addGalleryItem_form').submit();
            return false;
//        }else {
//            alert('INGRESE EL NOMBRE DE LA GALERÍA');
//            return false;
//        }
    });  
    $('#toolbar-cancel a:only-child').click(function(){
        document.location.href='index.php?option=com_gallery';
        return false;
    });
})