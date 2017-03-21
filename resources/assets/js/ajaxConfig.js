// Configure action for star and stop
$( document ).ajaxStart(function() {
    $('body').css({'cursor' : 'wait'});
}).ajaxStop(function() {
    $('body').css({'cursor' : 'default'});
});

// Configure Global redirect Forbiden AJAX
$( document ).ajaxError(function( event, jqxhr, settings, thrownError ) {
    if (jqxhr.status == 403) {
        bootbox.dialog({
            title: "Sessão Expirada",
            message: "A sessão atual expirou, por favor efetue o login para continuar acessando o sistema!",
            buttons: {
                "main": {
                    label: "<i class=\'fa fa-check-circle-o\'></i> OK",
                    className: "btn-primary",
                    callback: function () {
                        window.location.href = "/auth/login";
                    }
                }
            }
        });
    }
    else if (jqxhr.status == 404) {
        bootbox.dialog({
            title: "Erro",
            message: "A pagina solicitada não se encontra disponível",
            buttons: {
                "cancel": {
                    label: "<i class=\'fa fa-check-circle-o\'></i> OK",
                    className: "btn-primary"
                }
            }
        });
    }
    //else {
    //    bootbox.dialog({
    //        title: "Erro",
    //        message: "O seguinte erro foi reportado pelo sistema: <br /><br />" + jqxhr.status + " - " + jqxhr.statusText,
    //        buttons: {
    //            "cancel": {
    //                label: "<i class=\'fa fa-check-circle-o\'></i> OK",
    //                className: "btn-primary"
    //            }
    //        }
    //    });
    //}
});
