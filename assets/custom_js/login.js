$(function() {
    $('input').iCheck({
        checkboxClass: 'icheckbox_square-red',
        radioClass: 'iradio_square-red',
        increaseArea: '20%' // optional
    });
    var alert = $('.alert');
    setTimeout(function() {
        alert.slideUp('slow');
    }, 5000);
});