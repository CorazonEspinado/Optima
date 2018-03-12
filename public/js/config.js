$(document).ready(function () {
    moment().format('MMMM Do YYYY, h:mm:ss a');

    $.datepicker.setDefaults($.datepicker.regional['ru']);
    $('#datetimepicker').datetimepicker({
        timeFormat: "HH:mm",
        dateFormat:"yy-mm-dd",
        stepMinute: 10,
        controlType: "select",
        minDate:0,
        
    });

    $.datepicker.setDefaults($.datepicker.regional['ru']);
    $('#datetimepicker1').datetimepicker({
        timeFormat: "HH:mm",
        dateFormat:"yy-mm-dd",
        stepMinute: 10,
        controlType: "select",
        minDate:0,
    });
// show datetime picker

$('#calendarend').datetimepicker({
        timeFormat: "HH:mm",
        dateFormat:"yy-mm-dd",
        stepMinute: 10,
        controlType: "select",
        minDate:0,
    });
    
    $.datepicker.setDefaults($.datepicker.regional['ru']);
    $('#datetimepicker2').datetimepicker({
        timeFormat: "HH:mm",
        dateFormat:"yy-mm-dd",
        stepMinute: 10,
        controlType: "select",
        minDate:0,
    });

$.datepicker.setDefaults($.datepicker.regional['ru']);
    $('#datetimepicker3').datetimepicker({
        timeFormat: "HH:mm",
        dateFormat:"yy-mm-dd",
        stepMinute: 10,
        controlType: "select",
        minDate:0,
    });
    $.datepicker.setDefaults($.datepicker.regional['ru']);
    $('#datetimepicker4').datetimepicker({
        timeFormat: "HH:mm",
        dateFormat:"yy-mm-dd",
        stepMinute: 10,
        controlType: "select",
        minDate:0,
    });
    $.datepicker.setDefaults($.datepicker.regional['ru']);
    $('#datetimepicker5').datetimepicker({
        timeFormat: "HH:mm",
        dateFormat:"yy-mm-dd",
        stepMinute: 10,
        controlType: "select",
        minDate:0,
    });
    $.datepicker.setDefaults($.datepicker.regional['ru']);
    $('#datetimepicker6').datetimepicker({
        timeFormat: "HH:mm",
        dateFormat:"yy-mm-dd",
        stepMinute: 10,
        controlType: "select",
        minDate:0,
    });

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

});


