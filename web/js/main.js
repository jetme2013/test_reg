
function showWindow(res) {
    resetModal.html(res);
    $('#reset-modal').modal('show');
}

var resetModal = $('#reset-modal .modal-body');

resetModal.on('submit', function (e) {
    $('.modal-body #refresh-password').show();
    console.log(e);
    e.preventDefault();

    $.ajax({
        url:'site/ajax-reset',
        data:{},
        type:'GET',
        success:function (res) {
            if(!res)console.log('error res');
            //console.log(res);
            showWindow(res);
        },
        error:function () {
            console.log('error');
        }

    });
});

