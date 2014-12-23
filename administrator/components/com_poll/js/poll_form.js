$('document').ready(function(){
    $('#pollstartdate').DatePicker({
        format:'Y/m/d',
        date: new Date(),
        current: new Date(),
        starts: 1,
        position: 'r',
        onBeforeShow: function(){
                $('#pollstartdate').DatePickerSetDate(new Date(), true);
        },
        onChange: function(formated, dates){
                $('#pollstartdate').val(formated);
                $('#pollstartdate').DatePickerHide();
        }
    });
    $('#pollfinishdate').DatePicker({
        format:'Y/m/d',
        date: new Date(),
        current: new Date(),
        starts: 1,
        position: 'r',
        onBeforeShow: function(){
                $('#pollfinishdate').DatePickerSetDate(new Date(), true);
        },
        onChange: function(formated, dates){
                $('#pollfinishdate').val(formated);
                $('#pollfinishdate').DatePickerHide();
        }
    });
});