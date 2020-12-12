(function($) {
    "use strict";

    var editor = CKEDITOR.replace( 'content');
    editor.on( 'required', function( evt ) {
        editor.showNotification( '請輸入資料再按儲存.', 'warning' );
        evt.cancel();
    } );

    //Initialize Select2 Elements
    $('.select2').select2();

    //Initialize Select2 Elements
    $('.select2bs4').select2({
    theme: 'bootstrap4'
    });

    $("input[data-bootstrap-switch]").each(function(){
        $(this).bootstrapSwitch('state', $(this).prop('checked'));
    });

    // date time picker 設定
    $('.datetimepicker').datetimepicker({
        timeFormat: "HH:mm:ss",
        dateFormat: "yy-mm-dd",
    });
    $('.datepicker').datepicker({
        timeFormat: "HH:mm:ss",
        dateFormat: "yy-mm-dd",
    });
    $('.timepicker').timepicker({
        timeFormat: "HH:mm:ss",
        dateFormat: "yy-mm-dd",
    });
})(jQuery);
